<?php	
	
	$section_title  					= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$column_list_content				= (get_sub_field('3_column_list_content') ? get_sub_field('3_column_list_content') : '');

	$number_of_column					= (get_sub_field('number_of_column') ? get_sub_field('number_of_column') : '');
	$class 								= '';
	if($number_of_column == 3) {
		$class = 'col-sm-6 col-md-4';
	} elseif($number_of_column == 2){
		$class = 'col-sm-6';
	}
 ?>


<section class="solution-block">
    <div class="container">
       <?php if($section_title ): ?>
		      <div class="section-title text-center">
		        <h2><?php echo $section_title; ?></h2>
		      </div>
		<?php endif; ?>
      
      <?php if($column_list_content) { ?>

      <div class="listing">
       	<?php foreach ($column_list_content as $v) { ?>
       
	        <div class="<?php echo $class; ?>">
	          <div class="text-col">
	          	
	          	<?php if($v['tab_title']) : ?>
		            <div class="title">
		              <h2>SME/MSME SOLUTIONS</h2>
		            </div>
		        <?php endif; ?>

		        <?php if($v['content']) : ?>
		            <div class="content">
		              <?php echo $v['content']; ?>
		            </div>
		        <?php endif; ?>

	          </div>
	        </div>

        <?php } ?>
        
      </div>
    <?php } ?>
    
    </div>
  </section>