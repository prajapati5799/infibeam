<?php
/*
* Template Name: Homepage
*/
?>
    
<?php get_header(); ?>

<?php $top_slider = get_field('top_slider'); 
	if($top_slider){
		//p($top_slider);
?>
		<section class="hero-banner">
		    <div class="container">
		      <div class="home-slider">

		        <?php foreach ($top_slider as $slide) {
		        		$slideHeading 	= ($slide['heading_text']) ? $slide['heading_text'] : '';
		        		$slidecontent 	= ($slide['content']) ? $slide['content'] : '';
		        		$slideVideo		= ($slide['video']) ? $slide['video'] : '';
		        		//echo $slideVideo;
		        ?>		        
			        <div class="item">

			            <div class="text-block">			            	
			            	<?php 
			            		if($slideHeading ) : 
			            			echo '<h2>'.$slideHeading .'</h2>';
			            		endif; 

			            		if($slidecontent ) : 
			            			echo $slidecontent;
			            		endif; 
			            	?>
			            </div>
			            
			            <div class="img-block">
			              	<video autoplay="autoplay" muted="" loop="">
				                <source src="<?php echo $slideVideo; ?>" type="video/mp4">
				             </video>
			            </div>

			            <?php 
			            	/*if($slideImage ) :
			            		echo '<div class="img-block">
					              	<img src="'.$slideImage.'" alt="infibeam">
					            </div>';
					        endif; */
					    ?>

			        </div>
		       	<?php } ?>
		    </div>
		  </section>
<?php } ?>

<?php /* $just_in_title = (get_field('just_in_title') ? get_field('just_in_title') : '' ); 
		if($just_in_title){ 
		$just_in_right_content = (get_field('just_in_right_content') ? get_field('just_in_right_content') : '' ); 
?>
  <section class="news-row-block">
  	<div class="container">
	    <div class="inside">
	      <div class="left">
	        <h3><?php echo $just_in_title; ?></h3>
	      </div>
	      <div class="right">
	      	<?php 
	      		if($just_in_right_content): 
	      			echo $just_in_right_content;
	      		endif;
	      	?>
	        
	      </div>
	    </div>
	</div>
  </section>
 <?php } */?>

 <?php
 	$logos = ( get_field('logos') ? get_field('logos') : '');
 	if($logos){
  ?>

  <section class="logo-carousel">
    <div class="listing owl-carousel">
      	<?php 
      		foreach ($logos as $logo) {  
      			$url 	= (($logo['logo']['url']) ? $logo['logo']['url'] : '');
      			$title 	= (($logo['logo']['title']) ? $logo['logo']['title'] : '');
      			$alt 	= (($logo['logo']['alt']) ? $logo['logo']['alt'] : '');
      			$link 	= $logo['url'];
      			
      			if( $url ):
      	?>
			      <div class="item">
			      	
			      	<?php if($link) : ?>
			      		<a href="<?php echo $link; ?>" target="_blank">
			      	<?php endif; ?>

			        	<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
			        <?php if($link) : ?>
			      		</a>
			      	<?php endif; ?>

			      </div>

      	<?php 	endif;

  			} 
  		?>
    </div>
  </section>

<?php } ?>

<?php 
	$who_we_are_title 	= (get_field('who_we_are_title') ? get_field('who_we_are_title') : '');
	$who_we_are_content = (get_field('who_we_are_content') ? get_field('who_we_are_content') : '');
	if(($who_we_are_title) || ($who_we_are_content)){


?>
  <section class="who-we-block">
    <div class="container">
        <div class="text-block text-center">
        <?php 
	        if($who_we_are_title): 
	          echo '<div class="section-title">
	            <h2>'.$who_we_are_title.'</h2>
	          </div>';
	         endif; 

	         if($who_we_are_content): 
	            echo $who_we_are_content;
	         endif;
         ?>
        </div>
    </div>
  </section>
<?php } ?>

<?php /*
	$digital_payment_slider = (get_field('digital_payment_slider') ? get_field('digital_payment_slider') : '' ); 
	if($digital_payment_slider){
		
?>
	  <section class="media-slider-content-block section-padding">
	    <div class="container">
	      <div class="inner">
	        <div class="img-block">
	          
	          	<?php 

		          	$slider = (($digital_payment_slider['slider']) ? $digital_payment_slider['slider'] : '' ); 
		          	if($slider){

	          	?>
			          <div id="img-slider1" class="img-slider owl-carousel">
			          <?php
			          		foreach ( $slider as $slide ) {
			          			$slideImage 			= ($slide['image']) ? $slide['image'] : '';
			          			$slidelogo_over_image 	= ($slide['logo_over_image']) ? $slide['logo_over_image'] : '';
			          			$slidetext_over_image 	= ($slide['text_over_image']) ? $slide['text_over_image'] : '';
			          	?>
			          		<div class="item bg-cover" style="background: url('<?php echo $slideImage; ?>');">
			          			<?php if($slidelogo_over_image){ ?>
						              <div class="slide-logo">
						                <img src="<?php echo $slidelogo_over_image; ?>" alt="">
						              </div>
						        <?php } 
							        if( $slidetext_over_image ){
							      		echo '<h4>'.$slidetext_over_image.'</h4>';
							        } 
							    ?>				              
				            </div>
			          	<?php
			          		}
			           ?>			            

			          </div>
		       

		          <div class="cu-progress-bar">
		            <div id="counter"></div>
		          </div>
	           <?php } ?>

	        </div>
	        <?php 
		        $content_title 		= ($digital_payment_slider['content_title'] ? $digital_payment_slider['content_title'] : '');
		        $detailed_content 	= ($digital_payment_slider['detailed_content'] ? $digital_payment_slider['detailed_content'] : '');

	        	if( ($content_title) || ($detailed_content) ) { ?>

			        <div class="content-block">
			        	<?php if($content_title): ?>
				            <div class="section-title">
				              <h2><?php echo $content_title; ?> </h2>
				            </div>
			        	<?php endif;
			        		  if($detailed_content): ?>
					            <div class="text">
					                <?php echo $detailed_content; ?>
					            </div>
					    <?php endif; ?>
			        </div>
	    	<?php } ?>

	      </div>
	    </div>
	  </section>
<?php } */?>


<?php /*
	$enterprise_software = (get_field('enterprise_software') ? get_field('enterprise_software') : '' ); 
	if($enterprise_software){

?>
	  <section class="media-slider-content-block section-padding img-right">
	    <div class="container">
	      <div class="inner">
	        <div class="img-block">
	          
	          	<?php 

		          	$slider = (($enterprise_software['slider']) ? $enterprise_software['slider'] : '' ); 
		          	if($slider){

	          	?>
			          <div id="img-slider2" class="img-slider owl-carousel">
			          <?php
			          		foreach ( $slider as $slide ) {
			          			$slideImage 			= ($slide['image']) ? $slide['image'] : '';
			          			$slidelogo_over_image 	= ($slide['logo_over_image']) ? $slide['logo_over_image'] : '';
			          			$slidetext_over_image 	= ($slide['text_over_image']) ? $slide['text_over_image'] : '';
			          	?>
			          		<div class="item bg-cover" style="background: url('<?php echo $slideImage; ?>');">
			          			<?php if($slidelogo_over_image){ ?>
						              <div class="slide-logo">
						                <img src="<?php echo $slidelogo_over_image; ?>" alt="">
						              </div>
						        <?php } 
							        if( $slidetext_over_image ){
							      		echo '<h4>'.$slidetext_over_image.'</h4>';
							        } 
							    ?>				              
				            </div>
			          	<?php
			          		}
			           ?>			            

			          </div>
		       

		          <div class="cu-progress-bar">
		            <div id="counter1"></div>
		          </div>
	           <?php } ?>

	        </div>
	        <?php 
		        $content_title 		= ($enterprise_software['content_title'] ? $enterprise_software['content_title'] : '');
		        $detailed_content 	= ($enterprise_software['detailed_content'] ? $enterprise_software['detailed_content'] : '');

	        	if( ($content_title) || ($detailed_content) ) { ?>

			        <div class="content-block">
			        	<?php if($content_title): ?>
				            <div class="section-title">
				              <h2><?php echo $content_title; ?> </h2>
				            </div>
			        	<?php endif;
			        		  if($detailed_content): ?>
					            <div class="text">
					                <?php echo $detailed_content; ?>
					            </div>
					    <?php endif; ?>
			        </div>
	    	<?php } ?>

	      </div>
	    </div>
	  </section>
<?php } */ ?>
  

<?php 
	$digital_payment_sliders = (get_field('digital_payment_slider') ? get_field('digital_payment_slider') : '' ); 
	if( $digital_payment_sliders ) {
		//p($digital_payment_sliders);

?>
<section class="fintech-solutions-block top-cross">
    <div class="container">
    	
    	<?php if($digital_payment_sliders['section_title'] || $digital_payment_sliders['section_subtext'] ){ ?>
	        <div class="section-title text-center">
	        	
	        	<?php if($digital_payment_sliders['section_title']): 
	        			$dTitle = $digital_payment_sliders['section_title'];
	        			echo '<h2>'.$dTitle.'</h2>';
	          		  endif; 
	          	
	          		if($digital_payment_sliders['section_subtext']): 
	        			$dsubText = $digital_payment_sliders['section_subtext'];
	        			echo '<p>'.$dsubText.'</p>';
	          		  endif; 
	          	?>
	        </div>
	    <?php } ?>

    </div>

   <?php if( (isset($digital_payment_sliders['slider']) && (!empty($digital_payment_sliders['slider'])) ) ){ 

   		$dSlider = $digital_payment_sliders['slider'];

   	?>
    <div class="content-row">  

      <div class="service-thumb-img">

      	<?php $i =1; foreach ( $dSlider as $slideImg ) { 
      		$class = (($i==1) ? 'class="active"' : '');
      	?>
	        <i>
	          <img src="<?php echo $slideImg['image']; ?>" <?php echo $class; ?> data-item="<?php echo $i; ?>">
	        </i>
        <?php $i++; } ?>
      </div>

      <div id="work-class1" class="solution-slider owl-carousel">
        
      	<?php $j =1; foreach ( $dSlider as $slideContent ) { ?>
	        
	        <div class="item" data-item="<?php echo $j; ?>">
	        	
	        	<?php if( $slideContent['icon'] ) : ?>
			          <div class="icon">
			            <img src="<?php echo $slideContent['icon']; ?>" alt="">
			          </div>
			    <?php endif; ?>

			    <?php 

			    	if( $slideContent['title'] ) : 
	          			echo "<h3>".$slideContent['title']."</h3>";
	          		endif;

	          		if( $slideContent['title'] ) : 
	          			echo "<p>".$slideContent['content']."</p>";
	          		endif;
	          	?>

	          	<?php if( ( isset($slideContent['button'])) && ( !empty($slideContent['button']) ) ){ 

	          			$button 	= $slideContent['button'];
	          			$url 		= (($button['url']) ? $button['url'] : '#' );
	          			$target 	= (($button['target']) ? 'target="_blank"' : '' );

	          	?>
			          <a href="<?php echo $url; ?>" class="read-more" <?php echo $target; ?>>
			            <?php echo (( $button['title'] ) ? $button['title'] : 'Read more' ); ?>
			            <svg xmlns="http://www.w3.org/2000/svg" width="13.828" height="9.338" viewBox="0 0 13.828 9.338">
			              <path id="Path_3431" data-name="Path 3431" d="M-98.043.885h12.05L-89.54-2.663l.657-.657,4.669,4.669-4.669,4.669-.657-.657,3.548-3.548h-12.05Z" transform="translate(98.043 3.319)" fill="#f37020"/>
			            </svg>
			          </a>

			    <?php } ?>
	        </div>

	    <?php $j++; } ?>

      </div>
    </div>
   <?php } ?>

  </section>

<?php } ?>



<?php 
    $args = array( 'post_type' => 'post', 'posts_per_page' => '4' ); 

 	
 		$corporate_action_title 	= ( get_field('corporate_action_title') ? get_field('corporate_action_title') : '' );
 		$corporate_action_slider 	= ( get_field('corporate_action_slider') ? get_field('corporate_action_slider') : '' );

 	?>


 		<section class="corporate-block section-padding">
		    <div class="container">

		    	<?php if($corporate_action_title) : ?>
			        <div class="section-title text-center">
			          <h2><?php echo $corporate_action_title; ?></h2>
			        </div>
			    <?php endif; ?>

		        <div class="row">
		          <div class="col-md-6">
		            <?php if( $corporate_action_slider ){ ?>
		            
			            <div class="img-block">
			              <div class="award-slider owl-carousel">
			                <?php foreach ($corporate_action_slider as $as) { 
			                	$aImage = ( ($as['image']) ? $as['image'] : '' );
			                	$aTag 	= (($as['tag_name']) ? $as['tag_name'] : '' );
			                	$aTitle = (($as['title']) ? $as['title'] : '');

			                ?>
			                	<div class="item bg-cover" style="background: url('<?php echo $aImage; ?>');">
				                	
				                	<?php if($aTag && $aTitle) { ?>
						                  <div class="content">
						                    <h4><?php echo $aTag; ?></h4>
						                    <h3><?php echo $aTitle; ?></h3>
						                  </div>
						            <?php } ?>

				                </div>
			                <?php } ?>

			              </div>
			            </div>
			        <?php } ?>

		          </div>

		          <div class="col-md-6">
		          	<?php 

		          		$the_query = new WP_Query( $args ); 
 						if ( $the_query->have_posts() ) { 
 					?>

			            <div class="listing">

			              	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					              <div class="post-grid-col">
					              	<?php 
					              		
					              		$news_source 	= 'News';
					              		$news_link 		= '#';

					              		if(get_field('news_source',get_the_ID())) {
					              			$news_source = ( get_field('news_source',get_the_ID()) ? get_field('news_source',get_the_ID()) : '#' );
					              		}

					              		if(get_field('news_link',get_the_ID())) {
					              			$news_link = get_field('news_link',get_the_ID());
					              		}

					              	?>
					                <a href="<?php echo $news_link; ?>" style="height: 308px;" target="_blank">
					                  <span class="date"><?php echo $news_source; ?> - <?php echo get_the_date('d M, Y'); ?></span>
					                  <h3><?php echo get_the_title(); ?></h3>
					                  <span class="read-more">
					                    Read More
					                    <svg xmlns="http://www.w3.org/2000/svg" width="13.828" height="9.338" viewBox="0 0 13.828 9.338">
					                      <path id="Path_3431" data-name="Path 3431" d="M-98.043.885h12.05L-89.54-2.663l.657-.657,4.669,4.669-4.669,4.669-.657-.657,3.548-3.548h-12.05Z" transform="translate(98.043 3.319)" fill="#f37020"></path>
					                    </svg>
					                  </span>
					                </a>
					              </div>
			              	<?php endwhile; 
								wp_reset_postdata(); 
							?>

			            </div>
		            <?php }  ?>
		          </div>
		        </div>
		    </div>
		  </section>



	 <?php /* <section class="news-list-block top-cross bottom-cross">
	    <div class="container">
	        <div class="section-title text-center">
	          <h2><?php echo get_field('new_section_title'); ?></h2>
	        </div>

	        <div class="listing row">
	          <?php $i= 1; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	          		
	          <?php 
	          	if( $i < 3 ) { 

	          	if( $i==1 ) {
	          		?>
		          
		          <div class="col-md-8 list-view-listing">
		        <?php } ?>
		        	<div class="post-list-row">
		                <div class="post-col">
		                	<?php if (has_post_thumbnail( $post->ID ) ): ?>
							  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-thumb' ); ?>
							  <div class="img bg-cover" style="background: url('<?php echo $image[0]; ?>');"></div>
							<?php endif; ?>
		                  
		                  <div class="content">
		                    
		                    <?php if(get_field('news_source',get_the_ID())) {
		                    
			                    echo '<div class="post-meta">';		                    	
			                      echo '<span class="date">';
			                      	echo get_field('news_source',get_the_ID());
			                      echo '</span>';
			                    echo '</div>';
		                		}
		                    ?>
		                    <h3><?php echo get_the_title(); ?></h3>

		                    <?php if(get_field('news_link',get_the_ID())) {
		                    	$newLink 	= get_field("news_link",get_the_ID());
		                    	echo '<a href="'.$newLink.'" class="read-more" target="_blank">';
		                    	echo '<span>Read More</span>';
		                    	echo '<svg xmlns="http://www.w3.org/2000/svg" width="13.828" height="9.338" viewBox="0 0 13.828 9.338">
			                          <path id="Path_3431" data-name="Path 3431" d="M-98.043.885h12.05L-89.54-2.663l.657-.657,4.669,4.669-4.669,4.669-.657-.657,3.548-3.548h-12.05Z" transform="translate(98.043 3.319)" fill="#f37020"/>
			                        </svg>
			                    </a>';
		                    }?>
		                    
		                  </div>

		                </div>
		            </div>
	         
	      		<?php  if( $i==2 ) { ?>
	      			</div>
			<?php } } ?>
		         
		        <?php  	if( $i == 3 ) {

		          ?>
		           <div class="post-list-row">
			          <div class="col-md-4 grid-view-listing">
			            <div class="post-list-row">
			                <div class="post-col">
			                	<?php if (has_post_thumbnail( $post->ID ) ): ?>
								  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								  <div class="img bg-cover" style="background: url('<?php echo $image[0]; ?>');"></div>
								<?php endif; ?>

			                  <div class="content">
			                    <?php if(get_field('news_source',get_the_ID())) {
		                    
				                    echo '<div class="post-meta">';		                    	
				                      echo '<span class="date">';
				                      	echo get_field('news_source',get_the_ID());
				                      echo '</span>';
				                    echo '</div>';
			                		}
			                    ?>
			                    <h3><?php echo get_the_title(); ?></h3>
			                   <?php if(get_field('news_link',get_the_ID())) {
			                    	$newLink 	= get_field("news_link",get_the_ID());
			                    	echo '<a href="'.$newLink.'" class="read-more" target="_blank">';
			                    	echo '<span>Read More</span>';
			                    	echo '<svg xmlns="http://www.w3.org/2000/svg" width="13.828" height="9.338" viewBox="0 0 13.828 9.338">
				                          <path id="Path_3431" data-name="Path 3431" d="M-98.043.885h12.05L-89.54-2.663l.657-.657,4.669,4.669-4.669,4.669-.657-.657,3.548-3.548h-12.05Z" transform="translate(98.043 3.319)" fill="#f37020"/>
				                        </svg>
				                    </a>';
			                    }?>
			                  </div>
			                </div>
			              </div>
			          </div>
			      </div>
		          <?php } $i++; endwhile; 
						wp_reset_postdata();
				?>

	        </div>
	    </div>
	  </section>

<?php } */ ?>

<?php 

	$why_we =  (get_field('why_we') ? get_field('why_we') : ''); 
	if($why_we){
		$why_weTitle = (get_field('why_we_title')? get_field('why_we_title') : '');
?>
  <section class="why-we-block section-padding">
    <div class="container">
    	
    	<?php if( $why_weTitle ) : ?>
	        <div class="section-title text-center">
	          <h2><?php echo $why_weTitle; ?></h2>
	        </div>
    	<?php endif; ?>

        <div class="listing">
        	<?php foreach ($why_we as $f) { ?>
        		
          <div class="text-col">
            <div class="inside">
              <h3><?php echo $f['title']; ?></h3>
            </div>
          </div>
         <?php } ?>

        </div>
    </div>
  </section>
<?php } ?>

<?php get_footer(); ?>