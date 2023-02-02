<?php	
	
	$section_title  					= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$section_content  					= (get_sub_field('content') ? get_sub_field('content') : '');
	
 ?>

<section class="who-we-block">
    <div class="container">
        <div class="text-block text-center">
        	<?php if($section_title ): ?>
        		<div class="section-title">
	            	<h2><?php echo $section_title; ?></h2>
	          </div>
	        
	        <?php endif; 

		        if($section_content) :
		        	echo '<p>'.$section_content.'</p>';
		        endif; 
	        ?>

        </div>
    </div>
  </section>