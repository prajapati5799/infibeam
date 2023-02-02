<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infibeam
 */

?>
<footer class="site-footer">
    <div class="container">
      <div class="top-row">

        <div class="footer-col address">
        	<?php if(get_field('footer_address_widget_name','options')): ?>
          		<h3><?php echo get_field('footer_address_widget_name','options') ?></h3>
          	<?php endif; ?>
          	
          	<?php if(get_field('footer_address','options')): ?>
          		<address><?php echo get_field('footer_address','options') ?></address>
          	<?php endif; ?>

          <div class="info-block">
          	
          	<?php if(get_field('footer_phone','options')): ?>
            	<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('footer_phone','options') ?></div>
            <?php endif; ?>
          	
          	<?php if(get_field('footer_fax','options')): ?>
            	<div class="tel"><a href="tel:<?php echo get_field('footer_fax','options') ?>"><i class="fa fa-fax" aria-hidden="true"></i><?php echo get_field('footer_fax','options') ?></a></div>
            <?php endif; ?>
          	
          	<?php if(get_field('footer_e-mail','options')): ?>
            	<div class="mail"><a href="mailto:<?php echo get_field('footer_e-mail','options') ?>"><i class="fa fa-envelope-open-o" aria-hidden="true"></i><?php echo get_field('footer_e-mail','options') ?></a></div>
            <?php endif; ?>
          </div>
        </div>
        
        <div class="footer-col company-menu">
        	<?php if ( is_active_sidebar( 'company' ) ) : ?>
	            <?php  dynamic_sidebar('company');?>
	        <?php endif; ?>
        </div>

        <div class="footer-col businesses-menu">
          <?php if ( is_active_sidebar( 'business' ) ) : ?>
	            <?php  dynamic_sidebar('business');?>
	        <?php endif; ?>
        </div>
        <div class="footer-col investor-menu">
          <?php if ( is_active_sidebar( 'investor_relation' ) ) : ?>
	            <?php  dynamic_sidebar('investor_relation');?>
	        <?php endif; ?>
        </div>
        <div class="footer-col policies-menu">
          <?php if ( is_active_sidebar( 'policies' ) ) : ?>
	            <?php  dynamic_sidebar('policies');?>
	        <?php endif; ?>
        </div>
      </div>

<?php 
  
  $footer_left_text     = ( get_field('footer_left_text','option') ? get_field('footer_left_text','option') : '');
  $media_relation       = ( get_field('media_relation','option') ? get_field('media_relation','option') : '');
  $investor_relations   = ( get_field('investor_relations','option') ? get_field('investor_relations','option') : '');
  $footer_right_text    = ( get_field('footer_right_text','option') ? get_field('footer_right_text','option') : '');

?>

      <div class="middle-row">
      	
        <div class="middle-rowcontent">
	      	<?php if($footer_left_text) : ?>
            <div class="middle-col title">
  	      		<div class="middle-contentcol">
  	      			<h4><?php echo $footer_left_text; ?></h4>
  	      		</div>
  	      	</div>
          <?php endif; ?>

	      	<?php if( $media_relation ) { ?>
            <div class="middle-col media-relations">
  	      		<div class="middle-contentcol">
                
                <?php if($media_relation['title']) : 
  	      			        echo '<h6>'.$media_relation['title'].'</h6>';
                    endif; 
                ?>
  	      			<div class="media-col">
                  
                  <?php if($media_relation['person_image']) : ?>
  	      				   <div class="thumb">
                        <img src="<?php echo $media_relation['person_image']; ?>" title="<?php echo $media_relation['person_name']; ?>">
                      </div>
                  <?php endif; ?>

                  <?php 
                        if($media_relation['person_name']) :
  	      				         echo '<div class="name">'.$media_relation['person_name'].'</div>';
                        endif;
                  ?>

                  <?php if(($media_relation['person_phone']) || ($media_relation['person_email'])) { ?>
    	      				<ul>
                      
                      <?php if($media_relation['person_phone']) : ?>
    	      					      <li><i class="fa fa-phone"></i> <a href="tel:<?php echo $media_relation['person_phone']; ?>"><?php echo $media_relation['person_phone']; ?></a></li>
                      <?php endif; ?>

                      <?php if($media_relation['person_email']) : ?>
    	      					    <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $media_relation['person_email']; ?>"><?php echo $media_relation['person_email']; ?></a></li>
                      <?php endif; ?>

    	      				</ul>
                  <?php } ?>

  	      			</div>
  	      		</div>

  	      	</div>
          <?php } ?>
	      	

      <?php if( $investor_relations ) { ?>
          <div class="middle-col investor-relations">
	      		<div class="middle-contentcol">
                
                <?php if($investor_relations['title']) : 
                        echo '<h6>'.$investor_relations['title'].'</h6>';
                    endif; 
                ?>
                <div class="media-col">
                  
                  <?php if($investor_relations['person_image']) : ?>
                     <div class="thumb">
                        <img src="<?php echo $investor_relations['person_image']; ?>" title="<?php echo $investor_relations['person_name']; ?>">
                      </div>
                  <?php endif; ?>

                  <?php 
                        if($investor_relations['person_name']) :
                           echo '<div class="name">'.$investor_relations['person_name'].'</div>';
                        endif;
                  ?>

                  <?php if(($investor_relations['person_phone']) || ($investor_relations['person_email'])) { ?>
                    <ul>
                      
                      <?php if($investor_relations['person_phone']) : ?>
                            <li><i class="fa fa-phone"></i> <a href="tel:<?php echo $investor_relations['person_phone']; ?>"><?php echo $investor_relations['person_phone']; ?></a></li>
                      <?php endif; ?>

                      <?php if($investor_relations['person_email']) : ?>
                          <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $investor_relations['person_email']; ?>"><?php echo $investor_relations['person_email']; ?></a></li>
                      <?php endif; ?>

                    </ul>
                  <?php } ?>

                </div>
              </div>
	      	</div>
      <?php } ?>


          <?php if($footer_right_text) : ?>
  	      	<div class="middle-col content">
  	      		<div class="middle-contentcol">
  	      			<p><?php echo $footer_right_text; ?></p>
  	      		</div>
  	      	</div>
          <?php endif; ?>

      	</div>

      </div>

      <div class="bottom-row">
      	<?php if(get_field('footer_flags','options')){ 
              $flags = get_field('footer_flags','options');

          ?>
            <div class="link-group">
              <div class="conutry-list">
                <ul>
                  <?php foreach ($flags as $f) { 
                    $flagImage  = ($f['image'] ? $f['image'] : '');
                    $flagName   = ($f['name'] ? $f['name'] : '');
                  ?>                  
                    <li>
                      <img src="<?php echo $flagImage; ?>" alt="">
                      <span><?php echo $flagName; ?></span>
                    </li>
                  <?php } ?>

                </ul>
              </div>
            </div>
        <?php } ?>

		<?php
	          $footer_copyright = (get_field('footer_copyright', 'option') ? get_field('footer_copyright', 'option') : '');

	            $year = array(
	                'YEAR' => date("Y")
	            );
	            if($footer_copyright):
	          		echo '<div class="copyright">'.infi_replace_constants( $year, $footer_copyright ).'</div>';
	          	endif;
	    ?>

	    <?php
	          $social_appearance = get_field('social_appearance', 'option');
	          if( $social_appearance ):

	          ?>
        
	        <div class="social-links">	          
	          <ul>
	          	<?php 
	        		foreach ($social_appearance as $key => $value) {
	        			
	        			$icon 	= $value['social_icon'];
	        			$link 	= $value['link'];	        			

			            echo '<li><a href="'.$link.'" target="_blank">'.$icon.'</a></li>';
			        }
			    ?>
	          </ul>
	        </div>
        <?php endif; ?>
      </div>
    </div>
  </footer>

<?php wp_footer(); 

if ( is_singular( 'pdf' ) ) { ?>
  <script type="text/javascript">
    $("body").on("contextmenu",function(){
       return false;
    }); 
  </script>
<?php }

?>
<script type="text/javascript">
  
jQuery(function($) {
    
    $('li.mega-menu-item').on('open_panel', function() {
        $('html').addClass('megamenu-added');
    });

    $('li.mega-menu-item').on('close_panel', function() {
        $('html').removeClass('megamenu-added');
    });

    $('#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-item.mega-menu-item-has-children > a.mega-menu-link').attr('href','javascript:void(0);');

    
    
});
</script>
</body>
</html>