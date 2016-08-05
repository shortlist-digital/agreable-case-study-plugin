<?php

/** @var  \Herbert\Framework\Application $container */

use AgreableCasestudyPlugin\Hooks\BasicDetailsAcf;
use AgreableCasestudyPlugin\Hooks\HtmlOverridesAcf;

(new BasicDetailsAcf)->init();
(new HtmlOverridesAcf)->init();
