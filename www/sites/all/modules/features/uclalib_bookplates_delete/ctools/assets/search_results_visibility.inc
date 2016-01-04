<?php

/**
 * @file
 * This plugin provides a custom visibility rule for showing search results on URL parameters
 *
 * @ingroup CToolsPlugin CToolsPluginContentTypes
 */
/**
 * Plugins are described by creating a $plugin array which will
 * be used by the system that includes the file.
 */
$plugin = array(
  'title' => t('Panel: Visible Search'),
  'description' => t('Only displays this pane if URL pararmeter includes
  /bookplates?search_api_views'),
  'callback' => 'uclablib_bookplate_feature_panels_ctools_access_check',
  'default' => array('visibility_search' => 1),
  'summary' => 'uclablib_bookplate_feature_panels_ctools_access_summary',
  'required context' => new ctools_context_required(t('Search query'),
    'search_query'),
);
/**
 * Custom callback defined by 'callback' in the $plugin array.
 *
 * Check for access.
 */
function uclablib_bookplate_feature_panels_ctools_access_check($conf, $context) {

  // If for some unknown reason that $context isn't set, return false.
  if (empty($options['query']) || empty($options['query'])) {
    return FALSE;
  }
  // If the URL does not have the search query parameter, hide the pane.
  return $_GET['q'] == 'bookplates' && !isset($_GET['search_api_views']);
'Hello World'
  //Otherwise, show the pane.
  return TRUE;
}
?>