<?php
/**
 * @file
 * uclalib_search.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_pages().
 */
function uclalib_search_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'news_search_page';
  $page->task = 'page';
  $page->admin_title = 'News Search Page';
  $page->admin_description = '';
  $page->path = 'news';
  $page->access = array(
    'type' => 'none',
    'settings' => NULL,
  );
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_news_search_page_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'news_search_page';
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
  $display->layout = 'sidebar-left';
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
  $display->title = 'UCLA Library News';
  $display->uuid = '3ccf3608-6195-4c27-b3aa-eb6df7877716';
  $display->window_title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-76447b2e-881a-422f-857e-47ec2a08a22b';
    $pane->panel = 'main';
    $pane->type = 'views_panes';
    $pane->subtype = 'news_search-news_search';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'path' => '',
      'override_title' => 0,
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
    $pane->uuid = '76447b2e-881a-422f-857e-47ec2a08a22b';
    $display->content['new-76447b2e-881a-422f-857e-47ec2a08a22b'] = $pane;
    $display->panels['main'][0] = 'new-76447b2e-881a-422f-857e-47ec2a08a22b';
    $pane = new stdClass();
    $pane->pid = 'new-413bbd59-1d96-4e26-b398-e386d1bd5cad';
    $pane->panel = 'sidebar_left';
    $pane->type = 'block';
    $pane->subtype = 'views--exp-news_search-news_search';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'inherit_path' => 1,
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'sidebar-search',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '413bbd59-1d96-4e26-b398-e386d1bd5cad';
    $display->content['new-413bbd59-1d96-4e26-b398-e386d1bd5cad'] = $pane;
    $display->panels['sidebar_left'][0] = 'new-413bbd59-1d96-4e26-b398-e386d1bd5cad';
    $pane = new stdClass();
    $pane->pid = 'new-25a718ea-6e1e-4e4f-b3fd-15c08509c0c9';
    $pane->panel = 'sidebar_left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-Dc1qU0dwxgIBMqJw2hsEBHKKXSdiRmmV';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Location',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'pane_collapsed' => 1,
      ),
      'style' => 'collapsible',
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'sidebar-options',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '25a718ea-6e1e-4e4f-b3fd-15c08509c0c9';
    $display->content['new-25a718ea-6e1e-4e4f-b3fd-15c08509c0c9'] = $pane;
    $display->panels['sidebar_left'][1] = 'new-25a718ea-6e1e-4e4f-b3fd-15c08509c0c9';
    $pane = new stdClass();
    $pane->pid = 'new-49fd72f2-1a0d-48d3-b87d-7c263f874897';
    $pane->panel = 'sidebar_left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-84S0KVjaMOzKINqvN9dhV2N1rBClgyEu';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Series',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'pane_collapsed' => 1,
      ),
      'style' => 'collapsible',
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'sidebar-options',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '49fd72f2-1a0d-48d3-b87d-7c263f874897';
    $display->content['new-49fd72f2-1a0d-48d3-b87d-7c263f874897'] = $pane;
    $display->panels['sidebar_left'][2] = 'new-49fd72f2-1a0d-48d3-b87d-7c263f874897';
    $pane = new stdClass();
    $pane->pid = 'new-ca5b9381-0933-4e4a-a2a2-b1c0634b06a3';
    $pane->panel = 'sidebar_left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-1qpndRwdfnD7bkZtKnnGtokz0uDgzZul';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Category',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'pane_collapsed' => 1,
      ),
      'style' => 'collapsible',
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'sidebar-options',
    );
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'ca5b9381-0933-4e4a-a2a2-b1c0634b06a3';
    $display->content['new-ca5b9381-0933-4e4a-a2a2-b1c0634b06a3'] = $pane;
    $display->panels['sidebar_left'][3] = 'new-ca5b9381-0933-4e4a-a2a2-b1c0634b06a3';
    $pane = new stdClass();
    $pane->pid = 'new-6b50453e-edc5-484b-9f80-fcf03cb60c02';
    $pane->panel = 'sidebar_left';
    $pane->type = 'block';
    $pane->subtype = 'facetapi-PzdHd4VPqXA3qjWQCFasjwlBBCzmEbe0';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'Audience',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'pane_collapsed' => 1,
      ),
      'style' => 'collapsible',
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'sidebar-options',
    );
    $pane->extras = array();
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = '6b50453e-edc5-484b-9f80-fcf03cb60c02';
    $display->content['new-6b50453e-edc5-484b-9f80-fcf03cb60c02'] = $pane;
    $display->panels['sidebar_left'][4] = 'new-6b50453e-edc5-484b-9f80-fcf03cb60c02';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-76447b2e-881a-422f-857e-47ec2a08a22b';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['news_search_page'] = $page;

  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'staff_directory';
  $page->task = 'page';
  $page->admin_title = 'Staff Directory';
  $page->admin_description = '';
  $page->path = 'staff';
  $page->access = array(
    'type' => 'none',
    'settings' => NULL,
  );
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_staff_directory_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'staff_directory';
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
  $display->layout = 'sidebar-left';
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
  $display->title = 'Staff Directory';
  $display->uuid = 'b6845ffe-955f-4c42-9a20-5cd2a00c4bd4';
  $display->window_title = 'UCLA Library Staff Directory | %node:title';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-f6981755-abbb-4475-a15a-e89d534affd6';
    $pane->panel = 'main';
    $pane->type = 'staff_search_pane';
    $pane->subtype = 'staff_search_pane';
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
      'style' => 'background-gray',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'f6981755-abbb-4475-a15a-e89d534affd6';
    $display->content['new-f6981755-abbb-4475-a15a-e89d534affd6'] = $pane;
    $display->panels['main'][0] = 'new-f6981755-abbb-4475-a15a-e89d534affd6';
    $pane = new stdClass();
    $pane->pid = 'new-318ffa0b-7474-4f21-ac4a-1c52e448f07d';
    $pane->panel = 'main';
    $pane->type = 'horizontal_rule';
    $pane->subtype = 'horizontal_rule';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '318ffa0b-7474-4f21-ac4a-1c52e448f07d';
    $display->content['new-318ffa0b-7474-4f21-ac4a-1c52e448f07d'] = $pane;
    $display->panels['main'][1] = 'new-318ffa0b-7474-4f21-ac4a-1c52e448f07d';
    $pane = new stdClass();
    $pane->pid = 'new-a917bac1-74df-4a0f-b558-b6b6cee0bdb4';
    $pane->panel = 'main';
    $pane->type = 'views_panes';
    $pane->subtype = 'staff_directory_a_z_list-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'a917bac1-74df-4a0f-b558-b6b6cee0bdb4';
    $display->content['new-a917bac1-74df-4a0f-b558-b6b6cee0bdb4'] = $pane;
    $display->panels['main'][2] = 'new-a917bac1-74df-4a0f-b558-b6b6cee0bdb4';
    $pane = new stdClass();
    $pane->pid = 'new-4b2ac631-9ad6-49f2-9f3c-6fea4df942c2';
    $pane->panel = 'main';
    $pane->type = 'horizontal_rule';
    $pane->subtype = 'horizontal_rule';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '4b2ac631-9ad6-49f2-9f3c-6fea4df942c2';
    $display->content['new-4b2ac631-9ad6-49f2-9f3c-6fea4df942c2'] = $pane;
    $display->panels['main'][3] = 'new-4b2ac631-9ad6-49f2-9f3c-6fea4df942c2';
    $pane = new stdClass();
    $pane->pid = 'new-ce891a91-594f-4247-96aa-a58a3e80058d';
    $pane->panel = 'main';
    $pane->type = 'views_panes';
    $pane->subtype = 'browse_libraries_departments-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'ce891a91-594f-4247-96aa-a58a3e80058d';
    $display->content['new-ce891a91-594f-4247-96aa-a58a3e80058d'] = $pane;
    $display->panels['main'][4] = 'new-ce891a91-594f-4247-96aa-a58a3e80058d';
    $pane = new stdClass();
    $pane->pid = 'new-92cd79f3-1846-444f-93c6-7031bd238efd';
    $pane->panel = 'sidebar_left';
    $pane->type = 'uclalib_nav';
    $pane->subtype = 'uclalib_nav';
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
    $pane->uuid = '92cd79f3-1846-444f-93c6-7031bd238efd';
    $display->content['new-92cd79f3-1846-444f-93c6-7031bd238efd'] = $pane;
    $display->panels['sidebar_left'][0] = 'new-92cd79f3-1846-444f-93c6-7031bd238efd';
    $pane = new stdClass();
    $pane->pid = 'new-4c9bfff1-ca0f-4d20-a1d2-4e0dfa54f34a';
    $pane->panel = 'top';
    $pane->type = 'block';
    $pane->subtype = 'bean-staff-directory-landing-page';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
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
    $pane->uuid = '4c9bfff1-ca0f-4d20-a1d2-4e0dfa54f34a';
    $display->content['new-4c9bfff1-ca0f-4d20-a1d2-4e0dfa54f34a'] = $pane;
    $display->panels['top'][0] = 'new-4c9bfff1-ca0f-4d20-a1d2-4e0dfa54f34a';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['staff_directory'] = $page;

  return $pages;

}
