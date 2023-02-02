<?php
/*
* Template Name: Contact
*/
?>
    
<?php get_header(); ?>
<?php
echo '<section class="contact-block section-padding">
    <div class="container">';

    	if(get_field('page_title')) :
        echo '<div class="section-title text-center">
          		<h2>' . get_field('page_title') . '</h2>
        	</div>';
        endif;
        echo '<div class="row">';

        	if( have_rows('contact_block') ):
                
                while( have_rows('contact_block') ) : the_row();

                	if( get_sub_field('content') && get_sub_field('title') ) :

			         echo '<div class="col-md-4 col-sm-6 col-xs-12">
			            <div class="text-block text-center">';
			            
			            if(get_sub_field('icon')):
			              echo '<div class="icon">			              
			                		<img src="'.get_sub_field('icon').'" alt="">
			              		</div>';
			              endif;
			              
			              if(get_sub_field('title')):
			              	echo '<h3>'.get_sub_field('title').'</h3>';
			              endif;

			              if(get_sub_field('content')):
			              	echo get_sub_field('content');
			              endif;
			            echo '
			          	</div>        
			        	</div>';
			    	endif;
			    endwhile;
			endif;

        if(get_field('map_iframe')) :
       		echo '<div class="map-bottom">'.get_field('map_iframe').'</div>';
       	endif;
	echo '
    </div>
  </section>';
?>
<?php get_footer(); ?>