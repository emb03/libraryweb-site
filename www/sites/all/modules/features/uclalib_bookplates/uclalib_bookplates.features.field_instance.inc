<?php
/**
 * @file
 * uclalib_bookplates.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function uclalib_bookplates_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-bookplates-body'
  $field_instances['node-bookplates-body'] = array(
    'bundle' => 'bookplates',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'event_listed_from_bean' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
      'hours_page' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
      'landing_page' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 3,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'trim_length' => 250,
        ),
        'type' => 'text_trimmed',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'body',
    'label' => 'Body',
    'required' => FALSE,
    'settings' => array(
      'display_summary' => TRUE,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'module' => 'text',
      'settings' => array(
        'rows' => 20,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => 4,
    ),
  );

  // Exported field_instance: 'node-bookplates-field_bookplate_author_title'
  $field_instances['node-bookplates-field_bookplate_author_title'] = array(
    'bundle' => 'bookplates',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Enter Author and Bookplate Title',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 4,
      ),
      'event_listed_from_bean' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
      'hours_page' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
      'landing_page' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 2,
      ),
      'teaser' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(
          'trim_length' => 600,
        ),
        'type' => 'text_trimmed',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_bookplate_author_title',
    'label' => 'Bookplate Author Title',
    'required' => 1,
    'settings' => array(
      'better_formats' => array(
        'allowed_formats' => array(
          'full_html' => 'full_html',
          'plain_text' => 'plain_text',
        ),
        'allowed_formats_toggle' => 0,
        'default_order_toggle' => 0,
        'default_order_wrapper' => array(
          'formats' => array(
            'full_html' => array(
              'weight' => 0,
            ),
            'plain_text' => array(
              'weight' => 10,
            ),
          ),
        ),
      ),
      'linkit' => array(
        'button_text' => 'Search',
        'enable' => 0,
        'profile' => '',
      ),
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'size' => 120,
      ),
      'type' => 'text_textfield',
      'weight' => 1,
    ),
  );

  // Exported field_instance: 'node-bookplates-field_bookplate_image'
  $field_instances['node-bookplates-field_bookplate_image'] = array(
    'bundle' => 'bookplates',
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => '',
        ),
        'type' => 'image',
        'weight' => 2,
      ),
      'event_listed_from_bean' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
      'hours_page' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
      'landing_page' => array(
        'label' => 'hidden',
        'module' => 'fancybox',
        'settings' => array(
          'fancybox_caption' => 'auto',
          'fancybox_caption_custom' => '',
          'fancybox_gallery' => 'post',
          'fancybox_gallery_custom' => '',
          'fancybox_image_style_content' => 'thumbnail',
          'fancybox_image_style_fancybox' => 'large',
        ),
        'type' => 'fancybox',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 3,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_bookplate_image',
    'label' => 'Bookplate Image',
    'required' => 1,
    'settings' => array(
      'alt_field' => 1,
      'default_image' => 0,
      'file_directory' => '',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'title_field' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'insert' => 0,
        'insert_absolute' => 0,
        'insert_class' => '',
        'insert_default' => 'auto',
        'insert_styles' => array(
          'auto' => 'auto',
          'fancybox__category_icon' => 0,
          'fancybox__custom_crop' => 0,
          'fancybox__large' => 0,
          'fancybox__linkit_thumb' => 0,
          'fancybox__media_thumbnail' => 0,
          'fancybox__medium' => 0,
          'fancybox__thumbnail' => 0,
          'fancybox__thumbnail_crop' => 0,
          'fancybox__thumbnail_large' => 0,
          'fancybox__thumbnail_small' => 0,
          'fancybox__widescreen_crop' => 0,
          'fancybox__widescreen_large' => 0,
          'fancybox__widescreen_medium' => 0,
          'fancybox__widescreen_small' => 0,
          'icon_link' => 0,
          'image' => 0,
          'image_category_icon' => 0,
          'image_custom_crop' => 0,
          'image_large' => 0,
          'image_linkit_thumb' => 0,
          'image_media_thumbnail' => 0,
          'image_medium' => 0,
          'image_thumbnail' => 0,
          'image_thumbnail_crop' => 0,
          'image_thumbnail_large' => 0,
          'image_thumbnail_small' => 0,
          'image_widescreen_crop' => 0,
          'image_widescreen_large' => 0,
          'image_widescreen_medium' => 0,
          'image_widescreen_small' => 0,
          'link' => 0,
        ),
        'insert_width' => '',
        'manualcrop_crop_info' => 1,
        'manualcrop_default_crop_area' => 1,
        'manualcrop_enable' => 0,
        'manualcrop_filter_insert' => 0,
        'manualcrop_inline_crop' => 0,
        'manualcrop_instant_crop' => 0,
        'manualcrop_instant_preview' => 1,
        'manualcrop_keyboard' => 1,
        'manualcrop_maximize_default_crop_area' => 0,
        'manualcrop_require_cropping' => array(),
        'manualcrop_styles_list' => array(),
        'manualcrop_styles_mode' => 'include',
        'manualcrop_thumblist' => 0,
        'preview_image_style' => 'thumbnail',
        'progress_indicator' => 'throbber',
      ),
      'type' => 'image_image',
      'weight' => 2,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Body');
  t('Bookplate Author Title');
  t('Bookplate Image');
  t('Enter Author and Bookplate Title');

  return $field_instances;
}
