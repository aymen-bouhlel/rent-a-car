<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.evt2lKM' shared service.

return $this->privates['.service_locator.evt2lKM'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('guardAuthenticatorHandler' => function () {
    return ($this->privates['security.authentication.guard_handler'] ?? $this->load('getSecurity_Authentication_GuardHandlerService.php'));
}, 'loginFormAuthenticator' => function (): \App\Security\LoginFormAuthenticator {
    return ($this->privates['App\Security\LoginFormAuthenticator'] ?? $this->load('getLoginFormAuthenticatorService.php'));
}, 'manager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'passwordEncoder' => function () {
    return ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'));
}, 'tokenSendler' => function (): \App\Services\TokenSendler {
    return ($this->privates['App\Services\TokenSendler'] ?? $this->load('getTokenSendlerService.php'));
}));
