<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.sale_listener' shared autowired service.

include_once $this->targetDirs[3].'/src/EventListener/SaleListener.php';

return $this->privates['app.sale_listener'] = new \App\EventListener\SaleListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));
