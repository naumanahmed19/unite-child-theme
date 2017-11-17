<?php

if ( ! function_exists('films_post_type') ) {
    
    // Register Custom Post Type
    function film_post_type() {
    
        $labels = array(
            'name'                  => _x( 'Post Types', 'Post Type General Name', 'unite-child' ),
            'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'unite-child' ),
            'menu_name'             => __( 'Films', 'unite-child' ),
            'name_admin_bar'        => __( 'Films', 'unite-child' ),
            'archives'              => __( 'Item Archives', 'unite-child' ),
            'attributes'            => __( 'Item Attributes', 'unite-child' ),
            'parent_item_colon'     => __( 'Parent Item:', 'unite-child' ),
            'all_items'             => __( 'All Items', 'unite-child' ),
            'add_new_item'          => __( 'Add New Item', 'unite-child' ),
            'add_new'               => __( 'Add New', 'unite-child' ),
            'new_item'              => __( 'New Item', 'unite-child' ),
            'edit_item'             => __( 'Edit Item', 'unite-child' ),
            'update_item'           => __( 'Update Item', 'unite-child' ),
            'view_item'             => __( 'View Item', 'unite-child' ),
            'view_items'            => __( 'View Items', 'unite-child' ),
            'search_items'          => __( 'Search Item', 'unite-child' ),
            'not_found'             => __( 'Not found', 'unite-child' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'unite-child' ),
            'featured_image'        => __( 'Featured Image', 'unite-child' ),
            'set_featured_image'    => __( 'Set featured image', 'unite-child' ),
            'remove_featured_image' => __( 'Remove featured image', 'unite-child' ),
            'use_featured_image'    => __( 'Use as featured image', 'unite-child' ),
            'insert_into_item'      => __( 'Insert into item', 'unite-child' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'unite-child' ),
            'items_list'            => __( 'Items list', 'unite-child' ),
            'items_list_navigation' => __( 'Items list navigation', 'unite-child' ),
            'filter_items_list'     => __( 'Filter items list', 'unite-child' ),
        );
        $args = array(
            'label'                 => __( 'Post Type', 'unite-child' ),
            'description'           => __( 'Post Type Description', 'unite-child' ),
            'labels'                => $labels,
            'supports'              => array('title','editor','thumbnail' ),
            'taxonomies'            => array( 'genre', ' country', ' year', 'actors' ),
            'hierarchical'               => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'rewrite' => array('slug'=> 'films'),
        );
        register_post_type( 'film', $args );
    
    }
    add_action( 'init', 'film_post_type', 0 );
    
    }

    if ( ! function_exists( 'genre_taxonomy' ) ) {
        
        // Register Custom Taxonomy
        function genre_taxonomy() {
        
            $labels = array(
                'name'                       => _x( 'Genre', 'Taxonomy General Name', 'unite' ),
                'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'unite' ),
                'menu_name'                  => __( 'Genre', 'unite' ),
                'all_items'                  => __( 'All Items', 'unite' ),
                'parent_item'                => __( 'Parent Item', 'unite' ),
                'parent_item_colon'          => __( 'Parent Item:', 'unite' ),
                'new_item_name'              => __( 'New Item Name', 'unite' ),
                'add_new_item'               => __( 'Add New Item', 'unite' ),
                'edit_item'                  => __( 'Edit Item', 'unite' ),
                'update_item'                => __( 'Update Item', 'unite' ),
                'view_item'                  => __( 'View Item', 'unite' ),
                'separate_items_with_commas' => __( 'Separate items with commas', 'unite' ),
                'add_or_remove_items'        => __( 'Add or remove items', 'unite' ),
                'choose_from_most_used'      => __( 'Choose from the most used', 'unite' ),
                'popular_items'              => __( 'Popular Items', 'unite' ),
                'search_items'               => __( 'Search Items', 'unite' ),
                'not_found'                  => __( 'Not Found', 'unite' ),
                'no_terms'                   => __( 'No items', 'unite' ),
                'items_list'                 => __( 'Items list', 'unite' ),
                'items_list_navigation'      => __( 'Items list navigation', 'unite' ),
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
            );
            register_taxonomy( 'genre', array( 'film' ), $args );
        
        }
        add_action( 'init', 'genre_taxonomy', 0 );
        
        }
    
    // Register Custom Taxonomy
    function genre_taxonomy() {
    
        $labels = array(
            'name'                       => _x( 'Genre', 'Taxonomy General Name', 'unite-child' ),
            'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'unite-child' ),
            'menu_name'                  => __( 'Genre', 'unite-child' ),
            'all_items'                  => __( 'All Items', 'unite-child' ),
            'parent_item'                => __( 'Parent Item', 'unite-child' ),
            'parent_item_colon'          => __( 'Parent Item:', 'unite-child' ),
            'new_item_name'              => __( 'New Item Name', 'unite-child' ),
            'add_new_item'               => __( 'Add New Item', 'unite-child' ),
            'edit_item'                  => __( 'Edit Item', 'unite-child' ),
            'update_item'                => __( 'Update Item', 'unite-child' ),
            'view_item'                  => __( 'View Item', 'unite-child' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
            'popular_items'              => __( 'Popular Items', 'unite-child' ),
            'search_items'               => __( 'Search Items', 'unite-child' ),
            'not_found'                  => __( 'Not Found', 'unite-child' ),
            'no_terms'                   => __( 'No items', 'unite-child' ),
            'items_list'                 => __( 'Items list', 'unite-child' ),
            'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            
        );
        register_taxonomy( 'genre', array( 'film' ), $args );

    
    
    }
    add_action( 'init', 'genre_taxonomy', 0 );
    
    


if ( ! function_exists( 'year_taxonomy' ) ) {
    
    // Register Custom Taxonomy
    function year_taxonomy() {
    
        $labels = array(
            'name'                       => _x( 'Years', 'Taxonomy General Name', 'unite-child' ),
            'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'unite-child' ),
            'menu_name'                  => __( 'Year', 'unite-child' ),
            'all_items'                  => __( 'All Items', 'unite-child' ),
            'parent_item'                => __( 'Parent Item', 'unite-child' ),
            'parent_item_colon'          => __( 'Parent Item:', 'unite-child' ),
            'new_item_name'              => __( 'New Item Name', 'unite-child' ),
            'add_new_item'               => __( 'Add New Item', 'unite-child' ),
            'edit_item'                  => __( 'Edit Item', 'unite-child' ),
            'update_item'                => __( 'Update Item', 'unite-child' ),
            'view_item'                  => __( 'View Item', 'unite-child' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
            'popular_items'              => __( 'Popular Items', 'unite-child' ),
            'search_items'               => __( 'Search Items', 'unite-child' ),
            'not_found'                  => __( 'Not Found', 'unite-child' ),
            'no_terms'                   => __( 'No items', 'unite-child' ),
            'items_list'                 => __( 'Items list', 'unite-child' ),
            'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'year', array( 'film' ), $args );
    
    }
    add_action( 'init', 'year_taxonomy', 0 );
    
    }

if ( ! function_exists( 'country_taxonomy' ) ) {
    // Register Custom Taxonomy
    function country_taxonomy() {
    
        $labels = array(
            'name'                       => _x( 'Countries', 'Taxonomy General Name', 'unite-child' ),
            'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'unite-child' ),
            'menu_name'                  => __( 'Country', 'unite-child' ),
            'all_items'                  => __( 'All Items', 'unite-child' ),
            'parent_item'                => __( 'Parent Item', 'unite-child' ),
            'parent_item_colon'          => __( 'Parent Item:', 'unite-child' ),
            'new_item_name'              => __( 'New Item Name', 'unite-child' ),
            'add_new_item'               => __( 'Add New Item', 'unite-child' ),
            'edit_item'                  => __( 'Edit Item', 'unite-child' ),
            'update_item'                => __( 'Update Item', 'unite-child' ),
            'view_item'                  => __( 'View Item', 'unite-child' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
            'popular_items'              => __( 'Popular Items', 'unite-child' ),
            'search_items'               => __( 'Search Items', 'unite-child' ),
            'not_found'                  => __( 'Not Found', 'unite-child' ),
            'no_terms'                   => __( 'No items', 'unite-child' ),
            'items_list'                 => __( 'Items list', 'unite-child' ),
            'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'country', array( 'film' ), $args );
    
    }
    add_action( 'init', 'country_taxonomy', 0 );
    
    }


if ( ! function_exists( 'actor_taxonomy' ) ) {
        
        // Register Custom Taxonomy
        function actor_taxonomy() {
        
            $labels = array(
                'name'                       => _x( 'Actors', 'Taxonomy General Name', 'unite-child' ),
                'singular_name'              => _x( 'Actor', 'Taxonomy Singular Name', 'unite-child' ),
                'menu_name'                  => __( 'Actor', 'unite-child' ),
                'all_items'                  => __( 'All Items', 'unite-child' ),
                'parent_item'                => __( 'Parent Item', 'unite-child' ),
                'parent_item_colon'          => __( 'Parent Item:', 'unite-child' ),
                'new_item_name'              => __( 'New Item Name', 'unite-child' ),
                'add_new_item'               => __( 'Add New Item', 'unite-child' ),
                'edit_item'                  => __( 'Edit Item', 'unite-child' ),
                'update_item'                => __( 'Update Item', 'unite-child' ),
                'view_item'                  => __( 'View Item', 'unite-child' ),
                'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
                'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
                'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
                'popular_items'              => __( 'Popular Items', 'unite-child' ),
                'search_items'               => __( 'Search Items', 'unite-child' ),
                'not_found'                  => __( 'Not Found', 'unite-child' ),
                'no_terms'                   => __( 'No items', 'unite-child' ),
                'items_list'                 => __( 'Items list', 'unite-child' ),
                'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => false,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
            );
            register_taxonomy( 'actor', array( 'film' ), $args );
        
        }
        add_action( 'init', 'actor_taxonomy', 0 );
        
        }










