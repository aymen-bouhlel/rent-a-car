<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Resolver\File;

use Fidry\AliceDataFixtures\FileResolverInterface;
use Hautelook\AliceBundle\Functional\SimpleKernel;
use Hautelook\AliceBundle\HttpKernel\DummyKernel;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * @covers \Hautelook\AliceBundle\Resolver\File\KernelFileResolver
 */
class KernelFileResolverTest extends TestCase
{
    /**
     * @var KernelInterface|null
     */
    protected $kernel;

    /**
     * {@inheritdoc}
     */
    public function tearDown()
    {
        if (null !== $this->kernel) {
            $this->kernel->shutdown();
        }
    }

    public function testIsAFileResolver()
    {
        $this->assertTrue(is_a(KernelFileResolver::class, FileResolverInterface::class, true));
    }

    public function testIsNotClonable()
    {
        $this->assertFalse((new ReflectionClass(KernelFileResolver::class))->isCloneable());
    }

    public function testReturnResolvedFiles()
    {
        $files = $expected = [
            __FILE__,
        ];

        $resolver = new KernelFileResolver(new DummyKernel());
        $actual = $resolver->resolve($files);

        $this->assertSame($expected, $actual);
    }

    /**
     * @expectedException \TypeError
     */
    public function testThrowsAnErrorIfOneOfTheFilePathGivenIsNotAString()
    {
        $resolver = new KernelFileResolver(new DummyKernel());
        $resolver->resolve([true]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The file "unknown" was not found.
     */
    public function testThrowsAnExceptionIfFileDoesNotExist()
    {
        $resolver = new KernelFileResolver(new DummyKernel());
        $resolver->resolve(['unknown']);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessageRegExp /^Expected "\/.*?\/tests\/Resolver\/File" to be a fixture file, got a directory instead\.$/
     */
    public function testThrowsAnExceptionIfFileIsADirectory()
    {
        $resolver = new KernelFileResolver(new DummyKernel());
        $resolver->resolve([__DIR__]);
    }

    public function testResolveFileWithTheKernelIfPossible()
    {
        $files = [
            '@SimpleBundle/files/foo.yml',
            __FILE__,
        ];

        $this->kernel = new SimpleKernel('SimpleKernel_test', true);
        $this->kernel->boot();

        $expected = [
            realpath(__DIR__.'/../../../fixtures/Functional/SimpleBundle/files/foo.yml'),
            __FILE__,
        ];

        $resolver = new KernelFileResolver($this->kernel);
        $actual = $resolver->resolve($files);

        $this->assertSame($expected, $actual);
    }

    /**
     * @expectedException \TypeError
     */
    public function testThrowsAnErrorIfTheFileResolvedByTheKernelIsNotAString()
    {
        $files = [
            '@SimpleBundle/files/foo.yml',
        ];

        $this->kernel = new SimpleKernel('SimpleKernel_test', true);
        $this->kernel->setLocateResourceFirst(false);
        $this->kernel->boot();

        $resolver = new KernelFileResolver($this->kernel);
        $resolver->resolve($files);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsAnExceptionIfFileResolvedByTheKernelDoesNotExist()
    {
        $files = [
            '@SimpleBundle/dummy.yml',
        ];

        $this->kernel = new SimpleKernel('SimpleKernel_test', true);
        $this->kernel->boot();

        $resolver = new KernelFileResolver($this->kernel);
        $resolver->resolve($files);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Expected "@SimpleBundle/files" to be a fixture file, got a directory instead.
     */
    public function testThrowsAnExceptionIfFileResolvedByTheKernelIsADirectory()
    {
        $files = [
            '@SimpleBundle/files',
        ];

        $this->kernel = new SimpleKernel('SimpleKernel_test', true);
        $this->kernel->boot();

        $resolver = new KernelFileResolver($this->kernel);
        $resolver->resolve($files);
    }

    public function testAbsoluteFilePathAreReturnedAndDuplicatesAreRemoved()
    {
        $files = [
            '@SimpleBundle/files/foo.yml',
            '@SimpleBundle/files/bar.yml',
            __FILE__,
            __DIR__.'/../File/KernelFileResolverTest.php',
        ];

        $this->kernel = new SimpleKernel('SimpleKernel_test', true);
        $this->kernel->boot();

        $expected = [
            realpath(__DIR__.'/../../../fixtures/Functional/SimpleBundle/files/foo.yml'),
            realpath(__DIR__.'/../../../fixtures/Functional/SimpleBundle/files/bar.yml'),
            __FILE__,
        ];

        $resolver = new KernelFileResolver($this->kernel);
        $actual = $resolver->resolve($files);

        $this->assertSame($expected, $actual);
    }
}
