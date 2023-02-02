<?php	
	
	$section_title  					= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$orange_box							= (get_sub_field('orange_box') ? get_sub_field('orange_box') : '');
	$side_by_side_list_content			= (get_sub_field('side_by_side_list_content') ? get_sub_field('side_by_side_list_content') : '');
 ?>

<section class="complexity-text-block">
    <div class="container">
      <?php if($section_title ): ?>
	      <div class="section-title text-center">
	        <h2><?php echo $section_title; ?></h2>
	      </div>
		<?php endif; ?>
      <div class="listing row">
        
      	<?php if($orange_box ) { ?>
        
	        <div class="col-sm-12 col-md-4">
	          <?php 
	          		foreach ($orange_box as $value) { ?>
			          <div class="orange-box">
			          	<?php if($value['title'] ) :
			            		echo '<h3>'.$value["title"].'</h3>';
			            	endif;

				            if($value['content'] ) :
				            	echo '<p>'.$value["content"].'</p>';
				            endif;
			          echo '</div>';
	          		 } ?>

	        </div>

        <?php }?>

    <?php if($side_by_side_list_content) { ?>
        <div class="col-sm-12 col-md-8">
          <div class="text-block">

          	<?php foreach ($side_by_side_list_content as $value) { 

          		if($value['title'] ) :
	            	echo '<h3>'.$value["title"].'</h3>';
			    endif;

	            if($value['content'] ) :
	            	echo '<p>'.$value["content"].'</p>';
	            endif;
	            	            
				} ?>

            </div>
        </div>
    <?php } ?>

      </div>
    </div>
  </section>