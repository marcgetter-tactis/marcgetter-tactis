<?php

/**
 * @file
 * Generated by BLT. Serves as an example of global includes.
 */

use Acquia\Blt\Robo\Common\EnvironmentDetector;

// Increase memory for cli / drush commands only.
if (PHP_SAPI === 'cli') {
  ini_set('memory_limit', '-1');
}

if (EnvironmentDetector::isDevEnv()) {
  // Adding D7 database for migration - DEV.
  $databases['d7']['default'] = [
    'database' => 'justicegodb455729',
    'username' => 's114053',
    'password' => 'HbXsToFBrFrvGXi',
    'host' => 'staging-43171',
    'port' => '3306',
    'driver' => 'mysql',
    'prefix' => '',
    'collation' => 'utf8mb4_general_ci',
  ];
}

if (EnvironmentDetector::isStageEnv()) {
  // Adding D7 database for migration - STG.
  $databases['d7']['default'] = [
    'database' => 'justicegodb455732',
    'username' => 's114054',
    'password' => 'r5rVsmoZ88TWn5j',
    'host' => 'staging-43171',
    'port' => '3306',
    'driver' => 'mysql',
    'prefix' => '',
    'collation' => 'utf8mb4_general_ci',
  ];
}

if (EnvironmentDetector::isProdEnv()) {
  // Adding D7 database for migration - PROD.
  $databases['d7']['default'] = [
    'database' => 'justicegodb455730',
    'username' => 's114052',
    'password' => '5vcvVzZJ7ZxoVpP',
    'host' => 'fsdb-43165',
    'port' => '3306',
    'driver' => 'mysql',
    'prefix' => '',
    'collation' => 'utf8mb4_general_ci',
  ];
}

