<?php
/**
 * @file
 * uclalib_opening_hours.panelizer.inc
 */

/**
 * Implements hook_panelizer_defaults().
 */
function uclalib_opening_hours_panelizer_defaults() {
  $export = array();

  $panelizer = new stdClass();
  $panelizer->disabled = FALSE; /* Edit this to true to make a default panelizer disabled initially */
  $panelizer->api_version = 1;
  $panelizer->name = 'node:location:default:hours_page';
  $panelizer->title = 'Default';
  $panelizer->panelizer_type = 'node';
  $panelizer->panelizer_key = 'location';
  $panelizer->no_blocks = FALSE;
  $panelizer->css_id = '';
  $panelizer->css = '';
  $panelizer->pipeline = 'standard';
  $panelizer->contexts = array(
    0 => array(
      'identifier' => 'Global',
      'keyword' => 'global',
      'name' => 'token',
      'id' => 1,
    ),
  );
  $panelizer->relationships = array();
  $panelizer->access = array();
  $panelizer->view_mode = 'hours_page';
  $panelizer->css_class = '';
  $panelizer->title_element = 'H2';
  $panelizer->link_to_entity = TRUE;
  $panelizer->extra = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 100,
        'width_type' => '%',
        'children' => array(
          0 => 'main-row',
        ),
        'parent' => 'canvas',
      ),
      'main-row' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'left',
          1 => 'center',
        ),
        'parent' => 'main',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => '33.5',
        'width_type' => '%',
        'parent' => 'main-row',
      ),
      'left' => array(
        'type' => 'region',
        'title' => 'Left',
        'width' => '16.5',
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => '',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
      'center_' => NULL,
      'right' => NULL,
      'left' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = 'e24e2950-d153-4979-a392-a659f2606e1a';
  $display->window_title = '%node:title | %global:site:name';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-15e0fdaf-8344-49fa-81d7-8eb7d841eac2';
    $pane->panel = 'center';
    $pane->type = 'opening_hours_table';
    $pane->subtype = 'opening_hours_table';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'context' => 'panelizer',
      'override_title' => 1,
      'override_title_text' => 'Hours',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'mobile-collapsible  mobile-collapsible--title-hidden-on-desktop',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '15e0fdaf-8344-49fa-81d7-8eb7d841eac2';
    $display->content['new-15e0fdaf-8344-49fa-81d7-8eb7d841eac2'] = $pane;
    $display->panels['center'][0] = 'new-15e0fdaf-8344-49fa-81d7-8eb7d841eac2';
    $pane = new stdClass();
    $pane->pid = 'new-1d1b4584-02f8-4299-b9f5-8b1d2390639c';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_hours';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'title',
      'formatter' => 'library_hours_table',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'panelizer',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '1d1b4584-02f8-4299-b9f5-8b1d2390639c';
    $display->content['new-1d1b4584-02f8-4299-b9f5-8b1d2390639c'] = $pane;
    $display->panels['center'][1] = 'new-1d1b4584-02f8-4299-b9f5-8b1d2390639c';
    $pane = new stdClass();
    $pane->pid = 'new-26aa84a2-c3d2-4f8d-96f7-aa46ef884bc0';
    $pane->panel = 'left';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 1,
      'markup' => 'h2',
      'id' => '',
      'class' => '',
      'context' => 'panelizer',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '26aa84a2-c3d2-4f8d-96f7-aa46ef884bc0';
    $display->content['new-26aa84a2-c3d2-4f8d-96f7-aa46ef884bc0'] = $pane;
    $display->panels['left'][0] = 'new-26aa84a2-c3d2-4f8d-96f7-aa46ef884bc0';
    $pane = new stdClass();
    $pane->pid = 'new-3b670824-d7b7-4ae8-a7d8-ce16e7bd9897';
    $pane->panel = 'left';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_location_map_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image_link_formatter',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(
        'image_style' => 'thumbnail_large',
        'image_link' => 'field_location_map_link',
      ),
      'context' => 'panelizer',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '3b670824-d7b7-4ae8-a7d8-ce16e7bd9897';
    $display->content['new-3b670824-d7b7-4ae8-a7d8-ce16e7bd9897'] = $pane;
    $display->panels['left'][1] = 'new-3b670824-d7b7-4ae8-a7d8-ce16e7bd9897';
    $pane = new stdClass();
    $pane->pid = 'new-f847283e-0295-4abf-bb19-b2fcc15a28d1';
    $pane->panel = 'left';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_location_building';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'panelizer',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'f847283e-0295-4abf-bb19-b2fcc15a28d1';
    $display->content['new-f847283e-0295-4abf-bb19-b2fcc15a28d1'] = $pane;
    $display->panels['left'][2] = 'new-f847283e-0295-4abf-bb19-b2fcc15a28d1';
    $pane = new stdClass();
    $pane->pid = 'new-ee87f5e0-b093-41bf-bb66-63704b57f88e';
    $pane->panel = 'left';
    $pane->type = 'location_contact';
    $pane->subtype = 'location_contact';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'context' => 'panelizer',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'ee87f5e0-b093-41bf-bb66-63704b57f88e';
    $display->content['new-ee87f5e0-b093-41bf-bb66-63704b57f88e'] = $pane;
    $display->panels['left'][3] = 'new-ee87f5e0-b093-41bf-bb66-63704b57f88e';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $panelizer->display = $display;
  $export['node:location:default:hours_page'] = $panelizer;

  return $export;
}
