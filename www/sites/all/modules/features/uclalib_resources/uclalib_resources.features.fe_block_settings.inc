<?php
/**
 * @file
 * uclalib_resources.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function uclalib_resources_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['bean-find-printers-copiers-and-other-'] = array(
    'cache' => 1,
    'custom' => 0,
    'delta' => 'find-printers-copiers-and-other-',
    'module' => 'bean',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'uclalib_omega' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'uclalib_omega',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  return $export;
}
