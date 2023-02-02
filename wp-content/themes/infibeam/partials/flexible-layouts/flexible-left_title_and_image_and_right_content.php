<?php	
	
	$section_title  						= (get_sub_field('left_section_title') ? get_sub_field('left_section_title') : '');
	$left_section_image  				= (get_sub_field('left_section_image') ? get_sub_field('left_section_image') : '');
	$right_content  						= (get_sub_field('right_content') ? get_sub_field('right_content') : '');
	
	
 ?>

<section class="contract career-text">
    <div class="container">
      <div class="payment-business">
        <div class="business-slide">
          <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="img">
              	<?php if($section_title) :
                		echo '<h4>'.$section_title.'</h4>';
                	endif;

                	if($left_section_image) :
                		echo '<img src="'.$left_section_image.'" alt="">';
                	endif; ?>
              </div>
            </div>
            <div class="col-sm-6 col-md-7 col-xs-12">
            	
            	<?php if($right_content) :
            			     echo $right_content;
            	     endif; 
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>