<?php
/**
 * @file
 * google_analytics_and_tag_manager.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function google_analytics_and_tag_manager_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: management_google-analytics:admin/config/system/googleanalytics
  $menu_links['management_google-analytics:admin/config/system/googleanalytics'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/system/googleanalytics',
    'router_path' => 'admin/config/system/googleanalytics',
    'link_title' => 'Google Analytics',
    'options' => array(
      'attributes' => array(
        'title' => 'Configure tracking behavior to get insights into your website traffic and marketing effectiveness.',
      ),
      'identifier' => 'management_google-analytics:admin/config/system/googleanalytics',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
    'parent_identifier' => 'management_system:admin/config/system',
  );
  // Exported menu link: management_google-tag-manager:admin/config/system/google_tag
  $menu_links['management_google-tag-manager:admin/config/system/google_tag'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/system/google_tag',
    'router_path' => 'admin/config/system/google_tag',
    'link_title' => 'Google Tag Manager',
    'options' => array(
      'attributes' => array(
        'title' => 'Configure the website integration with GTM and the resultant capturing of website analytics.',
      ),
      'identifier' => 'management_google-tag-manager:admin/config/system/google_tag',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
    'parent_identifier' => 'management_system:admin/config/system',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Google Analytics');
  t('Google Tag Manager');


  return $menu_links;
}
