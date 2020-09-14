<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Locator;

use Hautelook\AliceBundle\FixtureLocatorInterface;
use Nelmio\Alice\IsAServiceTrait;
use Symfony\Component\Finder\Finder as SymfonyFinder;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

final class EnvDirectoryLocator implements FixtureLocatorInterface
{
    use IsAServiceTrait;

    private $fixturesPath;
    private $rootDirs;

    /**
     * @param string   $fixturePath path to which to look for fixtures relative to the bundle/base directory paths
     * @param string[] $rootDirs    root directories
     */
    public function __construct(string $fixturePath, array $rootDirs)
    {
        $this->fixturesPath = $fixturePath;
        $this->rootDirs = $rootDirs;
    }

    /**
     * Locates fixture files found inside a folder matching the environment name.
     *
     * For example, if the given fixture path is 'Resources/fixtures', it will try to locate
     * the files in the 'Resources/fixtures/dev' for each bundle passed ('dev' being the
     * environment).
     *
     * {@inheritdoc}
     */
    public function locateFiles(array $bundles, string $environment): array
    {
        $fixtureFiles = array_merge(
            ...array_map(
                function (string $rootDir) use ($environment): array {
                    return $this->doLocateFiles($rootDir, $environment);
                },
                $this->rootDirs
            ),
            ...array_map(
                function (BundleInterface $bundle) use ($environment): array {
                    return $this->doLocateFiles($bundle->getPath(), $environment);
                },
                $bundles
            )
        );

        return $fixtureFiles;
    }

    /**
     * Gets the list of files that can be found in the given path.
     *
     *
     * @return string[]
     */
    private function doLocateFiles(string $path, string $environment): array
    {
        $path = '' !== $environment
            ? sprintf('%s/%s/%s', $path, $this->fixturesPath, $environment)
            : sprintf('%s/%s', $path, $this->fixturesPath)
        ;

        $path = realpath($path);

        if (false === $path || false === file_exists($path)) {
            return [];
        }

        $files = SymfonyFinder::create()->files()->in($path)->depth(0)->name('/.*\.(ya?ml|php)$/i');

        // this sort helps to set an order with filename ( "001-root-level-fixtures.yml", "002-another-level-fixtures.yml", ... )
        $files = $files->sort(function ($a, $b) {
            return strcasecmp($a, $b);
        });

        $fixtureFiles = [];
        foreach ($files as $file) {
            $fixtureFiles[$file->getRealPath()] = true;
        }

        return array_keys($fixtureFiles);
    }
}
