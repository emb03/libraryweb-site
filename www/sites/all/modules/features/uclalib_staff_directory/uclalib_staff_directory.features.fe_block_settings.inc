<?php
/**
 * @file
 * uclalib_staff_directory.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function uclalib_staff_directory_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['bean-staff-directory-landing-page'] = array(
    'cache' => 1,
    'custom' => 0,
    'delta' => 'staff-directory-landing-page',
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

  $export['views-b954de8eb7d4895146983e3ae88f258e'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'b954de8eb7d4895146983e3ae88f258e',
    'module' => 'views',
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
