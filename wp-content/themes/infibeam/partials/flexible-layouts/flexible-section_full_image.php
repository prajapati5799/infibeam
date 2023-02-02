<?php	
	
	$section_title  		= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$desktop_image			= (get_sub_field('desktop_image') ? get_sub_field('desktop_image') : '');
	$mobile_image  			= (get_sub_field('mobile_image') ? get_sub_field('mobile_image') : '');

 ?>

 <div class="section-padding">
    <div class="container">
      	
      	<?php if($section_title ): ?>
	      <div class="section-title text-center">
	        <h2><?php echo $section_title; ?></h2>
	      </div>
		<?php endif; ?>

		<?php if($desktop_image ): ?>
	      <div class="process-chain">
	        <img src="<?php echo $desktop_image; ?>" alt="">
	      </div>
		<?php endif; ?> 

    </div>
  </div>