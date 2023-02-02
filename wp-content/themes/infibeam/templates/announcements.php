<?php
/*
* Template Name: Announcements
*/

get_header();



// get repeater field data
$repeater = get_field('announcements_section');

// vars
/*$order = array();

// populate order
 foreach( $repeater as $i => $row ) {
	
	$order[ $i ] = $row['title'];
	
} */

    echo '<section class="announcements-list-block section-padding">';
        echo '<div class="container">';
            
            if( get_field('page_title') ) :
                echo '<div class="section-title text-center">';
                    echo '<h2>' . get_field('page_title') . '</h2>';
                echo '</div>';
            endif;
            
            echo '<div class="listing">';

            if( $repeater ): 

                // Loop through rows.
                foreach( array_reverse( $repeater ) as $i => $row ):

                    if( $row['title'] && $row['link'] ) :

                        $target = '';
                        if( $row['open_in_new_tab'] == "Yes" ){
                            $target = 'target="_blank"';
                        }

                        echo '<div class="ct-col">';
                            echo '<a href="' .  $row['link'] . '" ' . $target . '>' . $row['title'] . '</a>';
                        echo '</div>';
                    endif;
            
                    // End loop.
                endforeach;
            endif;
            
            echo '</div>';

        echo '</div>';
    echo '</section>';

get_footer();
?>