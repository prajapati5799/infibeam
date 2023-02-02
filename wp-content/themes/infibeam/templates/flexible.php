<?php
/*
* Template Name: Dynamic sections
*/

get_header();

    if( have_rows( 'dynamic_content' ) ):

        // loop through the rows of data
        while ( have_rows( 'dynamic_content' ) ) : the_row();

            get_template_part( 'template-parts/content', 'pagelayout' );

        endwhile;
    endif;

get_footer();
?>