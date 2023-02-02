<?php
	
	$section_title  						= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$side_by_side_content					= (get_sub_field('side_by_side_content') ? get_sub_field('side_by_side_content') : '');
	$colored_bar							= (get_sub_field('colored_bar') ? get_sub_field('colored_bar') : '');
	//p($column_icon_box);
 ?>


 

 <div class="section-padding">
    <div class="container">
      	<?php if($section_title ): ?>
	      <div class="section-title text-center">
	        <h2><?php echo $section_title; ?></h2>
	      </div>
		<?php endif; ?>

		<?php if($side_by_side_content) { ?>
	      <div class="participants-block">
	        <div class="row">
	          
	          <?php foreach ($side_by_side_content as $value) { ?>
	          	
	          
	          <div class="col-md-6">
	            <div class="participants-box">
	            	
	            	<?php if($value['logo']): ?>
	              		<div class="icon"><img src="<?php echo $value['logo']; ?>" alt=""></div>
	          		<?php endif;?>

	          		<?php if($value['title']): ?>
	              		<h4><?php echo $value['title']; ?></h4>
					<?php endif;?>

					<?php if($value['content']): 
							echo '<p>'.$value['content'].'</p>';
						endif; 
					?>
	            </div>
	          </div>

	          <?php } ?>
	          
	        </div>
	      </div>
	     <?php } ?>

	<?php if( $colored_bar ){ ?>
      <div class="interested-box">
      	
      	<?php if($colored_bar['icon']) : ?>
        	<div class="icon"><img src="<?php echo $colored_bar['icon']; ?>" alt=""></div>
        <?php endif; ?>

        <?php if($colored_bar['content']) : ?>
        	<div class="text"><?php echo $colored_bar['content']; ?></div>
        <?php endif; ?>

        <?php if($colored_bar['button']) : 
        	$target = ($colored_bar['button']['target']) ? 'target="_blank"' : '';
        	?>
        	<div class="more-btn"><a <?php echo $target; ?> href="<?php echo $colored_bar['button']['url']; ?>"><?php echo ($colored_bar['button']['title']) ? $colored_bar['button']['title'] : 'Know more'; ?></a></div>
		<?php endif; ?>

      </div>
    <?php } ?>

    </div>
  </div>