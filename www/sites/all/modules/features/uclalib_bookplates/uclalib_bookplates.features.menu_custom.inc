<?php
/**
 * @file
 * uclalib_bookplates.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function uclalib_bookplates_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-bookplates-breadcrumbs.
  $menus['menu-bookplates-breadcrumbs'] = array(
    'menu_name' => 'menu-bookplates-breadcrumbs',
    'title' => 'Bookplates breadcrumbs',
    'description' => 'Bookplates breadcrumbs Navigation',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Bookplates breadcrumbs');
  t('Bookplates breadcrumbs Navigation');


  return $menus;
}
