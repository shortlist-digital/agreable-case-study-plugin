<?php

/** @var  \Herbert\Framework\Application $container */

use AgreableCaseStudyPlugin\Hooks\BasicDetailsAcf;
use AgreableCaseStudyPlugin\Hooks\HtmlOverridesAcf;

if(class_exists('AgreableCaseStudyPlugin\Hooks\BasicDetailsAcf')){
  (new BasicDetailsAcf)->init();
}

if(class_exists('AgreableCaseStudyPlugin\Hooks\HtmlOverridesAcf')){
  (new HtmlOverridesAcf)->init();
}
