<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.OnuXj9Z' shared service.

return $this->privates['.service_locator.OnuXj9Z'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('guardAuthenticatorHandler' => function () {
    return ($this->privates['security.authentication.guard_handler'] ?? $this->load('getSecurity_Authentication_GuardHandlerService.php'));
}, 'loginFormAuthenticator' => function (): \App\Security\LoginFormAuthenticator {
    return ($this->privates['App\Security\LoginFormAuthenticator'] ?? $this->load('getLoginFormAuthenticatorService.php'));
}, 'manager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'token' => function (): \App\Entity\Token {
    return ($this->privates['.errored..service_locator.OnuXj9Z.App\Entity\Token'] ?? $this->load('getTokenService.php'));
}));
