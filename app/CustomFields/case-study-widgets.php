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
