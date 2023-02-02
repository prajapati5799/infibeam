<?php
/*
* Template Name: Load_more
*/
?>

<?php get_header(); ?>

<section class="financial-results-block section-padding">
    <div class="container">
        <div id="ajax-posts" class="row">
            <?php
            $postsPerPage = 5;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $postsPerPage,
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
            ?>

                <div class="col-md-12 project-tiles">

                    <div class="info">
                        <?php
                        if (get_field('news_source', get_the_ID())) {
                            echo '<div class="news-name">';
                            echo get_field('news_source', get_the_ID());
                            echo '</div>';
                        }

                        $newLink     = get_field("news_link", get_the_ID());
                        ?>

                        <div class="news-title"><a href="<?php echo $newLink; ?>" class="" target="_blank"><?php echo get_the_title(); ?> </a></div>
                        <div class="post-col">
                            <?php
                            the_time('M j, Y');
                            echo ' | ';

                            if (get_field('news_channel', get_the_ID())) {
                                echo get_field('news_channel', get_the_ID());
                            }
                            ?>
                        </div>
                    </div>
                </div>


            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div id="more_posts">Load More</div>

    </div>
    <!-- <div id="ajax_result"></div> -->
</section>
<?php get_footer(); ?>
<!-- <script type="text/javascript">
	
	jQuery(document).ready(function(e) {


	jQuery('#btn-mrelease').change(function(e) {
		
			var text = jQuery('#btn-mrelease').val(); 

			var title = document.getElementById("title_year");

			jQuery(title).html(text);

			
});
	});
</script> -->