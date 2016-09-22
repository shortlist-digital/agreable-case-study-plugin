<?php

add_action('agreable_app_theme_init', function() {

  $key = 'case_study';

  include_once get_template_directory() . "/custom-fields/WidgetLoader.php";

  $widgets = WidgetLoader::findByUsage('longform');

  register_field_group(array (
    'key' => $key . '_widgets_group',
    'title' => 'Body',
    'fields' => array (
      array (
        'key' => $key .'_preview_image',
        'label' => 'Case Study Preview Image',
        'name' => 'case_study_preview_image',
        'type' => 'image',
        'instructions' => 'This image will be shown on the main case study page as a preview to the case study. If it is left blank it will get the first image in the Basic Details image section.',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'thumbnail',
      ),
      array (
        'key' => $key . '_widgets',
        'label' => 'Content Widgets',
        'name' => 'widgets',
        'prefix' => '',
        'type' => 'flexible_content',
        'instructions' => 'The body of the content is built up with widgets',
        'required' => 1,
        'conditional_logic' => 0,
        'button_label' => 'Add Widget',
        'min' => 1,
        'max' => '',
        'layouts' => $widgets,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'case_study',
        ),
      ),
    ),
    'menu_order' => 2,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
      0 => 'the_content',
      1 => 'discussion',
      2 => 'comments',
    )
  ));

});
