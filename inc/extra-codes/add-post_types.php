<?php
// Pricing Tables
add_action( 'init', 'megahost_create_plan' );
function megahost_create_plan() {
      $labels = array(
        'name' => _x('Pricing Tables', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Plan', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Plan', 'Add Plan', 'megahost_language'),
        'add_new_item' => __('Add new Plan', 'megahost_language'),
        'edit_item' => __('Edit Plan', 'megahost_language'),
        'new_item' => __('New Plan', 'megahost_language'),
        'view_item' => __('See Plan', 'megahost_language'),
        'search_items' => __('Search Plan', 'megahost_language'),
        'not_found' =>  __('Not found Plans', 'megahost_language'),
        'not_found_in_trash' => __('Not found Plans on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );

      $supports = array(
        'title',
        'editor',
        'custom-fields'
      );

      register_post_type( 'plans',
        array(
          'labels' => $labels,
          'public' => true,
          'menu_icon' => 'dashicons-list-view',
          'supports' => $supports,
          'show_in_menu' => true,
          'menu_position' => 30
        )
      );
}
// Team
add_action( 'init', 'megahost_create_Team' );
function megahost_create_team() {
      $labels = array(
        'name' => _x('Team', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Team', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Team', 'Team Member', 'megahost_language'),
        'add_new_item' => __('Add new Team', 'megahost_language'),
        'edit_item' => __('Edit Team', 'megahost_language'),
        'new_item' => __('New Team', 'megahost_language'),
        'view_item' => __('See Team', 'megahost_language'),
        'search_items' => __('Search Team', 'megahost_language'),
        'not_found' =>  __('Not found Teams', 'megahost_language'),
        'not_found_in_trash' => __('Not found Teams on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );

      $supports = array(
        'title',
        'editor',
        'custom-fields'
      );

      register_post_type( 'team',
        array(
          'labels' => $labels,
          'public' => true,
          'menu_icon' => 'dashicons-id',
          'supports' => $supports,
          'show_in_menu' => true,
          'menu_position' => 31
        )
      );
}
// Features
add_action( 'init', 'megahost_create_features' );
function megahost_create_features() {
      $labels = array(
        'name' => _x('Features', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Feature', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Feature', 'Add Feature', 'megahost_language'),
        'add_new_item' => __('Add new Feature', 'megahost_language'),
        'edit_item' => __('Edit Feature', 'megahost_language'),
        'new_item' => __('New Feature', 'megahost_language'),
        'view_item' => __('See Feature', 'megahost_language'),
        'search_items' => __('Search Feature', 'megahost_language'),
        'not_found' =>  __('Not found Features', 'megahost_language'),
        'not_found_in_trash' => __('Not found Features on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );

      $supports = array(
        'title',
        'editor'
      );

      register_post_type( 'feature',
        array(
          'labels' => $labels,
          'public' => true,
          'menu_icon' => 'dashicons-admin-tools',
          'supports' => $supports,
          'show_in_menu' => true,
          'menu_position' => 32
        )
      );
}
// Facilities
add_action( 'init', 'megahost_create_Facility' );
function megahost_create_Facility() {
      $labels = array(
        'name' => _x('Facilities', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Facility', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Facility', 'Add Facility', 'megahost_language'),
        'add_new_item' => __('Add new Facility', 'megahost_language'),
        'edit_item' => __('Edit Facility', 'megahost_language'),
        'new_item' => __('New Facility', 'megahost_language'),
        'view_item' => __('See Facility', 'megahost_language'),
        'search_items' => __('Search Facility', 'megahost_language'),
        'not_found' =>  __('Not found Facilities', 'megahost_language'),
        'not_found_in_trash' => __('Not found Facilities on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );

      $supports = array(
        'title',
        'editor'
      );

      register_post_type( 'facility',
        array(
          'labels' => $labels,
          'public' => true,
          'supports' => $supports,
          'show_in_menu' => true,
          'menu_position' => 33
        )
      );
}
// Testimonials
add_action( 'init', 'megahost_create_stories' );
function megahost_create_stories() {
      $labels = array(
        'name' => _x('Testimonials', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Testimonials', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Testimonial', 'Add Testimonial', 'megahost_language'),
        'add_new_item' => __('Add new Testimonial', 'megahost_language'),
        'edit_item' => __('Edit Testimonial', 'megahost_language'),
        'new_item' => __('New Testimonial', 'megahost_language'),
        'view_item' => __('See Testimonial', 'megahost_language'),
        'search_items' => __('Search Testimonial', 'megahost_language'),
        'not_found' =>  __('Not found Testimonial', 'megahost_language'),
        'not_found_in_trash' => __('Not found Testimonials on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );

      $supports = array(
        'title',
        'editor'
      );

      register_post_type( 'storie',
        array(
          'labels' => $labels,
          'public' => true,
          'menu_icon' => 'dashicons-format-quote',
          'supports' => $supports,
          'show_in_menu' => true,
          'menu_position' => 34
        )
      );
}
// Sponsors
add_action( 'init', 'megahost_create_sponsor' );
function megahost_create_sponsor() {
      $labels = array(
        'name' => _x('Sponsors', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Sponsor', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Sponsor', 'Add Sponsor', 'megahost_language'),
        'add_new_item' => __('Add new Sponsor', 'megahost_language'),
        'edit_item' => __('Edit Sponsor', 'megahost_language'),
        'new_item' => __('New Sponsor', 'megahost_language'),
        'view_item' => __('See Sponsor', 'megahost_language'),
        'search_items' => __('Search Sponsor', 'megahost_language'),
        'not_found' =>  __('Not found Sponsors', 'megahost_language'),
        'not_found_in_trash' => __('Not found Sponsors on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );

      $supports = array(
        'title',
        'editor'
      );

      register_post_type( 'sponsor',
        array(
          'labels' => $labels,
          'public' => true,
          'menu_icon' => 'dashicons-awards',
          'supports' => $supports,
          'show_in_menu' => true,
          'menu_position' => 35
        )
      );
}

//ADD PORTFOLIO
add_action( 'init', 'megahost_create_portfolio' );
    function megahost_create_portfolio() {
      $labels = array(
        'name' => _x('Portfolio', 'post type general name', 'megahost_language'),
        'singular_name' => _x('Portfolio', 'post type singular name', 'megahost_language'),
        'add_new' => _x('Add Portfolio', 'Add Portfolio', 'megahost_language'),
        'add_new_item' => __('Add new Portfolio', 'megahost_language'),
        'edit_item' => __('Edit Portfolio', 'megahost_language'),
        'new_item' => __('New Portfolio', 'megahost_language'),
        'view_item' => __('See Portfolio', 'megahost_language'),
        'search_items' => __('Search Portfolio', 'megahost_language'),
        'not_found' =>  __('Not found Portfolio', 'megahost_language'),
        'not_found_in_trash' => __('Not found Portfolios on clipboard', 'megahost_language'),
        'parent_item_colon' => ''
      );      
      
      $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'portfolio','type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'portfolio', $args );  
}

add_action( 'init', 'create_Type_hierarchical_taxonomy', 0 );
//create a custom taxonomy name it Skillss for your posts
function create_Type_hierarchical_taxonomy() {
	// Add new taxonomy, make it hierarchical like Skills
	//first do the translations part for GUI
  $labels = array(
    'name' => __( 'Categories portfolio', 'megahost' ),
    'singular_name' => __( 'Categories portfolio', 'megahost' ),
    'search_items' =>  __( 'Search Category','megahost' ),
    'all_items' => __( 'All Categories','megahost' ),
    'parent_item' => __( 'Parent Category','megahost' ),
    'parent_item_colon' => __( 'Parent Category:','megahost' ),
    'edit_item' => __( 'Edit Category','megahost' ), 
    'update_item' => __( 'Update Category','megahost' ),
    'add_new_item' => __( 'Add New Category','megahost' ),
    'new_item_name' => __( 'New Category Name','megahost' ),
    'menu_name' => __( 'Categories portfolio','megahost' ),
  );     

	// Now register the taxonomy
  register_taxonomy('categories_portfolio',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories_portfolio' ),
  ));
}