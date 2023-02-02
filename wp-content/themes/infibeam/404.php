<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package infibeam
 */

get_header();

?>
	<section class="error-page-main section-padding">
	    <div class="container">
	      <div class="text-block text-center">
	        <div class="img">
	          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/404-img.svg" alt="">
	        </div>
	        <div class="section-title text-center">
	          <h2>Not found error</h2>
	        </div>
	        <p>The page you are looking for couldn’t be found. It looks like you may have taken a wrong turn or we might have switched direction.</p>
	        <a href="<?php echo get_site_url(); ?>">Go To Homepage</a>
	      </div>
	    </div>
	  </section>

<?php 
get_footer();
?>