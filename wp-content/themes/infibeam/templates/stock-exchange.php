<?php
/*
* Template Name: Stock exchange
*/
?>
    
<?php get_header(); ?>

<?php 
	echo'<section class="section-padding stock-page">
	    <div class="container">';
	    
	    if(get_field('page_title')) :
		      echo '<div class="section-title text-center">
		        <h2>'.get_field("page_title").'</h2>
		      </div>';
		 endif;

		if((get_field('stock_info_title')) || get_field('stock_info_subtext') ) {
		     echo '<div class="stock-info">';
		     
		     if(get_field('stock_info_title')):
		        echo '<h4>'.get_field("stock_info_title").'</h4>';
		      endif;

		      if(get_field('stock_info_subtext')):
		        echo '<p>'.get_field("stock_info_subtext").'</p>';
		    	endif;
		      echo '</div>';
	    }


	     echo '<div class="stock-list">
	        <div class="row">
	          <div class="col-sm-6">
	            <div class="stock-box">';
	            if(get_field('bse_limited_tab_title')):
	                echo '<h4>'.get_field("bse_limited_tab_title").'</h4>';
	            endif;

	            if(get_field('bse_limited_content')):
	                echo get_field('bse_limited_content');
				endif;

	            echo '</div>
	          </div>
	          <div class="col-sm-6">
	            <div class="stock-box">';

	            if(get_field('nation_stock_exchange_title')):
	                echo '<h4>'.get_field("nation_stock_exchange_title").'</h4>';
	            endif;

	            if(get_field('nation_stock_exchange_title')):
	                echo get_field("nation_stock_exchange_content");
				endif;

	            echo '</div>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>';
?>

<?php get_footer(); ?>