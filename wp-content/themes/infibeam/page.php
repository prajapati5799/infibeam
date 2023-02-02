<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package infibeam
 */
get_header();

    echo '<section class="section-padding innerpageinfi">';
		echo '<div class="container">';
		
			while ( have_posts() ) :
				the_post();
            
				echo '<div class="section-title text-center">';
					echo '<h2>' . get_the_title() . '</h2>';
				echo '</div>';

				infibeam_post_thumbnail();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.

        echo '</div>';
    echo '</section>';

get_sidebar();
get_footer();
?>