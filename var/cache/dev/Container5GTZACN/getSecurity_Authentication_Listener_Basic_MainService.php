<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.basic.main' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Firewall\\BasicAuthenticationListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\EntryPoint\\BasicAuthenticationEntryPoint.php';

$this->privates['security.authentication.listener.basic.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', ($this->privates['security.authentication.basic_entry_point.main'] ?? ($this->privates['security.authentication.basic_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area'))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

$instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

return $instance;
