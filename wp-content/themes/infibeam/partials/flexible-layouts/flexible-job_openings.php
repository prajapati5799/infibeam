<?php	
	
	$section_title  				= (get_sub_field('section_title') ? get_sub_field('section_title') : '');
	$section_subtext  			= (get_sub_field('section_subtext') ? get_sub_field('section_subtext') : '');
	$jobs  						      = (get_sub_field('jobs') ? get_sub_field('jobs') : '');
	

 ?>
<section class="job-openings-block section-padding top-cross bottom-cross">
    <div class="container">
      
      <div class="section-title text-center">
          <?php if($section_title) : 
                    echo '<h2>'.$section_title.'</h2>';
              endif;

              if($section_subtext) : 
                  echo '<p>'.$section_subtext.'</p>';
              endif;
          ?>
      </div>

    <?php if( $jobs ){ ?>
      <div class="custom-accordion">
        
        <?php foreach ($jobs as $job) { ?>
        
            <div class="panel">
              <div class="heading plus-icon">
                <?php 
                      if($job['designation']) :
                        echo '<div class="name">'.$job["designation"].'</div>';
                      endif;

                      if($job['experience']) :
                          echo '<div class="exp">Experience - '.$job["experience"].'</div>';
                      endif;

                      if($job['location']) :
                        echo '<div class="location">Location : '.$job["location"].'</div>';
                      endif;
                ?>


              </div>
              <div class="content" style="display: none;">
                <div class="desired-profile">
                  <?php 
                        if($job['details']) : 
                            echo $job['details'];
                        endif;
                  ?>                  
                </div>
              </div>
            </div>
        <?php } ?>
      
      
      </div>
    <?php } ?>

    </div>
  </section>