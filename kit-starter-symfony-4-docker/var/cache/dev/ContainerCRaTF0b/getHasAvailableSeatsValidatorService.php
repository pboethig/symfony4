<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Validator\Constraint\HasAvailableSeatsValidator' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/src/Validator/Constraint/HasAvailableSeatsValidator.php';

return $this->privates['App\Validator\Constraint\HasAvailableSeatsValidator'] = new \App\Validator\Constraint\HasAvailableSeatsValidator();
