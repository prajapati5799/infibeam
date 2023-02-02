<?php
class infi_Custom_Nav_Menu_Widget extends WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Use this widget to add one of your custom menus as a widget.') );
        parent::__construct( 'custom_nav_menu', __('Infibeam Custom Menu'), $widget_ops );
    }

    function widget($args, $instance) {
        // Get menu
        $nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

        if ( !$nav_menu )
            return;

        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        echo $args['before_widget'];

        if ( !empty($instance['title']) )
            echo $args['before_title'] . $instance['title'] . $args['after_title'];

        wp_nav_menu(
                array(
                    'fallback_cb' => '',
                    'container' => '',
                    'menu_class' => $instance['menu_class'],
                    'menu' => $nav_menu
                )
            );

        echo $args['after_widget'];
    }

    function update( $new_instance, $old_instance ) {
        $instance['title'] = strip_tags ( stripslashes ( $new_instance['title'] ) );
        $instance['menu_class'] = strip_tags ( stripslashes ( trim ( $new_instance['menu_class'] ) ) );
        $instance['nav_menu'] = (int) $new_instance['nav_menu'];

        return $instance;
    }

    function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : '';
        $menu_class = isset( $instance['menu_class'] ) ? $instance['menu_class'] : '';
        $nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

        // Get menus
        $menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

        // If no menus exists, direct the user to go and create some.
        if ( !$menus ) {
            echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php') ) .'</p>';
            return;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('menu_class'); ?>"><?php _e('Menu Class:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('menu_class'); ?>" name="<?php echo $this->get_field_name('menu_class'); ?>" value="<?php echo $menu_class; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
            <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
        <?php
            foreach ( $menus as $menu ) {
                echo '<option value="' . $menu->term_id . '"'
                    . selected( $nav_menu, $menu->term_id, false )
                    . '>'. $menu->name . '</option>';
            }
        ?>
            </select>
        </p>
        <?php
    }
}

/*
* Pages widget
*/

class infi_pages_widget extends WP_Widget {
  
    function __construct() {
        parent::__construct(
            'infi_page_widget',
            'infi page menu widget'
            );
    } 
    // Creating widget front-end      
    public function widget( $args, $instance ) {
        $subText = ( (isset($instance['subtext'])) ? $instance['subtext'] : '');
        $title      = apply_filters( 'widget_title', $instance['title'] );
        $page       = apply_filters( 'widget_pages', $instance['pages'] );
        $pageTitle  = get_the_title( $page );
        $pageURL    = get_the_permalink( $page );
        $subText    = apply_filters( 'widget_pages', $subText );

        
            if ( ! empty( $title ) ){
                echo '<h3 class="header-menu-block-title">' . $title . '</h3>';   
            }

            if(!empty($page)){              
                echo '<a class="header-menu-block-link" href="'.$pageURL.'">'.$pageTitle.'</a>';
            }

            if(!empty($subText)){
                echo '<p class="header-menu-block-subtext">'.$subText.'</p>';    
            } 
    }
              
    // Widget Backend 
    public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = '';
        }

        if ( isset( $instance[ 'pages' ] ) ) {
            $pages = $instance[ 'pages' ];
        }
        else {
            $pages = '';
        }

        if ( isset( $instance[ 'subtext' ] ) ) {
            $subtext = $instance[ 'subtext' ];
        }
        else {
            $subtext = '';
        }

        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'pages' ); ?>"><?php _e( 'Pages:' ); ?></label>
            <?php

                $aLLpages = get_pages();
                
                if($aLLpages){
                    echo '<select class="widefat" name="'.$this->get_field_name( "pages" ).'" id="'.$this->get_field_id( "pages" ).'">';
                        foreach($aLLpages as $page) {
                            //p($page);
                            p(esc_attr( $pages ));
                            $selected = ( $page->ID == esc_attr( $pages ) ? 'selected': '' );
                            echo '<option value="'.$page->ID.'" '.$selected.'>'.$page->post_title.'</option>';
                        }
                    echo '</select>';
                }
            ?>

        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'subtext' ); ?>"><?php _e( 'Subtext:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'subtext' ); ?>" name="<?php echo $this->get_field_name( 'subtext' ); ?>" type="text" value="<?php echo esc_attr( $subtext ); ?>" />
        </p>
        
        <?php 
    }
    
    public function update( $new_instance, $old_instance ) {

        $instance = array();
        $instance['title']      = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['subtext']    = ( ! empty( $new_instance['subtext'] ) ) ? strip_tags( $new_instance['subtext'] ) : '';
         $instance['pages']     = ( ! empty( $new_instance['pages'] ) ) ? strip_tags( $new_instance['pages'] ) : '';
        return $instance;
    }
    
    } 
     
    // Register and load the widget
    function infi_page_widget() {
        register_widget( 'infi_pages_widget' );
    }
    add_action( 'widgets_init', 'infi_page_widget' );


/*
* Pages widget with cutsom links
*/

class infi_pages_custom_link_widget extends WP_Widget {
  
    function __construct() {
        parent::__construct(
            'infi_page_custom_link_widget',
            'infi custom link widget'
            );
    } 
    // Creating widget front-end      
    public function widget( $args, $instance ) {

        $subText = ( (isset($instance['subtext'])) ? $instance['subtext'] : '');
        $title              = apply_filters( 'widget_title', $instance['title'] );
        $page_title         = apply_filters( 'widget_pages', $instance['page_title'] );       
        $custom_link        = apply_filters( 'widget_pages', $instance['custom_link'] );
        $subText            = apply_filters( 'widget_pages', $subText );
       
            if ( ! empty( $title ) ){
                echo '<h3 class="header-menu-block-title">' . $title . '</h3>';   
            }

            if(!empty($page_title)){         
                echo '<a class="header-menu-block-link" href="'.$custom_link.'" target="_blank">'.$page_title.'</a>';
            }
            if(!empty($subText)){
                echo '<p class="header-menu-block-subtext">'.$subText.'</p>';    
            }
    }
              
    // Widget Backend 
    public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = '';
        }

        if ( isset( $instance[ 'page_title' ] ) ) {
            $page_title = $instance[ 'page_title' ];
        }
        else {
            $page_title = '';
        }

        if ( isset( $instance[ 'custom_link' ] ) ) {
            $custom_link = $instance[ 'custom_link' ];
        }
        else {
            $custom_link = '';
        }
         if ( isset( $instance[ 'subtext' ] ) ) {
            $subtext = $instance[ 'subtext' ];
        }
        else {
            $subtext = '';
        }

        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'Page title' ); ?>"><?php _e( 'page title:' ); ?></label>
           <input class="widefat" id="<?php echo $this->get_field_id( 'page title' ); ?>" name="<?php echo $this->get_field_name( 'page_title' ); ?>" type="text" value="<?php echo esc_attr( $page_title ); ?>" />

        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'custom Link' ); ?>"><?php _e( 'Custom Link:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'custom_link' ); ?>" name="<?php echo $this->get_field_name( 'custom_link' ); ?>" type="text" value="<?php echo esc_attr( $custom_link ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'subtext' ); ?>"><?php _e( 'Subtext:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'subtext' ); ?>" name="<?php echo $this->get_field_name( 'subtext' ); ?>" type="text" value="<?php echo esc_attr( $subtext ); ?>" />
        </p>
        
        <?php 
    }
    
    public function update( $new_instance, $old_instance ) {

        $instance = array();
        $instance['title']              = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['custom_link']        = ( ! empty( $new_instance['custom_link'] ) ) ? strip_tags( $new_instance['custom_link'] ) : '';
        $instance['page_title']        = ( ! empty( $new_instance['page_title'] ) ) ? strip_tags( $new_instance['page_title'] ) : '';
        $instance['subtext']    = ( ! empty( $new_instance['subtext'] ) ) ? strip_tags( $new_instance['subtext'] ) : '';
        return $instance;
    }
    
    } 
     
    // Register and load the widget
    function infi_page_custom_link_widget() {
        register_widget( 'infi_pages_custom_link_widget' );
    }
    add_action( 'widgets_init', 'infi_page_custom_link_widget' );

