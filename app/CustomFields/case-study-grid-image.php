<?php

add_action('agreable_app_theme_init', function() {

  $key = 'case_study';

  register_field_group(array (
    'key' => $key . '_case_study_grid_image',
    'title' => 'Grid Image',
    'fields' => array (
      array (
      'key' => 'case_study_preview_image',
      'label' => 'Grid Image',
      'name' => 'case_study_preview_image',
      'type' => 'image',
      'instructions' => 'This image will be shown on the case study grid. If it is left blank it will get the first image in the Basic Details image section.',
      'required' => 0,
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
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
    'menu_order' => 1,
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
