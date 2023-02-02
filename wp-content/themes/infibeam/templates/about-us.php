<?php
/*
* Template Name: About Us
*/

get_header();


if( have_rows('corporate_section') ):
    while( have_rows('corporate_section') ) : the_row();
        echo '<section class="about-us-block bottom-cross">';
            echo '<div class="container">';
                echo '<div class="listing row">';
                    
                    echo '<div class="col-md-5">';
                        echo '<div class="img-block">';
                            
                            if(get_sub_field('big_image')):
                                echo '<div class="img">';
                                    echo '<img src="' . get_sub_field('big_image') .  '" alt="">';
                                echo '</div>';
                            endif;

                            if( have_rows('image_description') ):
                                echo '<div class="left-text">';

                                    while( have_rows('image_description') ) : the_row();
                                        if(get_sub_field('title') && get_sub_field('image')):    
                                            echo '<div class="round-block">';
                                                echo '<img src="' . get_sub_field('image') . '" alt="">';
                                                echo '<p>' . get_sub_field('title') . '</p>';
                                            echo '</div>';
                                        endif;
                                    endwhile;

                                echo '</div>';
                            endif;

                        echo '</div>';
                    echo '</div>';

                    echo '<div class="col-md-7">';
                        echo '<div class="text-block">';
                            
                            if(get_sub_field('main_title')):
                                echo '<div class="section-title">';
                                    echo '<h2>' . get_sub_field('main_title') . '</h2>';
                                echo '</div>';
                            endif;

                            if(get_sub_field('description')):
                                echo get_sub_field('description');
                            endif;

                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</section>';
    endwhile;
endif;
?>
<?php 

$refer_section = (get_field('refer_section') ? get_field('refer_section') : '');
if($refer_section){
    $refer_section_title = (get_field('refer_section_title') ? get_field('refer_section_title') : '');

?>
<div class="icon-boxBg no-bg">
      <div class="container">
        
        <?php if($refer_section_title): ?>
            <div class="section-title text-center">
              <h2><?php echo $refer_section_title; ?></h2>
            </div>
        <?php endif; ?>

        <div class="row">
          
          <?php foreach ( $refer_section as $rf ) { 
                $icon       = ($rf['icon'] ? $rf['icon'] : '');
                $name       = ($rf['name'] ? $rf['name'] : '');
                $content    = ($rf['content'] ? $rf['content'] : '');

            ?>

                  <div class="col-sm-6">
                    <div class="box-view" style="height: 236px;">
                        <?php if($icon): ?>
                            <div class="icon"><img src="<?php echo $icon; ?>" alt=""></div>
                        <?php endif; ?>

                        <?php if($name): ?>
                            <h4><?php echo $name; ?></h4>
                        <?php endif; ?>

                      <?php if($content): ?>
                        <p><?php echo $content; ?></p>
                      <?php endif; ?>

                    </div>
                  </div>

          <?php } ?>
         
        </div>
      </div>
    </div>
<?php }?>

<?php 
if( have_rows('grid_section') ):
    echo '<section class="our-mission-block top-cross bottom-cross">';
        echo '<div class="container">';
            echo '<div class="row">';
                    
                while( have_rows('grid_section') ) : the_row();
                    echo '<div class="col-md-6">';
                        echo '<div class="img-block bg-cover" style="background: url(' . get_sub_field('background_image') . ');">';
                            
                            if(get_sub_field('icon')):
                                echo '<div class="icon">';
                                    echo '<img src="' . get_sub_field('icon') . '" alt="">';
                                echo '</div>';
                            endif;

                            if(get_sub_field('title')):
                                echo '<h3>' . get_sub_field('title') . '</h3>';
                            endif;

                            if(get_sub_field('short_description')):
                                echo '<p>' . get_sub_field('short_description') . '</p>';
                            endif;

                        echo '</div>';
                    echo '</div>';

                endwhile;
                    
            echo '</div>';
        echo '</div>';
    echo '</section>';
endif;

if( have_rows('brand_section') ):
    while( have_rows('brand_section') ) : the_row();
        echo '<section class="trusted-brand-block">';
            echo '<div class="container">';
                
                if(get_sub_field('main_title')):
                    echo '<div class="section-title text-center">';
                        echo '<h2>' . get_sub_field('main_title') . '</h2>';
                    echo '</div>';
                endif;

                if( have_rows('brand_logos') ):
                    echo '<div class="listing owl-carousel">';
                        while( have_rows('brand_logos') ) : the_row();
                            if(get_sub_field('brand_logo')):
                                echo '<div class="item">';
                                    echo '<a href="'.get_sub_field('url').'" target="_blank">';
                                        echo '<img src="' . get_sub_field('brand_logo') . '" alt="">';
                                    echo '</a>';
                                echo '</div>';
                            endif;
                        endwhile;
                    echo '</div>';
                endif;

            echo '</div>';
        echo '</section>';
    endwhile;
endif;

if( have_rows('journey_section') ):
    while( have_rows('journey_section') ) : the_row();

        echo '<section class="growth-journey-block section-padding">';
            echo '<div class="container">';
                
                echo '<div class="section-title text-center">';
                    
                    if(get_sub_field('main_title')):
                        echo '<h2>' . get_sub_field('main_title') . '</h2>';
                    endif;

                    if(get_sub_field('sub_title')):
                        echo '<p>' . get_sub_field('sub_title') . '</p>';
                    endif;

                echo '</div>';

                echo '<div class="img text-center">';
                    
                    if(get_sub_field('descktop_image')):
                        echo '<div class="large-img">';
                            echo '<img src="' . get_sub_field('descktop_image') . '" alt="">';
                        echo '</div>';
                    endif;

                    if(get_sub_field('mobile_image')):
                        echo '<div class="small-img">';
                            echo '<img src="' . get_sub_field('mobile_image') . '" alt="">';
                        echo '</div>';
                    endif;

                echo '</div>';
                
            echo '</div>';
        echo '</section>';

    endwhile;
endif;

get_footer(); ?>