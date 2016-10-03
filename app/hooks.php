<?php

/** @var  \Herbert\Framework\Application $container */

use AgreableCaseStudyPlugin\Hooks\BasicDetailsAcf;
use AgreableCaseStudyPlugin\Hooks\RelatedContentAcf;
use AgreableCaseStudyPlugin\Hooks\HtmlOverridesAcf;

(new BasicDetailsAcf)->init();
(new RelatedContentAcf)->init();
(new HtmlOverridesAcf)->init();
