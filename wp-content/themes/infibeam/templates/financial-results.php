<?php
/*
* Template Name: Financial Results
*/

get_header();


$quarterly_results_section = get_field('quarterly_results_section');	
$annual_reports_section = get_field( 'annual_reports_section' );

echo '<section class="financial-results-block section-padding">';
    echo '<div class="container">';
        
        if( get_field('page_title') ) :
            echo '<div class="section-title text-center">';
                echo '<h2>' . get_field('page_title') . '</h2>';
            echo '</div>';
        endif;
        
        echo '<ul class="nav nav-tabs">';
            
            if( have_rows('quarterly_results_section') ):
                while( have_rows('quarterly_results_section') ): the_row();

                    if( get_sub_field('quarterly_title') ) :
                        echo '<li class="active">';
                            echo '<a data-toggle="tab" href="#quarterlyresults">' . get_sub_field('quarterly_title') . '</a>';
                        echo '</li>';
                    endif;

                endwhile;
            endif;

            if( have_rows('annual_reports_section') ):
                while( have_rows('annual_reports_section') ): the_row();

                    if( get_sub_field('annual_reports_title') ) :
                        echo '<li>';
                            echo '<a data-toggle="tab" href="#annualresults">' . get_sub_field('annual_reports_title') . '</a>';
                        echo '</li>';
                    endif;

                endwhile;
            endif;

        echo '</ul>';

        echo '<div class="tab-content">';

            if( $quarterly_results_section ):

                echo '<div id="quarterlyresults" class="tab-pane fade in active">';
                    echo '<div class="results-list">';

                        echo '<div class="custom-accordion">';
                        
                            while( have_rows('quarterly_results_section') ): the_row();

                                $repeater = $quarterly_results_section['quarterly_results']; 
                                if( $repeater ): 
                
                                    // Loop through rows.
                                    //foreach( array_reverse( $repeater ) as $i => $row ):
                                      foreach( $repeater as $i => $row ):  
                                        echo '<div class="panel">';
                                            
                                            if( $row['title'] ) :
                                                echo '<div class="heading plus-icon">' . $row['title'] . '</div>';
                                            endif;

                                            if( $row['quarters'] ):

                                                echo '<div class="content">';
                                                    echo '<div class="panel-body">';
                                                        echo '<div class="row dt-row">';
                                                        // Loop through rows.
                                                        foreach( $row['quarters'] as $j => $quarters ):

                                                            echo '<div class="col-sm-6 col-xs-12">';
                                                                echo '<div class="text-block">';
                                                                    
                                                                    if( $quarters['quarter_title'] ) :
                                                                        echo '<h4>' . $quarters['quarter_title'] . '</h4>';
                                                                    endif;

                                                                    if( $quarters['quarter_documents'] ):

                                                                        echo '<ul>';

                                                                        $target = '';

                                                                        foreach( array_reverse( $quarters['quarter_documents'] ) as $a => $quarter_documents ):

                                                                                $target = '';
                                                                                if( $quarter_documents['open_in_new_tab'] == "Yes" ){
                                                                                    $target = 'target="_blank"';
                                                                                }

                                                                                if( $quarter_documents['title'] && $quarter_documents['mp3'] ) :
                                                                                    echo '<li class="sound_document"><a href="' . $quarter_documents['mp3'] . '" ' . $target . '>' . $quarter_documents['title'] . '</a></li>';
                                                                                endif;

                                                                                if( $quarter_documents['title'] && $quarter_documents['pdf'] ) :
                                                                                    echo '<li class="pdf_document"><a href="' . $quarter_documents['pdf'] . '" ' . $target . '>' . $quarter_documents['title'] . '</a></li>';
                                                                                endif;

                                                                        endforeach;
                                                                        echo '</ul>';
                                                                    endif;

                                                                echo '</div>';
                                                            echo '</div>';

                                                        endforeach;
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';
                                            endif;
                
                                        echo '</div>';
                                
                                    // End loop.
                                    endforeach;

                                endif;

                            endwhile;

                        echo '</div>';

                    echo '</div>';
                echo '</div>';
            endif;

            if( $annual_reports_section ):
                while( have_rows('annual_reports_section') ): the_row();
                    $annual_reports = $annual_reports_section['annual_reports'];     
                    //$annual_reports = get_field( 'annual_reports' );

                    if( $annual_reports ):

                        echo '<div id="annualresults" class="tab-pane fade">';
                            echo '<div class="report-list">';
                                echo '<div class="row">';

                                    foreach ( array_reverse( $annual_reports ) as $i => $row) :
                                    
                                        if( $row['title'] ) :

                                            $target = '';
                                            if( $row['open_in_new_tab'] == "Yes" ){
                                                $target = 'target="_blank"';
                                            }

                                            echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                                                echo '<div class="pdf-view">';
                                                    echo '<a href="' . $row['pdf'] . '" ' . $target . '>';
                                                        echo '<div class="img">';
                                                            echo '<img src="' . $row['image'] . '" alt="">';
                                                        echo '</div>';
                                                        echo '<h3>' . $row['title'] . '</h3>';
                                                    echo '</a>';
                                                echo '</div>';
                                            echo '</div>';
                                        endif;

                                    endforeach;


                                    /* echo '<a href="'.get_field('subpdf_sub').'" target="_blank" >SUB. CO.</a>'; */

$repeater = get_field('announcements_section');

   echo '<section class="announcements-list-block section-padding">';
        echo '<div class="container">';
            
          /* if( get_field('page_title') ) :
                echo '<div class="section-title text-center">';
                    echo '<h2>' . get_field('page_title') . '</h2>';
                echo '</div>';
            endif; */
            
            echo '<div class="listing">';

           /*  echo '<div class="section-title text-center">';
                    echo '<h2>' . "Subsideries Companies" . '</h2>';
                echo '</div>'; */

            if( $repeater ): 

                // Loop through rows.

                foreach( array_reverse( $repeater ) as $i => $row ):

                    if( $row['title'] && $row['link'] ) :

                        $target = '';
                        if( $row['open_in_new_tab'] == "Yes" ){
                            $target = 'target="_blank"';
                        }
                          
                        echo '<div class="ct-col">';
                            echo '<a href="' .  $row['link'] . '" ' . $target . '>' . $row['title'] . '</a>';
                        echo '</div>';
                    endif;
            
                    // End loop.
                endforeach;
            endif;
            
            echo '</div>';

        echo '</div>';
    echo '</section>';

                                echo '</div>';
                            echo '</div>';
                        echo '</div>';



                    endif;

                endwhile;
            endif;

        echo '</div>';

    echo '</div>';
echo '</section>';


get_footer();
?>



