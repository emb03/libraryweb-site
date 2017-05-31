<?php
/**
 * @file
 */

$plugin = array(
  'category' => t('Locations'),
  'title' => t('Open Now'),
  'description' => t('Displays Open Now/Closed text for the current location page.'),
  'single' => TRUE,
  'render callback' => 'open_now_content_type_render',
  'required context' => new ctools_context_required(t('Node'), 'node'),
  'defaults' => array(),
  'edit form' => 'open_now_content_type_edit_form',
);

/**
 * Run-time rendering of the body of the block.
 *
 * @param $subtype
 * @param $conf
 *   Configuration as done at admin time.
 * @param $args
 * @param $context
 *   Context - in this case we don't have any.
 *
 * @return
 *   An object with at least title and content members.
 */
function open_now_content_type_render($subtype, $conf, $args, $context) {
  $node = isset($context->data) ? clone($context->data) : NULL;
  $block = new stdClass();
  $block->content = '';

  if (isset($node->nid)) {

    // Add the js ***disabled***
    // drupal_add_js(drupal_get_path('module', 'uclalib_location') . '/uclalib_location.js');
    // drupal_add_js(array('locationNid' => array('nid' => $node->nid)), 'setting');

    $block->content = '<div class="open-now-pane"></div>';
  }

  if ($block->content) {
    $service_hours = wsclient_service_load('service_library_hours');
    try {
      // call UCLA Library service to get hours by week
      $library_hours = $service_hours->getToday(
        'hours',
        'today',
        // $element['hours']['lid']
        $context->data->field_hours[LANGUAGE_NONE][0]['value']
      );
      // $element['hours']['today'] = $library_hours['locations'][0]['rendered'];
      // return $element;
      if ($library_hours['locations'][0]['times']['currently_open']) {
        $block->content .= '<div class="open-now-pane"><span class="location-open-now">Open Now</span></div>';
      } else {
        $block->content .= '<div class="open-now-pane"><span class="location-closed">Closed</span></div>';
      }
    }
    catch (WSClientException $exception) {
      // TODO: log exception to watchdog and maybe to screen (or even #slack)
      return false;
    }
     
    return $block;
  }

}

/**
 * 'Edit form' callback for the content type.
 */
function open_now_content_type_edit_form($form, &$form_state) {
  // Provide a blank form so we have a place to have context setting.
  return $form;
}
