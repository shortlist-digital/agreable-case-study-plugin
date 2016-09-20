<?php
use AgreableCaseStudyPlugin\CustomFields\HeaderDefinition;

$post_type = 'case_study';

$header_acf = HeaderDefinition::get($post_type);

$header_acf = apply_filters('agreable_base_theme_header_acf', $header_acf);

register_field_group($header_acf);
