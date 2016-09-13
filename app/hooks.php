<?php

/** @var  \Herbert\Framework\Application $container */

use AgreableCaseStudyPlugin\Hooks\BasicDetailsAcf;
use AgreableCaseStudyPlugin\Hooks\HtmlOverridesAcf;

(new BasicDetailsAcf)->init();
(new HtmlOverridesAcf)->init();
