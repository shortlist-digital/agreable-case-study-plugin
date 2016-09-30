<?php namespace AgreableCaseStudyPlugin\Hooks;

class BasicDetailsAcf {

  public function init() {
    \add_filter('agreable_base_theme_article_basic_acf', array($this, 'basic_details_acf'), 10);
  }

  public function basic_details_acf($acf_definition) {
    $acf_definition['location'][] = [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'case_study',
      ]
    ];

    $acf_definition['fields'][] = [
      'key' => 'case_study_preview_image',
      'label' => 'Grid Image',
      'name' => 'case_study_preview_image',
      'type' => 'image',
      'instructions' => 'This image will be shown on the case study grid. If it is left blank it will get the first image in the Basic Details image section.',
      'required' => 0,
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
    ];

    return $acf_definition;
  }
}
