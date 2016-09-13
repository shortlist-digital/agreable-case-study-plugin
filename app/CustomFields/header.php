<?php

add_action('agreable_app_theme_init', function() {
  $key = 'case_study_header';
  register_field_group(array(
    'key' => $key,
    'title' => 'Opening Header',
    'fields' => array(
      array (
        'key' => 'case_study_header_basic_details_tab',
        'label' => 'Basic Details',
        'type' => 'tab',
        'required' => 0,
        'conditional_logic' => 0,
        'placement' => 'left',
      ),
      array (
        'key' => $key . '_type',
        'label' => 'Type',
        'name' => 'header_type',
        'type' => 'select',
        'instructions' => 'Select the type of header for this content',
        'choices' => array (
          'super-hero' => 'Super Hero',
          'super-hero-video' => 'Super Hero Video',
        ),
        'default_value' => array (
          'super-hero' => 'super-hero',
        ),
        'wrapper' => array (
          'width' => '100%'
        ),
      ),
      array (
        'key' => $key . '_background_video',
        'label' => 'Background video',
        'name' => 'background_video',
        'type' => 'url',
        'instructions' => 'The absolute URL to the MP4 video file (http://site.com/video.mp4)',
        'required' => 1,
        'default_value' => '',
        'conditional_logic' => array (
          array (
            array (
              'field' => $key . '_type',
              'operator' => '==',
              'value' => 'super-hero-video',
            ),
          ),
        ),
      ),
      array (
        'key' => $key .'_video_poster',
        'label' => 'Poster',
        'name' => 'video_poster',
        'type' => 'image',
        'instructions' => 'This image will be shown on mobile users and before the video plays to everyone else',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'conditional_logic' => array (
          array (
            array (
              'field' => $key . '_type',
              'operator' => '==',
              'value' => 'super-hero-video',
            ),
          ),
        ),
      ),
      array (
        'key' => 'lonform_header_advanced_details_tab',
        'label' => 'Advanced Details',
        'type' => 'tab',
        'required' => 0,
        'conditional_logic' => 0,
        'placement' => 'left',
      ),
      array (
        'key' => $key . '_text_colour',
        'label' => 'Text Colour',
        'name' => 'header_text_colour',
        'type' => 'color_picker',
        'wrapper' => array (
          'width' =>'50%',
        ),
      ),
      array (
        'key' => $key . '_background_colour',
        'label' => 'Background Colour',
        'name' => 'header_background_colour',
        'instructions' => 'Choose a colour if you want to use a colour instead of an image',
        'type' => 'color_picker',
        'wrapper' => array (
          'width' => '50%',
        ),
      ),
      array (
        'key' => $key . '_line_colour',
        'label' => 'Underline Colour',
        'name' => 'header_line_colour',
        'instructions' => 'Choose a colour if you want to underline your heading',
        'type' => 'color_picker',
        'wrapper' => array (
          'width' => '100%',
        ),
      ),
      array (
        'key' => $key . '_other_options',
        'label' => 'Other options',
        'name' => 'header_other_options',
        'type' => 'checkbox',
        'choices' => array (
          'full-height' => 'Enable full height (fill the screen)',
          'parallax' => 'Enable parallax effect',
          'carousel-buttons' => 'Enable previous/next carousel buttons (if used)',
          'scroll-down-button' => 'Enable scroll down button (if full-height is used)',
          'display-post-category' => 'Display post category',
          'display-heading' => 'Display heading',
          'display-sell' => 'Display sell'
        ),
        'default_value' => array (
          'full-height' => '',
          'parallax' => '',
          'carousel-buttons' => 'carousel-buttons',
          'scroll-down-button' => 'scroll-down-button',
          'display-post-category' => 'display-post-category',
          'display-heading' => 'display-heading',
          'display-sell' => 'display-sell'
        ),
      ),
      array(
        'key' => $key . '_brand',
        'label' => 'Brand',
        'name' => 'header_brand',
        'type' => 'text',
        'instructions' => 'Add a brand specific sell (optional)',
        'default_value' => '',
        'wrapper' => array (
        'width' => '50%',
        ),
      ),
      array(
        'key' => $key . '_brand_image',
        'label' => 'Brand Image',
        'name' => 'header_brand_image',
        'type' => 'image',
        'instructions' => 'Add a brand logo (optional)',
        'return_format' => 'array',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'wrapper' => array (
        'width' => '50%'
        ),
      ),
      array (
        'key' => $key . '_superherovideo_options',
        'label' => 'Superhero Video options',
        'name' => 'header_superherovideo_options',
        'type' => 'checkbox',
        'choices' => array (
          'autoplay' => 'Enable autoplay when the video is in view',
          'loop' => 'Set the video to loop',
          'mute' => 'Mute the video',
        ),
        'default_value' => array (
          'autoplay' => 'autoplay',
          'loop' => 'loop',
          'mute' => 'mute'
        ),
        'conditional_logic' => array (
          array (
            array (
              'field' => $key . '_type',
              'operator' => '==',
              'value' => 'super-hero-video',
            ),
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'case_study'
        )
      )
    ),
    'menu_order' => 1,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
  ));
});
