<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infibeam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- CSS Stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
	<?php wp_head(); ?>
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-56281617-4', 'auto');

        
        ga('send', 'pageview');
      </script>
      <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "translation missing: en, $t$website, schema, name",
        "url": "http://www.ia.ooo",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "http://www.ia.ooo/search?q={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      }
    </script>
    
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="site-header">
		<?php if(get_field('top_content','options')) : ?>
		    <div class="top-news-line">
		      <div class="container">
		        <p><?php echo get_field('top_content','options'); ?></p>
		      </div>
		    </div>
		<?php endif; ?>

	    <div class="main-head">
	      <div class="container">
	        <div class="logo">
	          <a href="<?php echo site_url(); ?>">
	            <img src="<?php echo get_field('logo','options') ?>" alt="Infibeam Avenues">
	          </a>
	        </div>
	        <div class="main-menu">
	        	<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
	        </div>
	      </div>
	    </div>
	 </header>