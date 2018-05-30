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

  return $export;
}
