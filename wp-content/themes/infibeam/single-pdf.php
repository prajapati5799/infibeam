 <?php get_header(); ?>
<?php
echo '<section class="section-padding innerpageinfi">';
		echo '<div class="container">';
		
			while ( have_posts() ) :
				the_post();
     
				the_content();

				
			endwhile; // End of the loop.

        echo '</div>';
    echo '</section>';
  ?>
<?php get_footer(); ?>