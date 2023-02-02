<?php
	
	$section_title  						= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$section_subtext  						= (get_sub_field('section_subtext') ? get_sub_field('section_subtext') : '');
	$add_class  							= (get_sub_field('add_class') ? get_sub_field('add_class') : '');	
	$column_icon_box						= (get_sub_field('4_column_icon_box') ? get_sub_field('4_column_icon_box') : '');
	$number_of_column 						= (get_sub_field('number_of_column')) ? get_sub_field('number_of_column') : '';
	//p($column_icon_box);
	if( $number_of_column == '3' ) {
		$class = 'col-sm-6 col-md-4';
	} else {
		$class = 'col-sm-6 col-md-3';
	}
 ?>
  
	<?php if( $column_icon_box ) { ?>

		<div class="icon-boxBg <?php echo $add_class; ?>">
		  	<div class="container">

			   <?php if(($section_title) || ($section_subtext ) ){ ?>
			      <div class="section-title text-center">
			      	<?php 

			      		if($section_title) :
			      			echo '<h2>'.$section_title.'</h2>';
			      		endif;

			      		if($section_subtext) :
			      			echo '<p>'.$section_subtext.'</p>';
			      		endif;
			      	?>

			      </div>
				<?php } ?>

			    <div class="row">
			      
			      	<?php foreach ($column_icon_box as $b ) { ?>
			      
				      <div class="<?php echo $class; ?>">
				        <div class="box-view">
				        	
				        	<?php if($b['icon']): ?>
				          		<div class="icon"><img src="<?php echo $b['icon']; ?>" alt=""></div>
				          	<?php endif; ?>

				          	<?php if($b['title']): ?>
				          		<h4><?php echo $b['title']; ?></h4>
				          	<?php endif; ?>
				          	<?php if($b['content']): ?>
				          		<p><?php echo $b['content']; ?></p>
				          	<?php endif; ?>
				        </div>
				      </div>

				    <?php } ?>

			    </div>
		  	</div>
		</div>

	<?php } ?>