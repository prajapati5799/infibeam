<?php
/* Disable gueten berg editor */

//add_filter('use_block_editor_for_post', '__return_false');

/* Add excert to pages */

add_post_type_support( 'page', 'excerpt' );

/*
 * Include CSS & JS
 */
function infi_enqueue_files_func() {
    wp_enqueue_style( 
      'bootstrap-css', 
      get_template_directory_uri() . '/assets/css/bootstrap.css' 
    );
    wp_enqueue_style( 
      'owl-carousel', 
      get_template_directory_uri() . '/assets/css/owl.carousel.min.css' 
    );
	wp_enqueue_style( 
      'font-awesome-css', 
      get_template_directory_uri() . '/assets/css/font-awesome.min.css' 
    );    
	wp_enqueue_style( 
      'style-main', 
      get_template_directory_uri() . '/assets/css/style-main.css','',time() 
    );
    wp_enqueue_style( 
      'fix-css', 
      get_template_directory_uri() . '/assets/css/fix.css' ,'',time()
    );
    wp_enqueue_style( 
        'select2', 
        get_template_directory_uri() . '/assets/css/select2.css' ,'',
      );
	
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), false, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), false, true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, true );
	/*wp_enqueue_script( 'matchheight-js', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array(), false, true );	
    wp_enqueue_script( 'select2-js', get_template_directory_uri() . '/assets/js/select2.js', array(), false, true ); */
    wp_enqueue_script( 'select2-js', get_template_directory_uri() . '/assets/js/select2.js', array(), time(), true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), time(), true );
    wp_localize_script( 'custom-js', 'frontendajax',array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ));
	wp_enqueue_script( 'custom-dev-js', get_template_directory_uri() . '/assets/js/custom-dev.js', array(), time(), true );

}

add_action( 'wp_enqueue_scripts', 'infi_enqueue_files_func' );


/*
* Theme options
*/

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme options',
        'menu_title'    => 'Theme options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Header settings',
        'menu_title'    => 'Header settings',
        'parent_slug'   => 'theme-options',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer settings',
        'menu_title'    => 'Footer settings',
        'parent_slug'   => 'theme-options',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Icon settings',
        'menu_title'    => 'Icon settings',
        'parent_slug'   => 'theme-options',
    ));
}

/*
* Filter constants
*/

function infi_replace_constants( $tokens, $template ){
    $pattern = '##%s##';

    $map = array();
    foreach($tokens as $var => $value)
    {
        $map[sprintf($pattern, $var)] = $value;
    }

    $output = strtr($template, $map);
    return $output;
}

/*
Register sidebar
*/
function infi_footer_widgets_func() {
 
    register_sidebar( 
        array(
            'name' =>__( 'CONTACT US', 'infibeam'),
            'id' => 'contact_us',
            'description' => __( 'Appears on the footerarea', 'infibeam' ),
            'class' => 'vikas',
            'before_widget' => '<div class="footerLink">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="mobile">',
            'after_title' => '<i class="fa fa-angle-down"></i></h4>',
        )
    );
    register_sidebar( 
        array(
            'name' =>__( 'COMPANY', 'infibeam'),
            'id' => 'company',
            'description' => __( 'Appears on the footerarea', 'infibeam' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    register_sidebar( 
        array(
            'name' =>__( 'BUSINESSES', 'infibeam'),
            'id' => 'business',
            'description' => __( 'Appears on the footerarea', 'infibeam' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    register_sidebar( 
        array(
            'name' =>__( 'INVESTOR RELATIONS', 'infibeam'),
            'id' => 'investor_relation',
            'description' => __( 'Appears on the footerarea', 'infibeam' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    register_sidebar( 
        array(
            'name' =>__( 'POLICIES', 'infibeam'),
            'id' => 'policies',
            'description' => __( 'Appears on the footerarea', 'infibeam' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    

}
 
add_action( 'widgets_init', 'infi_footer_widgets_func' );

/*
* Sidebar remove wrapper hack
*/

function infi_custom_nav_menu_widget() {
    register_widget('infi_Custom_Nav_Menu_Widget');
}

add_action ( 'widgets_init', 'infi_custom_nav_menu_widget', 1 );


function get_dynamic_sidebar($i = 1) {
   $c = '';
   ob_start();
   dynamic_sidebar($i);
   $c = ob_get_clean();
   return $c;
}

/*
* Delete after development
*/
function p( $arr ){
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

/*
* Page Slug Body Class
*/
function infi_add_slug_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
    $classes[] = "page_".$post->post_name;
    if(!is_front_page()) {
      $classes[] = "inner_page";
    }
  }
  return $classes;
}
add_filter( 'body_class', 'infi_add_slug_body_class' );


// Custom image size for blog
add_image_size( 'home-thumb', 356, 270, true );

/* PDF post type */

function infi_pdf_func() {
 
        $labels = array(
            'name'                => _x( 'Infibeam PDF', 'Post Type General Name', 'drc' ),
            'singular_name'       => _x( 'Infibeam PDF', 'Post Type Singular Name', 'drc' ),
            'menu_name'           => __( 'Infibeam PDF', 'drc' ),
            'parent_item_colon'   => __( 'Parent Infibeam PDF', 'drc' ),
            'all_items'           => __( 'All Infibeam PDF', 'drc' ),
            'view_item'           => __( 'View Infibeam PDF', 'drc' ),
            'add_new_item'        => __( 'Add New Infibeam PDF', 'drc' ),
            'add_new'             => __( 'Add New', 'drc' ),
            'edit_item'           => __( 'Edit Infibeam PDF', 'drc' ),
            'update_item'         => __( 'Update Infibeam PDF', 'drc' ),
            'search_items'        => __( 'Search Infibeam PDF', 'drc' ),
            'not_found'           => __( 'Not Found', 'drc' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'drc' ),
        );
 
        $args = array(
            'label'               => __( 'Infibeam PDF', 'drc' ),
            'description'         => __( 'Infibeam PDF for Infibeam', 'drc' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor'),
           
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
         
        register_post_type( 'pdf', $args );
     
    } 
    add_action( 'init', 'infi_pdf_func', 0 );

//disbale json api
add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');



