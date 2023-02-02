<?php
/*
* Template Name: News
*/
?>

<?php get_header(); ?>

<section class="financial-results-block section-padding">
	<div class="container">
		<?php if (get_field('page_title')) : ?>
			<div class="section-title text-center">
				<h2><?php echo get_field('page_title'); ?></h2>
			</div>
		<?php endif; ?>
		<?php
		$pressRelase 				= (get_field('press_release') ? get_field('press_release') : '');
		$statutoryNews 				= (get_field('statutory_news') ? get_field('statutory_news') : '');

		$press_release_tab_name 	= (get_field('press_release_tab_name') ? get_field('press_release_tab_name') : '');
		$media_coverage_tab_name 	= (get_field('media_coverage_tab_name') ? get_field('media_coverage_tab_name') : '');


		if ($press_release_tab_name || $media_coverage_tab_name || $press_release_tab_name) { ?>
			<ul class="nav nav-tabs">
				<?php if ($press_release_tab_name) :
					echo '<li class="active"><a data-toggle="tab" href="#' . str_replace(" ", "", strtolower($press_release_tab_name)) . '">' . $press_release_tab_name . '</a></li>';
				endif; ?>

				<?php if ($media_coverage_tab_name) :
					echo '<li><a data-toggle="tab" href="#' . str_replace(" ", "", strtolower($media_coverage_tab_name)) . '">' . $media_coverage_tab_name . '</a></li>';
				endif; ?>

			</ul>
		<?php } ?>



		<div class="tab-content">
			<?php
			$divID = '';
			if ($pressRelase) {

				$divID = (($press_release_tab_name) ? (str_replace(" ", "", strtolower($press_release_tab_name))) : '');
			?>
				<div id="<?php echo $divID; ?>" class="tab-pane fade in active">
					<div class="results-list">
						<div class="custom-accordion">

							<?php
							foreach (array_reverse($pressRelase) as $i => $row) : ?>

								<div class="panel">
									<?php if ($row['year_title']) : ?>
										<div class="heading"><?php echo $row['year_title']; ?></div>
									<?php endif; ?>

									<div class="content">
										<div class="panel-body">
											<div class="text-block">
												<?php
												if ($row['pdf']) {
													echo '<ul>';
													foreach (array_reverse($row['pdf']) as $j => $pdf) :

														$pdfFile 	= $pdf['pdf_file'];
														$pdfName 	= $pdf['pdf_name'];

														echo !empty($pdfFile) && !empty($pdfName) ? '<li><a href="' . $pdfFile . '" target="_blank">' . $pdfName . '</a></li>' : '';
													endforeach;
													echo '</ul>';
												}
												?>
											</div>
										</div>
									</div>
								</div>
							<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			<?php
			} ?>



			<?php
			$divID = '';
			if ($pressRelase) {

				$divID = (($media_coverage_tab_name) ? (str_replace(" ", "", strtolower($media_coverage_tab_name))) : '');
				$args = array('post_type' => 'post', 'posts_per_page' => -1);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) {
			?>
					<div id="<?php echo $divID; ?>" class="tab-pane fade">
						<div class="news-list">
							<div class="row">
								<div class="col-md-12 ml-auto">
									<div class="custom-title-drop">
										<form method="POST" action="">
										<select class="form-control btn-gradient" id="btn-mrelease">
											<!-- <option value="select option">select option</option> -->
											<option value="All">All</option>
											<?php
										$new_dates = $wpdb->get_row("SELECT post_date FROM {$wpdb->posts} WHERE post_status = 'publish' ORDER BY `wp_posts`.`post_date` DESC");
										$old_datwes = $oldest_post_id = $wpdb->get_row("SELECT post_date FROM {$wpdb->posts} WHERE post_status = 'publish' ORDER BY `wp_posts`.`post_date` ASC");
										
										$year = $new_dates->post_date;
										$new_dates_String = date('Y',strtotime($year));
										

										$year_o = $old_datwes->post_date;
										$oldDateString = date('Y',strtotime($year_o));
											
										for($i=$new_dates_String; $i>= $oldDateString; $i--)
											{
												?>
										<option id="dates_vari" value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php }	?>

										</select>
										</form>
										

									</div>

									<h3 id="title_year">All</h3>
								</div>
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

									<div class="col-md-12 project-tiles">
										<div class="news-box">
											<!-- <?php //if (has_post_thumbnail( $post->ID ) ): 
													?>
						  	<?php //$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
								?>
						  	<div class="img"><img src="<?php //echo $image[0]; 
															?>" alt=""></div>
							<?php //endif; 
							?> -->


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
													<?php /*
													if (get_field('news_link', get_the_ID())) {
														$newLink     = get_field("news_link", get_the_ID());
														echo '<a href="' . $newLink . '" class="read-more" target="_blank">';
														echo '<span>Read More</span>';
														echo '<svg xmlns="http://www.w3.org/2000/svg" width="13.828" height="9.338" viewBox="0 0 13.828 9.338">
                                              <path id="Path_3431" data-name="Path 3431" d="M-98.043.885h12.05L-89.54-2.663l.657-.657,4.669,4.669-4.669,4.669-.657-.657,3.548-3.548h-12.05Z" transform="translate(98.043 3.319)" fill="#f37020"/>
                                            </svg>
                                        </a>';
													} */?>


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
									</div>

								<?php endwhile;
								wp_reset_postdata();
								?>

							</div>
						</div>
					</div>
			<?php }
			} ?>

		</div>

	</div>
	<div id="ajax_result"></div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
	
	jQuery(document).ready(function(e) {


	jQuery('#btn-mrelease').change(function(e) {
		
			var text = jQuery('#btn-mrelease').val(); 

			var title = document.getElementById("title_year");

			jQuery(title).html(text);

			
});
	});
</script>