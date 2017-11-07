<?php
/**
 * @file
 * uclalib_staff_directory.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function uclalib_staff_directory_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'browse_libraries_departments';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'taxonomy_term_data';
  $view->human_name = 'Browse Libraries Departments';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'tree';
  $handler->display->display_options['style_options']['main_field'] = 'tid';
  $handler->display->display_options['style_options']['parent_field'] = 'tid_1';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Taxonomy term: Parent term */
  $handler->display->display_options['relationships']['parent']['id'] = 'parent';
  $handler->display->display_options['relationships']['parent']['table'] = 'taxonomy_term_hierarchy';
  $handler->display->display_options['relationships']['parent']['field'] = 'parent';
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['label'] = '';
  $handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['name']['link_to_taxonomy'] = TRUE;
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name_1']['id'] = 'name_1';
  $handler->display->display_options['fields']['name_1']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name_1']['field'] = 'name';
  $handler->display->display_options['fields']['name_1']['relationship'] = 'parent';
  $handler->display->display_options['fields']['name_1']['label'] = '';
  $handler->display->display_options['fields']['name_1']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name_1']['element_label_colon'] = FALSE;
  /* Field: Taxonomy term: Term ID */
  $handler->display->display_options['fields']['tid']['id'] = 'tid';
  $handler->display->display_options['fields']['tid']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['tid']['field'] = 'tid';
  $handler->display->display_options['fields']['tid']['exclude'] = TRUE;
  /* Field: Taxonomy term: Term ID */
  $handler->display->display_options['fields']['tid_1']['id'] = 'tid_1';
  $handler->display->display_options['fields']['tid_1']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['tid_1']['field'] = 'tid';
  $handler->display->display_options['fields']['tid_1']['relationship'] = 'parent';
  $handler->display->display_options['fields']['tid_1']['exclude'] = TRUE;
  /* Filter criterion: Taxonomy vocabulary: Machine name */
  $handler->display->display_options['filters']['machine_name']['id'] = 'machine_name';
  $handler->display->display_options['filters']['machine_name']['table'] = 'taxonomy_vocabulary';
  $handler->display->display_options['filters']['machine_name']['field'] = 'machine_name';
  $handler->display->display_options['filters']['machine_name']['value'] = array(
    'staff_departments' => 'staff_departments',
  );
  $handler->display->display_options['filters']['machine_name']['group'] = 1;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'browse-libraries-departments';

  /* Display: Browse Libraries Departments */
  $handler = $view->new_display('panel_pane', 'Browse Libraries Departments', 'panel_pane_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'BROWSE BY DEPARTMENT OR LIBRARY';
  $handler->display->display_options['inherit_panels_path'] = '1';
  $export['browse_libraries_departments'] = $view;

  $view = new view();
  $view->name = 'staff_directory_a_z_list';
  $view->description = 'A list of all content, by letter.';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Staff Directory A-Z List';
  $view->core = 0;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'input_required';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = 36;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_staff_first_name' => 'field_staff_first_name',
    'field_staff_last_name' => 'field_staff_last_name',
  );
  /* Relationship: Content: Staff Departments (field_staff_departments) */
  $handler->display->display_options['relationships']['field_staff_departments_tid']['id'] = 'field_staff_departments_tid';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['table'] = 'field_data_field_staff_departments';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['field'] = 'field_staff_departments_tid';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['required'] = TRUE;
  /* Field: Content: Staff Image Thumbnail */
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['id'] = 'field_staff_image_thumbnail';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['table'] = 'field_data_field_staff_image_thumbnail';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['field'] = 'field_staff_image_thumbnail';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['label'] = '';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Staff First Name */
  $handler->display->display_options['fields']['field_staff_first_name']['id'] = 'field_staff_first_name';
  $handler->display->display_options['fields']['field_staff_first_name']['table'] = 'field_data_field_staff_first_name';
  $handler->display->display_options['fields']['field_staff_first_name']['field'] = 'field_staff_first_name';
  $handler->display->display_options['fields']['field_staff_first_name']['label'] = '';
  $handler->display->display_options['fields']['field_staff_first_name']['element_label_colon'] = FALSE;
  /* Field: Content: Staff Last Name */
  $handler->display->display_options['fields']['field_staff_last_name']['id'] = 'field_staff_last_name';
  $handler->display->display_options['fields']['field_staff_last_name']['table'] = 'field_data_field_staff_last_name';
  $handler->display->display_options['fields']['field_staff_last_name']['field'] = 'field_staff_last_name';
  $handler->display->display_options['fields']['field_staff_last_name']['label'] = '';
  $handler->display->display_options['fields']['field_staff_last_name']['alter']['text'] = '[field_staff_first_name] [field_staff_last_name]';
  $handler->display->display_options['fields']['field_staff_last_name']['element_label_colon'] = FALSE;
  /* Field: Content: Staff Departments */
  $handler->display->display_options['fields']['field_staff_departments']['id'] = 'field_staff_departments';
  $handler->display->display_options['fields']['field_staff_departments']['table'] = 'field_data_field_staff_departments';
  $handler->display->display_options['fields']['field_staff_departments']['field'] = 'field_staff_departments';
  $handler->display->display_options['fields']['field_staff_departments']['label'] = '';
  $handler->display->display_options['fields']['field_staff_departments']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_staff_departments']['delta_offset'] = '0';
  /* Contextual filter: Content: Staff Last Name (field_staff_last_name) */
  $handler->display->display_options['arguments']['field_staff_last_name_value']['id'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['table'] = 'field_data_field_staff_last_name';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['field'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['glossary'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['limit'] = '1';

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Staff Last Name (field_staff_last_name) */
  $handler->display->display_options['arguments']['field_staff_last_name_value']['id'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['table'] = 'field_data_field_staff_last_name';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['field'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_argument_options']['argument'] = 'Browse by Last Name';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['validate']['fail'] = 'empty';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['glossary'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['limit'] = '1';
  $handler->display->display_options['path'] = 'staff-departments/az-list';
  $handler->display->display_options['menu']['title'] = 'Staff';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Staff Directory A-Z List Content Pane */
  $handler = $view->new_display('panel_pane', 'Staff Directory A-Z List Content Pane', 'panel_pane_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'BROWSE BY LAST NAME';
  $handler->display->display_options['defaults']['exposed_form'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'input_required';
  $handler->display->display_options['exposed_form']['options']['text_input_required'] = 'Select any letter above to browse by last name.';
  $handler->display->display_options['exposed_form']['options']['text_input_required_format'] = 'full_html';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'grid';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['style_options']['columns'] = '3';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_staff_first_name' => 'field_staff_first_name',
    'field_staff_last_name' => 'field_staff_last_name',
  );
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Staff Departments (field_staff_departments) */
  $handler->display->display_options['relationships']['field_staff_departments_tid']['id'] = 'field_staff_departments_tid';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['table'] = 'field_data_field_staff_departments';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['field'] = 'field_staff_departments_tid';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['required'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Staff Image Thumbnail */
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['id'] = 'field_staff_image_thumbnail';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['table'] = 'field_data_field_staff_image_thumbnail';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['field'] = 'field_staff_image_thumbnail';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['label'] = '';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_staff_image_thumbnail']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Staff First Name */
  $handler->display->display_options['fields']['field_staff_first_name']['id'] = 'field_staff_first_name';
  $handler->display->display_options['fields']['field_staff_first_name']['table'] = 'field_data_field_staff_first_name';
  $handler->display->display_options['fields']['field_staff_first_name']['field'] = 'field_staff_first_name';
  $handler->display->display_options['fields']['field_staff_first_name']['label'] = '';
  $handler->display->display_options['fields']['field_staff_first_name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_staff_first_name']['element_label_colon'] = FALSE;
  /* Field: Content: Staff Last Name */
  $handler->display->display_options['fields']['field_staff_last_name']['id'] = 'field_staff_last_name';
  $handler->display->display_options['fields']['field_staff_last_name']['table'] = 'field_data_field_staff_last_name';
  $handler->display->display_options['fields']['field_staff_last_name']['field'] = 'field_staff_last_name';
  $handler->display->display_options['fields']['field_staff_last_name']['label'] = '';
  $handler->display->display_options['fields']['field_staff_last_name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_staff_last_name']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_staff_last_name']['alter']['text'] = '[field_staff_first_name] [field_staff_last_name]';
  $handler->display->display_options['fields']['field_staff_last_name']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_staff_last_name']['element_label_colon'] = FALSE;
  /* Field: Content: Staff Job Title */
  $handler->display->display_options['fields']['field_staff_job_title']['id'] = 'field_staff_job_title';
  $handler->display->display_options['fields']['field_staff_job_title']['table'] = 'field_data_field_staff_job_title';
  $handler->display->display_options['fields']['field_staff_job_title']['field'] = 'field_staff_job_title';
  $handler->display->display_options['fields']['field_staff_job_title']['label'] = '';
  $handler->display->display_options['fields']['field_staff_job_title']['element_label_colon'] = FALSE;
  /* Field: Content: Staff Departments */
  $handler->display->display_options['fields']['field_staff_departments']['id'] = 'field_staff_departments';
  $handler->display->display_options['fields']['field_staff_departments']['table'] = 'field_data_field_staff_departments';
  $handler->display->display_options['fields']['field_staff_departments']['field'] = 'field_staff_departments';
  $handler->display->display_options['fields']['field_staff_departments']['label'] = '';
  $handler->display->display_options['fields']['field_staff_departments']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_staff_departments']['delta_offset'] = '0';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Staff Last Name (field_staff_last_name) */
  $handler->display->display_options['arguments']['field_staff_last_name_value']['id'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['table'] = 'field_data_field_staff_last_name';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['field'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_argument_options']['argument'] = 'BROWSE BY LAST NAME';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['glossary'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['limit'] = '1';
  $handler->display->display_options['argument_input'] = array(
    'field_staff_last_name_value' => array(
      'type' => 'none',
      'context' => 'entity:node.field_staff_last_name',
      'context_optional' => 0,
      'panel' => '0',
      'fixed' => 'null',
      'label' => 'Content: Staff Last Name (field_staff_last_name)',
    ),
  );

  /* Display: Attachment */
  $handler = $view->new_display('attachment', 'Attachment', 'attachment');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Staff Departments (field_staff_departments) */
  $handler->display->display_options['relationships']['field_staff_departments_tid']['id'] = 'field_staff_departments_tid';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['table'] = 'field_data_field_staff_departments';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['field'] = 'field_staff_departments_tid';
  $handler->display->display_options['relationships']['field_staff_departments_tid']['required'] = TRUE;
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Staff Last Name (field_staff_last_name) */
  $handler->display->display_options['arguments']['field_staff_last_name_value']['id'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['table'] = 'field_data_field_staff_last_name';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['field'] = 'field_staff_last_name_value';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_action'] = 'summary';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary']['format'] = 'unformatted_summary';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['count'] = FALSE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['inline'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['summary_options']['separator'] = ' | ';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['validate']['type'] = 'node';
  $handler->display->display_options['arguments']['field_staff_last_name_value']['validate_options']['types'] = array(
    'staff_profile' => 'staff_profile',
  );
  $handler->display->display_options['arguments']['field_staff_last_name_value']['glossary'] = TRUE;
  $handler->display->display_options['arguments']['field_staff_last_name_value']['limit'] = '1';
  $handler->display->display_options['displays'] = array(
    'default' => 'default',
    'page' => 'page',
    'panel_pane_1' => 'panel_pane_1',
  );
  $handler->display->display_options['inherit_arguments'] = FALSE;
  $export['staff_directory_a_z_list'] = $view;

  return $export;
}
