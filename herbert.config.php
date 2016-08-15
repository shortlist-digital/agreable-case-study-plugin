<?php


return [

    /**
     * The Herbert version constraint.
     */
    'constraint' => '~0.9.9',

    /**
     * Auto-load all required files.
     */
    'requires' => [
        __DIR__ . '/app/custom-post-types.php',
        __DIR__ . '/app/CustomFields/casestudy-widgets.php',
        __DIR__ . '/app/CustomFields/header.php',
        __DIR__ . '/app/CustomRoles/roles.php',
        __DIR__ . '/app/hooks.php',
    ],

    /**
     * Activate
     */
    'activators' => [
        __DIR__ . '/app/activate.php'
    ],

    /**
     * Activate
     */
    'deactivators' => [
        __DIR__ . '/app/deactivate.php'
    ],

    /**
     * The shortcodes to auto-load.
     */
    'shortcodes' => [
        // __DIR__ . '/app/shortcodes.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'widgets' => [
        // __DIR__ . '/app/widgets.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'enqueue' => [
        // __DIR__ . '/app/enqueue.php'
    ],

    /**
     * The routes to auto-load.
     */
    'routes' => [
        // 'AgreableCaseStudyPlugin' => __DIR__ . '/app/routes.php'
    ],

    /**
     * The panels to auto-load.
     */
    'panels' => [
        // 'AgreableCaseStudyPlugin' => __DIR__ . '/app/panels.php'
    ],

    /**
     * The APIs to auto-load.
     */
    'apis' => [
        // 'AgreableCaseStudyPlugin' => __DIR__ . '/app/api.php'
    ],

    /**
     * The view paths to register.
     *
     * E.G: 'MyPlugin' => __DIR__ . '/views'
     * can be referenced via @MyPlugin/
     * when rendering a view in twig.
     */
    'views' => [
        // 'AgreableCaseStudyPlugin' => __DIR__ . '/resources/views'
    ],

    /**
     * The view globals.
     */
    'viewGlobals' => [

    ],

    /**
     * The asset path.
     */
    'assets' => '/resources/assets/',

    /**
     * Namespace used in ACF Panel definitions.
     */
    'agreable_namespace' => 'agreable_casestudy',

    /**
     *
     */
    'agreable_pluginTitle'      => 'Casestudy'
];
