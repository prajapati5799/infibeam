<?php	
	
	$section_title  						= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$image_and_text_side_by_side			= (get_sub_field('image_and_text_side_by_side') ? get_sub_field('image_and_text_side_by_side') : '');
	$contractClass  						= (get_sub_field('add_class_contract') ? get_sub_field('add_class_contract') : '');
 ?>


 <section class="section-padding <?php echo $contractClass; ?>">
    <div class="container">
    	<?php if($section_title ): ?>
		      <div class="section-title text-center">
		        <h2><?php echo $section_title; ?></h2>
		      </div>
		<?php endif; ?>


	<?php if($image_and_text_side_by_side) { ?>
	      <div class="payment-business">
	        

	      	<?php $i =1; foreach ($image_and_text_side_by_side as $v) {
	      		$class 	= ($i % 2 == 0) ? 'pull-right col-xs-12' : ' col-xs-12';
	      		//$bclass = ($i % 2 == 0) ? 'col-xs-12' : '';
	      		
	      	 ?>
	        <div class="business-slide">
	          <div class="row">
	            <div class="col-md-5 col-sm-6 <?php echo $class; ?>">
	            	<?php if( $v['image'] || $v['text_over_image'] ){ 
			              echo '<div class="img">';
			              	if($v['image']) : 
			              		$img = $v['image'];
			                	echo '<img src="'.$img.'" alt="">';
			                endif;

			                if($v['text_over_image']) {
			                	$text_over_image = $v['text_over_image'];
			                	echo '<div class="text">';
			                	
			                	if($v['logo_over_image']) :
			                		$logo_over_image = $v['logo_over_image'];
			                		echo '<div class="logo-img"><img src="'.$logo_over_image.'" alt=""></div>';
			                	endif;

			                	echo $text_over_image;
			                	echo '</div>';
			                }
			              echo '</div>';
			        } ?>
	            </div>
	            <?php if($v['side_content']) : ?>
		            <div class="col-sm-6 col-md-7 col-xs-12">
		              <?php echo $v['side_content']; ?>
		            </div>
		        <?php endif; ?>
	          </div>
	        </div>
	        <?php $i++; } ?>
	      </div>
  	<?php } ?>

    </div>

  </section>
