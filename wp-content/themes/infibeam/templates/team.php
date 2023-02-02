<?php
/*
* Template Name: Team
*/
?>
    
<?php get_header(); ?>
	<section class="team-listing-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        	<?php if(get_field('team_title')): ?>
	          <div class="title">
	            <h2><?php echo get_field('team_title'); ?></h2>
	          </div>
	        <?php endif; ?>
        </div>
        <div class="col-md-8">
          
          <div class="listing">
            <?php 
            	$members = get_field('members');

            	$i = 1;
                foreach ($members as $m) { ?>
                
		            <div class="team-col text-center">
		              <a href="javascript:void(0);" data-toggle="modal" data-target="#teamModal_<?php echo $i; ?>">
		              	
		              	<?php if($m['member_image']): ?>
			                <div class="img">
			                  	<img src="<?php echo $m['member_image']; ?>" alt="">
			                </div>
		                <?php endif; ?>

		                <?php if($m['member_name']): ?>
		                	<h3><?php echo $m['member_name']; ?></h3>
						<?php endif; ?>

						<?php if($m['member_designation']): ?>
		                	<p><?php echo $m['member_designation']; ?></p>
		                <?php endif; ?>

		              </a>
		            </div>

		        <?php $i++;  }
            	?>

          </div>

        </div>
      </div>
    </div>
  </section>

<!-- Modal -->
<?php 
	$aMembers 	= get_field('members');
	
	$i = 1;
    foreach ($aMembers as $m) { 
    	$image = $m['member_image'];
    	?>

	  <div id="teamModal_<?php echo $i; ?>" class="team-modal modal fade" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-body">
	          <button type="button" class="btn btn-default close-btn" data-dismiss="modal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/close-icon.png" alt=""></button>
	          <div class="top-row">
	            <div class="profile bg-cover" style="background: url('<?php echo $image; ?>')"></div>
	            <div class="detail">
	              <h3><?php echo $m['member_name']; ?></h3>
	              <p><?php echo $m['member_designation']; ?></p>
	              
	              <?php
	              	$social 	= ((isset($m['social_appearance'])) ? $m['social_appearance'] : '');
	              	
	              	if(!empty($social)){
	              		echo '<ul class="social-list">';
		              		foreach ($social as $s) {
		              			$socialIcon = (( $s['icon']) ?  $s['icon'] : '');
		              			$socialLink =  $s['link'];          			
		              			if( $socialIcon && $socialLink ):
		              				echo '<li><a href="'.$socialLink.'" target="_blank">'.$socialIcon.'</a></li>';
		              			endif;
		              		}
              			echo '</ul>';  		
	              	}
	               ?>

	            </div>
	          </div>
	          <div class="content">
	           		<?php echo $m['detail_info']; ?>
	          </div>
	        </div>
	      </div>

	    </div>
	  </div>
 <?php $i++;  }
 ?>

<?php get_footer(); ?>