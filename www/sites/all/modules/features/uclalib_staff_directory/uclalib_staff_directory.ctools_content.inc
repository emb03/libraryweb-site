<?php
/**
 * @file
 * uclalib_staff_directory.ctools_content.inc
 */

/**
 * Implements hook_default_ctools_custom_content().
 */
function uclalib_staff_directory_default_ctools_custom_content() {
  $export = array();

  $content = new stdClass();
  $content->disabled = FALSE; /* Edit this to true to make a default content disabled initially */
  $content->api_version = 1;
  $content->name = 'browse_library_department';
  $content->admin_title = 'Browse by Library or Department';
  $content->admin_description = '';
  $content->category = '';
  $content->settings = array(
    'admin_title' => 'Browse by Library or Department',
    'title' => '',
    'body' => '',
    'format' => 'full_html',
    'substitute' => TRUE,
  );
  $export['browse_library_department'] = $content;

  return $export;
}
