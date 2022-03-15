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
// Local services setttings.
$settings['container_yamls'][] = __DIR__ . '/local.services.yml';
// Migrate boost settings.
$config['migrate_booster.settings']['modules'] = [
  'acquia_contenthub',
  'acquia_lift',
  'acquia_search',
  'admin_toolbar_tools',
  'autosave_form',
  'clamav',
  'cohesion',
  'colorapi',
  'depcalc',
  'devel',
  'diff',
  'ds',
  'dynamic_entity_reference',
  'entity_browser',
  'eva',
  'facets',
  'feeds',
  'feeds_tamper',
  'filehash',
  'focalpoint',
  'geocoder',
  'google_analytics',
  'groupmedia',
  'image_widget_crop',
  'legal',
  'linkchecker',
  'link_attributes',
  'metatag',
  'paragraphs_entity_embed',
  'pathauto',
  'redirect',
  'scheduled_publish',
  'scheduler',
  'scheduler_content_moderation_integration',
  'search_api',
  'search_api_autocomplete',
  'search_api_solr',
  'simplesamlphp_auth',
  'simple_sitemap',
  'siteimprove',
  'slick',
  'smart_date',
  'subgroup',
  'tmgmt',
  'token',
  'webform',
  'workbench_email',
  'xmlsitemap',
];
