<?php
/**
 * @file
 * uclalib_staff_directory.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function uclalib_staff_directory_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'term_view__panel_context_6b5a6cde-9951-4b7d-b338-77c91239311e';
  $handler->task = 'term_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -27;
  $handler->conf = array(
    'title' => 'Staff Directory',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
    'access' => array(
      'plugins' => array(
        2 => array(
          'name' => 'term_vocabulary',
          'settings' => array(
            'machine_name' => array(
              'staff_departments' => 'staff_departments',
            ),
          ),
          'context' => 'argument_term_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'sidebar-left-golden';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'sidebar_left' => NULL,
      'main' => NULL,
      'below_main_left' => NULL,
      'below_main_right' => NULL,
      'secondary' => NULL,
      'below_secondary_left' => NULL,
      'below_secondary_right' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '631025e2-d521-4b93-8a46-4a769e5a5895';
  $display->window_title = 'UCLA Library Staff Directory | %node:title';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-67bd1395-b920-4f35-b57f-4de2490a6319';
    $pane->panel = 'main';
    $pane->type = 'views_panes';
    $pane->subtype = 'staff_profiles-panel_pane_3';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '67bd1395-b920-4f35-b57f-4de2490a6319';
    $display->content['new-67bd1395-b920-4f35-b57f-4de2490a6319'] = $pane;
    $display->panels['main'][0] = 'new-67bd1395-b920-4f35-b57f-4de2490a6319';
  $display->hide_title = PANELS_TITLE_PANE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['term_view__panel_context_6b5a6cde-9951-4b7d-b338-77c91239311e'] = $handler;

  return $export;
}
