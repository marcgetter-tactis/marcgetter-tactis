<?php

/**
 * @file
 * Local development override configuration.
 */

/**
 * Database configuration.
 */
$databases['d7']['default'] = [
  'database' => 'db',
  'username' => 'db',
  'password' => 'db',
  'host' => 'ddev-doj-db',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
];
$settings['container_yamls'][] = __DIR__ . '/local.services.yml';
