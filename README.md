Shortlist Media Wordpress Case Study Plugin
===============

Wordpress Plugin built for Croissant stack using [Herbert](http://getherbert.com/) plugin framework.

---

### Dependencies

* Timber
* Advanced Custom Fields

---

#### Create custom post type
* `/app/customPostType.php`  

#### Plugin degines an widget using ACF available to articles   
* `/widget-loader-acf.php`   
A Croissant theme (e.g. Troisieme) will traverse plugins directory for 'slm' prefixed sub directories which contain `widget-loader-acf.php` at their root. This ACF definition is added to list of widgets available in theme. 

#### Add plugin view path to Timber's paths for rendering
* `/app/hooks/timber_loader_paths.php`  
Parent theme will include the plugin Twig templates and render using Timber (see [lab-troisieme-2015/src/views/partials/widget-container.twig](https://bitbucket.org/ShortlistMedia/lab-troisieme-2015/src/a09dddfd3df596f3c8b81db759160ded95a577e4/views/partials/widget-container.twig?at=master#cl-5)). Therefore we add our plugin paths to Timber's internal array of paths using this filter called by Timber: `'timber/loader/paths`. 

#### Fire plugin specific action whilst rendering (to enqueue styles/scripts within plugin)   
* `/app/hooks/slm_plugin_enqueue.php`  
Just before rendering the plugin template, the parent theme calls Wordpress `do_action('acf_{{name}}_enqueue')`. e.g. (using Timber):  
`{% do action('slm_'~widget.acf_fc_layout~'_enqueue', widget) %}`  
The hook name is constructed from the ACF Field Group 'name' in `widget-loader-acf.php`. e.g. 'acf_longform_plugin_enqueue'

#### Configurable plugin options for Wordpress installation 
* `app/panels.php`  
Adds Settings panel for installation specific configuration. Uses ACF definitions.

##### Using ACF to create panels in Post Type menu
```
acf_add_options_sub_page(array(
  'page_title'  => 'Longform Style Settings',
  'menu_title'  => 'Longform Settings',
  'parent_slug' => 'edit.php?post_type=longform',
));
```

##### Add Custom Fields to menu
Specify custom fields using `register_field_group($options)`. Best to create in Worpdress Admin and use export function.
`$options['location']` will be an array specifying where to display the Custom Fields:
```
array (
  array (
    array (
      'param' => 'options_page',
      'operator' => '==',
      'value' => 'acf-options-longform-settings',
    ),
  ),
),
```
Note: If `acf_add_options_sub_page` is given 'menu_title' of 'Longform Settings', the location 'value' is 'acf-options-longform-settings' (as above).

#### Deploy to packagist

Check the current latest tag
`git fetch && git tag`

Bump the version appropriately and tag
`git tag x.x.x`

Push to Github. Packagist will receive a hook and update the file
`git push origin master --tags`
