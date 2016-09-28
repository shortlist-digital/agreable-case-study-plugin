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

   $acf_definition['fields'][3]['post_type'][] = 'case_study';

   return $acf_definition;
  }
}
