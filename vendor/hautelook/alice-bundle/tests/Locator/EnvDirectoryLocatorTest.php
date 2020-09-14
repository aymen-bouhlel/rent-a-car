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
use Hautelook\AliceBundle\Locator\EnvDirectoryLocator\AnotherDummyBundle\AnotherDummyBundle;
use Hautelook\AliceBundle\Locator\EnvDirectoryLocator\DummyBundle\DummyBundle;
use Hautelook\AliceBundle\Locator\EnvDirectoryLocator\EmptyBundle\EmptyBundle;
use Hautelook\AliceBundle\Locator\EnvDirectoryLocator\OneMoreDummyBundle\OneMoreDummyBundle;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @covers \Hautelook\AliceBundle\Locator\EnvDirectoryLocator
 */
class EnvDirectoryLocatorTest extends TestCase
{
    public function testIsAFixtureLocator()
    {
        $this->assertTrue(is_a(EnvDirectoryLocator::class, FixtureLocatorInterface::class, true));
    }

    public function testIsNotClonable()
    {
        $this->assertFalse((new ReflectionClass(EnvDirectoryLocator::class))->isCloneable());
    }

    /**
     * @dataProvider provideSets
     */
    public function testGetFilesFromABundle(array $bundles, string $environment, string $path, array $expected)
    {
        $invalidPath = '';
        $locator = new EnvDirectoryLocator($path, [$invalidPath]);
        $actual = $locator->locateFiles($bundles, $environment);

        $this->assertEquals($expected, $actual, '', 0.0, 10, true);
    }

    public function provideSets()
    {
        yield 'bundle without any resources' => [
            [new EmptyBundle()],
            'test',
            'Resources/fixtures',
            [],
        ];

        yield 'bundle with non-existing path' => [
            [new EmptyBundle()],
            'test',
            'ftp://Resources/fixtures',
            [],
        ];

        yield 'bundle with file as path' => [
            [new EmptyBundle()],
            'test',
            'Resources/fixtures/test/file1.yml',
            [],
        ];

        yield 'bundle with fixture files' => [
            [new DummyBundle()],
            'test',
            'Resources/fixtures',
            [
                sprintf('%s/file1.yml', $prefix = realpath(__DIR__.'/../../fixtures/Locator/EnvDirectoryLocator/DummyBundle/Resources/fixtures/test')),
                $prefix.'/file2.yaml',
                $prefix.'/file3.php',
                $prefix.'/file5.YML',
                $prefix.'/file6.YAML',
            ],
        ];

        yield 'bundle  with fixture files but no fixtures in env' => [
            [new DummyBundle()],
            '',
            'Resources/fixtures',
            [],
        ];

        yield 'bundle with fixture files' => [
            [new DummyBundle()],
            '',
            'Resources/fixtures/test',
            [
                $prefix.'/file1.yml',
                $prefix.'/file2.yaml',
                $prefix.'/file3.php',
                $prefix.'/file5.YML',
                $prefix.'/file6.YAML',
            ],
        ];

        yield 'bundle with fixture files in a custom directory' => [
            [new AnotherDummyBundle()],
            'dev',
            'resources',
            [
                realpath(__DIR__.'/../../fixtures/Locator/EnvDirectoryLocator/AnotherDummyBundle/resources/dev/file10.yml'),
            ],
        ];

        yield 'bundle with fixture directory but no fixture files' => [
            [new AnotherDummyBundle()],
            'test',
            'resources',
            [],
        ];
    }

    /**
     * @dataProvider provideSetsForSeveralBundles
     */
    public function testGetFilesFromSeveralBundles(
        array $bundles,
        string $environment,
        string $path,
        array $expected
    ) {
        $invalidPath = '';
        $locator = new EnvDirectoryLocator($path, [$invalidPath]);
        $actual = $locator->locateFiles($bundles, $environment);

        $this->assertEquals($expected, $actual, '', 0.0, 10, true);
    }

    public function provideSetsForSeveralBundles()
    {
        $baseDir = 'Resources'.\DIRECTORY_SEPARATOR.'fixtures';
        $env = 'test';

        $bundleA = new DummyBundle();
        $bundleB = new OneMoreDummyBundle();

        $prefixA = $bundleA->getPath().\DIRECTORY_SEPARATOR.$baseDir.\DIRECTORY_SEPARATOR.$env.\DIRECTORY_SEPARATOR;
        $prefixB = $bundleB->getPath().\DIRECTORY_SEPARATOR.$baseDir.\DIRECTORY_SEPARATOR.$env.\DIRECTORY_SEPARATOR;

        yield 'several bundles with fixture files' => [
            [$bundleA, $bundleB],
            $env,
            $baseDir,
            [
                $prefixA.'file1.yml',
                $prefixA.'file2.yaml',
                $prefixA.'file3.php',
                $prefixA.'file5.YML',
                $prefixA.'file6.YAML',

                $prefixB.'file1.yml',
                $prefixB.'file2.yaml',
                $prefixB.'file3.php',
            ],
        ];
    }

    public function testGetFilesFromProjectDir()
    {
        $basePath = realpath(__DIR__.'/../..');

        $locator = new EnvDirectoryLocator('fixtures/fixture_files', [$basePath]);
        $this->assertSame([$basePath.'/fixtures/fixture_files/city.yml'], $locator->locateFiles([], ''));
    }
}
