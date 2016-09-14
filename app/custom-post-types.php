<?php

/** @var  \Herbert\Framework\Application $container */
\add_action( 'init', function() {

  $labels = array(
    'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Case Studies', 'text_domain' ),
    'name_admin_bar'      => __( 'Case Studies', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( 'All Case Studies', 'text_domain' ),
    'add_new_item'        => __( 'Add New Case Study', 'text_domain' ),
    'add_new'             => __( 'Add New Case Study', 'text_domain' ),
    'new_item'            => __( 'New Case Study', 'text_domain' ),
    'edit_item'           => __( 'Edit Case Study', 'text_domain' ),
    'update_item'         => __( 'Update Case Study', 'text_domain' ),
    'view_item'           => __( 'View Case Study', 'text_domain' ),
    'search_items'        => __( 'Search Case Studies', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );

  $rewrite = [
    'slug'                => 'case-study',
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => true,
  ];

  $args = array(
    'label'               => __('case_studies', 'text_domain'),
    'description'         => __('Shortlist Media Case Studies', 'text_domain'),
    'labels'              => $labels,
    'supports'            => array('title','revisions'),
    'taxonomies'          => array('category','post_tag'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 2,
    'menu_icon'           => 'dashicons-editor-ul',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'rewrite' => $rewrite,
    'query_var' => true,
  );
  \register_post_type('case_study', $args);
}
,0);
