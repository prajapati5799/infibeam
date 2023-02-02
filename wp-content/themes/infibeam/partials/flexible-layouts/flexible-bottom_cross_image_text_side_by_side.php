<?php	
	
	$image							= (get_sub_field('image') ? get_sub_field('image') : '');
	$content						= (get_sub_field('content') ? get_sub_field('content') : '');
	$link_over_image				= (get_sub_field('link_over_image') ? get_sub_field('link_over_image') : '');

 ?>


<section class="media-text-block bottom-cross">
    <div class="container">
        <div class="listing row">
          <div class="col-md-6">
          	<?php if($image) { 

          		if($link_over_image):
          			//p($link_over_image);
          			$target = ($link_over_image['target']) ? 'target="_blank"' : '';
          			$link 	= ($link_over_image['url']) ? $link_over_image['url'] : '';
          			echo '<a href="'.$link.'" '.$target.'>';
          		endif;
          		?>
	            <div class="img-block">
	              <div class="img">
	                <img src="<?php echo $image; ?>" alt="">
	              </div>
	            </div>
	        <?php 
	        	if($link_over_image):
	        		echo '</a>';
	        	endif;
	    		} ?>
          </div>
          <div class="col-md-6">
          	<?php if($content) { ?>
	            <div class="text-block">
	              <?php echo $content; ?>
	            </div>
	        <?php } ?>
          </div>
        </div>
    </div>
  </section>