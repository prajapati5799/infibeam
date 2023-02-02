<?php	
	
	$section_title  					= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$side_by_side_list_content			= (get_sub_field('side_by_side_list_content') ? get_sub_field('side_by_side_list_content') : '');
 ?>


<div class="section-padding ccavenue-page">
    <div class="container">
      <?php if($section_title ): ?>
	      <div class="section-title text-center">
	        <h2><?php echo $section_title; ?></h2>
	      </div>
	<?php endif; ?>

	<?php  if($side_by_side_list_content){  ?>
      <div class="text-bgBox">
        <div class="row">

          	<?php foreach ( $side_by_side_list_content as $value ) { ?>
	          <div class="col-sm-6">
	            <div class="bg-box">
	            	
	            	<?php if( $value['title'] ): ?>
	              		<h5><?php echo $value['title']; ?></h5>
	              	<?php endif; ?>

	              	<?php if( $value['content'] ): ?>
	              		<p><?php echo $value['content']; ?></p>
	              	<?php endif; ?>

	              	<?php if( $value['button'] ): 

	              		$target = ($value['button']['target']) ? 'target="_blank"' : '';

	              		?>
	              		<a <?php echo $target; ?> href="<?php echo $value['button']['url']; ?>">              			<?php echo ($value['button']['title']) ? $value['button']['title'] : 'Know more'; ?></a>
	              	<?php endif; ?>

	            </div>
	          </div>
	      	<?php } ?>

        </div>
      </div>
    <?php } ?>

    </div>
  </div>