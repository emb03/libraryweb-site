<?php
/**
 * @file
 * uclalib_bookplates.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_pages().
 */
function uclalib_bookplates_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'articles';
  $page->task = 'page';
  $page->admin_title = 'Articles';
  $page->admin_description = '';
  $page->path = 'articles';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_articles__panel_context_8ce10943-51dc-4b07-a6a4-d255c4a7979d';
  $handler->task = 'page';
  $handler->subtask = 'articles';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
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
  $display->uuid = '5d9474a7-8d0c-4317-aaac-ac6c4fe77034';
  $display->window_title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-b4e94cf0-4450-42da-a4c2-2cb093a36374';
    $pane->panel = 'main';
    $pane->type = 'block';
    $pane->subtype = 'article_discovery-article_discovery_search_box';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'b4e94cf0-4450-42da-a4c2-2cb093a36374';
    $display->content['new-b4e94cf0-4450-42da-a4c2-2cb093a36374'] = $pane;
    $display->panels['main'][0] = 'new-b4e94cf0-4450-42da-a4c2-2cb093a36374';
    $pane = new stdClass();
    $pane->pid = 'new-a0800743-b1b8-4ed0-a511-0b2ff4a89195';
    $pane->panel = 'sidebar_left';
    $pane->type = 'block';
    $pane->subtype = 'article_discovery-article_discovery_facet_block';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'a0800743-b1b8-4ed0-a511-0b2ff4a89195';
    $display->content['new-a0800743-b1b8-4ed0-a511-0b2ff4a89195'] = $pane;
    $display->panels['sidebar_left'][0] = 'new-a0800743-b1b8-4ed0-a511-0b2ff4a89195';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-b4e94cf0-4450-42da-a4c2-2cb093a36374';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['articles'] = $page;

  return $pages;

}
