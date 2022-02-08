<?php

/**
 * @file
 * Local development override configuration.
 */

/**
 * Database configuration.
 */
$databases['migrate']['default'] = [
  'database' => 'db',
  'username' => 'db',
  'password' => 'db',
  'host' => 'ddev-doj-db',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
];
