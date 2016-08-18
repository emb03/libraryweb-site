<?php


/**
 * @file
 * Definition of the mobile collapsible panel style.
 */

// Plugin definition
$plugin = array(
  'title' => t('Collapsible only on mobile devices'),
  'description' => t('Allows the panel pane to be collapsed.'),
  'render region' => 'panels_style_mobile_collapsible_render_region',
  'render pane' => 'panels_style_mobile_collapsible_render_pane',
  'settings form' => 'panels_style_mobile_collapsible_region_settings_form',
  'pane settings form' => 'panels_style_mobile_collapsible_pane_settings_form',
);

/**
 * Settings form callback for region settings.
 */
function panels_style_mobile_collapsible_region_settings_form($style_settings) {
  $form = array();
  $form['region_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#description' => t('Title used as clickable text to open / close collapsed region.'),
    '#required' => TRUE,
    '#default_value' => (isset($style_settings['region_title'])) ? $style_settings['region_title'] : ''
  );
  $form['region_collapsed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Collapsed by default'),
    '#default_value' => (isset($style_settings['region_collapsed'])) ? $style_settings['region_collapsed'] : FALSE
  );
  return $form;
}

/**
 * Settings form callback for pane settings.
 */
function panels_style_mobile_collapsible_pane_settings_form($style_settings) {
  $form = array();
  $form['pane_collapsed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Collapsed by default'),
    '#default_value' => (isset($style_settings['pane_collapsed'])) ? $style_settings['pane_collapsed'] : FALSE
  );
  return $form;
}

/**
 * Render callback for regions.
 *
 * @ingroup themeable
 */
function theme_panels_style_mobile_collapsible_render_region($vars) {
  $settings = $vars['settings'];

  $content = implode('<div class="panel-separator"></div>', $vars['panes']);

  ctools_include('collapsible.theme');

  if (empty($settings['region_title'])) {
    $settings['region_title'] = '<empty>';
  }
  if (empty($settings['region_collapsed'])) {
    $settings['region_collapsed'] = FALSE;
  }
  $title = ctools_context_keyword_substitute($settings['region_title'], array(), $vars['display']->context);
  $output = theme('panels_style_mobile_collapsible', array('handle' => $title, 'content' => $content, 'collapsed' => $settings['region_collapsed']));
  return $output;
}

/**
 * Render callback for panes.
 *
 * @ingroup themeable
 */
function theme_panels_style_mobile_collapsible_render_pane($vars) {
  $content = $vars['content'];
  $pane = $vars['pane'];
  $display = $vars['display'];
  $settings = $vars['settings'];

  if (empty($content->content)) {
    return;
  }
  if (empty($settings['pane_collapsed'])) {
    $settings['pane_collapsed'] = TRUE;
  }

  $output = theme('mobile_collapsible', array('title' => $content->title, 'content' => $content->content, 'collapsed' => $settings['pane_collapsed']));

  return $output;
}

/**
 * Render a collapsible div.
 *
 * @param $handle
 *   Text to put in the handle/title area of the div.
 * @param $content
 *   Text to put in the content area of the div, this is what will get
 *   collapsed
 * @param $collapsed = FALSE
 *   If true, this div will start out collapsed.
 */
function theme_panels_style_mobile_collapsible($vars) {
  ctools_add_js('collapsible-div');
  ctools_add_css('collapsible-div');

  $pane_css = $pane_id = '';
  if (isset($vars['pane']) && is_object($vars['pane'])) {
    $pane_css = $vars['pane']->css;
    $pane_id = !empty($pane_css['css_id']) ? ' id="' . $pane_css['css_id'] . '"' : '';
    $pane_css = !empty($pane_css['css_class']) ? ' ' . $pane_css['css_class'] : '';
  }

  $class = $vars['collapsed'] ? ' ctools-collapsed' : '';
  $output = '<div' . $pane_id . ' class="ctools-collapsible-container' . $class . $pane_css . '">';
  $output .= '<h2 class="pane-title ctools-collapsible-handle">' . check_plain($vars['handle']) . '</h2>';
  $output .= '<div class="ctools-collapsible-content">' . $vars['content'] . '</div>';
  $output .= '</div>';

  return $output;
}
