<?php namespace AgreableCaseStudyPlugin\Hooks;

class RelatedContentAcf {
  public function init() {
    \add_filter('agreable_base_theme_related_acf', array($this, 'related_acf'), 10);
  }

  public function related_acf($acf_definition) {
    $acf_definition['location'][] = [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'case_study',
      ]
    ];

    $key = 'related';
    $acf_definition['fields'] = [
      [
      'key' => $key . '_posts_manual',
      'label' => 'Insert content (Posts, Tiles, Case Studies)',
      'name' => $key . '_manual_posts',
      'type' => 'post_object',
      'required' => 0,
      'post_type' => array (
        0 => 'post',
        1 => 'tile',
        2 => 'case_study',
      ),
      'multiple' => 1,
      'return_format' => 'object',
      ]
    ];

   return $acf_definition;
  }
}
