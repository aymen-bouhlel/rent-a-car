<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hautelook_alice.loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\hautelook\\alice-bundle\\src\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hautelook\\alice-bundle\\src\\LoggerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\nelmio\\alice\\src\\IsAServiceTrait.php';
include_once $this->targetDirs[3].'\\vendor\\hautelook\\alice-bundle\\src\\Loader\\DoctrineOrmLoader.php';

return $this->services['hautelook_alice.loader'] = new \Hautelook\AliceBundle\Loader\DoctrineOrmLoader(($this->services['hautelook_alice.resolver.bundle'] ?? $this->load('getHautelookAlice_Resolver_BundleService.php')), ($this->services['hautelook_alice.locator'] ?? $this->load('getHautelookAlice_LocatorService.php')), ($this->services['hautelook_alice.data_fixtures.purge_loader'] ?? $this->load('getHautelookAlice_DataFixtures_PurgeLoaderService.php')), ($this->services['hautelook_alice.data_fixtures.append_loader'] ?? $this->load('getHautelookAlice_DataFixtures_AppendLoaderService.php')), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
