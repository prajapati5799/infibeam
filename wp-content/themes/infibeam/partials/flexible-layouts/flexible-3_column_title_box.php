<?php
	
	$section_title  						= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$column_icon_box						= (get_sub_field('3_column_title_box') ? get_sub_field('3_column_title_box') : '');
	$number_of_column 						= (get_sub_field('number_of_column')) ? get_sub_field('number_of_column') : '';
	$class = ($number_of_column == 2) ? 'four-col-icon-block' : '';
 ?>

 <section class="why-we-block section-padding <?php echo $class; ?>">
    <div class="container">
      <?php if($section_title ): ?>
		      <div class="section-title text-center">
		        <h2><?php echo $section_title; ?></h2>
		      </div>
		<?php endif; ?>

		<?php if($column_icon_box){ ?>
        
	        <div class="listing">
	        	<?php 
	        		foreach ($column_icon_box as $v) {
		        		if($v['label']) { ?>
				          <div class="text-col">
				            <div class="inside">
				            	
				            	<?php if($v['icon']) { ?>
				            		<div class="icon"><img src="<?php echo $v['icon']; ?>"></div>
				            	<?php } ?>

				              	<h3><?php echo $v['label']; ?></h3>

				              	<?php if($v['content']) { ?>
				              		<p><?php echo $v['content']; ?> </p>
				              	<?php } ?>

				            </div>
				          </div>
				    <?php }
					}
				?>

	        </div>
        <?php }?>
    </div>
  </section>