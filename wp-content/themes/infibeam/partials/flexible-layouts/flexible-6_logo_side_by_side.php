<?php
	
	$section_title  			= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$logos						= (get_sub_field('logos') ? get_sub_field('logos') : '');
	//p($logos);
 ?>
  
<?php if( $logos ) { ?>

	<div class="section-padding ccavenue-page">
    <div class="container">
      
      <?php if($section_title ): ?>
	      <div class="section-title text-center">
	        <h2><?php echo $section_title; ?></h2>
	      </div>
		<?php endif; ?>

      <div class="clients-logo">
        <div class="row">
        	
        	<?php foreach ($logos  as $l ) { ?>
        	
	          <div class="col-md-2 col-sm-3">
	            <div class="logo-box">
	            	<?php 
	            		
	            		if($l['url']): 
	            			echo '<a href="'.$l['url'].'" target="_blank">';
	            		endif;

	            		?>
	              			<img src="<?php echo $l['logo']; ?>" alt="">
	              		<?php
	              			if($l['url']): 
	              				echo '</a>';
							endif;	              				
	              		?>

	            </div>
	          </div>

          	<?php } ?>
         
        </div>
      </div>
    </div>
  </div>

<?php } ?>