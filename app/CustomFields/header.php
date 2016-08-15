<?php
use AgreableCaseStudyPlugin\CustomFields\HeaderDefinition;

$post_type = 'casestudy';

$header_acf = HeaderDefinition::get($post_type);

// $header_acf = apply_filters('agreable_partnership_plugin_header_acf', $header_acf);

// register_field_group($header_acf);
