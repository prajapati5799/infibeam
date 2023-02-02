<?php	
	
	$section_title				= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$career_email				= (get_sub_field('career_email') ? get_sub_field('career_email') : '');
	$career_phone				= (get_sub_field('career_phone') ? get_sub_field('career_phone') : '');

 

echo '<section class="apply-block">
    	<div class="container">';
    	
    	if( $section_title ) :
      		echo '<div class="section-title text-center">
        			<h2>Apply Now!</h2>
      		 	</div>';
      	endif;

      echo '<div class="row">';

      	if( $career_email ) :
        	echo '<div class="col-sm-6">
          			<a href="mailto:'.$career_email.'"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>'.$career_email.'</a>
        		</div>';
        endif;
        
        if( $career_phone ) :
        	echo '<div class="col-sm-6">
          			<a href="tel:'.$career_phone.'"><i class="fa fa-phone" aria-hidden="true"></i>'.$career_phone.'</a>
        	</div>';
        endif;

      echo '</div>
    </div>
  </section>';