<?php
/*
* Creating a function to create our Case studies post type
*/

/*
* Adding year column to press release
*/
add_admin_column(__('Press release year'), 'drc_press_release', function($post_id){
        echo get_post_meta( $post_id , 'press_release_year' , true ); 
  });

/* ==========================
************ Financial statement ************
=============================== */
 
function infi_financial_statement_func() {
 
        $labels = array(
            'name'                => _x( 'Financial statement', 'Post Type General Name', 'drc' ),
            'singular_name'       => _x( 'Financial statement', 'Post Type Singular Name', 'drc' ),
            'menu_name'           => __( 'Financial statement', 'drc' ),
            'parent_item_colon'   => __( 'Parent Financial statement', 'drc' ),
            'all_items'           => __( 'All Financial statement', 'drc' ),
            'view_item'           => __( 'View Financial statement', 'drc' ),
            'add_new_item'        => __( 'Add New Financial statement', 'drc' ),
            'add_new'             => __( 'Add New', 'drc' ),
            'edit_item'           => __( 'Edit Financial statement', 'drc' ),
            'update_item'         => __( 'Update Financial statement', 'drc' ),
            'search_items'        => __( 'Search Financial statement', 'drc' ),
            'not_found'           => __( 'Not Found', 'drc' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'drc' ),
        );
 
        $args = array(
            'label'               => __( 'Financial statement', 'drc' ),
            'description'         => __( 'Financial statement for DRC Systems', 'drc' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'thumbnail' ),
           
            'hierarchical'        => false,
            'menu_icon'           => 'dashicons-edit-page',
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
         
        register_post_type( 'financial_statement', $args );
     
    } 
    add_action( 'init', 'infi_financial_statement_func', 0 );

/*
* Adding year column to press release
*/
    add_admin_column(__('Financial Year'), 'financial_statement', function($post_id){
        echo get_post_meta( $post_id , 'financial_statement_year' , true ); 
    });
    add_admin_column(__('Quater'), 'financial_statement', function($post_id){
        echo get_post_meta( $post_id , 'financial_quater' , true ); 
    });


/*
* Creating a function to create Members post type
*/
 
function infi_members_func() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Members', 'Post Type General Name', 'drc' ),
        'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'drc' ),
        'menu_name'           => __( 'Members', 'drc' ),
        'parent_item_colon'   => __( 'Parent Member', 'drc' ),
        'all_items'           => __( 'All Members', 'drc' ),
        'view_item'           => __( 'View Member', 'drc' ),
        'add_new_item'        => __( 'Add New Member', 'drc' ),
        'add_new'             => __( 'Add New', 'drc' ),
        'edit_item'           => __( 'Edit Member', 'drc' ),
        'update_item'         => __( 'Update Member', 'drc' ),
        'search_items'        => __( 'Search Member', 'drc' ),
        'not_found'           => __( 'Not Found', 'drc' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'drc' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Members', 'drc' ),
        'description'         => __( 'Members for technologies', 'drc' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail',  'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'infi_member_cat' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-businessperson',
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'infi_members', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'infi_members_func', 0 );


/*
* Register taxonomy
*/

function infi_members_taxonomy_func() {

    register_taxonomy(
        'infi_member_cat',
        'infi_members',
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'infi_member_cat' ),
            'hierarchical' => true,
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'infi_members_taxonomy_func' );



/*
** Add admin column to custom post type listing
* @usage 
        add_admin_column(__('EAN'), 'product', function($post_id){
            echo get_post_meta( $post_id , 'ean' , true ); 
        });
*
*/

function add_admin_column($column_title, $post_type, $cb){

    // Column Header
    add_filter( 'manage_' . $post_type . '_posts_columns', function($columns) use ($column_title) {
        $columns[ sanitize_title($column_title) ] = $column_title;
        return $columns;
    } );

    // Column Content
    add_action( 'manage_' . $post_type . '_posts_custom_column' , function( $column, $post_id ) use ($column_title, $cb) {

        if(sanitize_title($column_title) === $column){
            $cb($post_id);
        }

    }, 10, 2 );
}

