<?php	
	
	$small_text 	=  get_sub_field('small_text');
	$big_text 		=  get_sub_field('big_text');

 ?>

<section class="media-text-block full-width bottom-cross">
    <div class="container">
        <div class="listing row">
          <div class="col-md-12">
            
            <div class="text-block text-center">
            	
            	<?php if($small_text) : ?>
              		<h4><?php echo $small_text; ?></h4>
              	<?php endif; ?>

              	<?php if($big_text) : ?>
              		<h3><?php echo $big_text; ?></h3>
				<?php endif; ?>

            </div>

          </div>
        </div>
    </div>
  </section>