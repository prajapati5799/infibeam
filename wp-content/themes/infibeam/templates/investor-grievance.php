<?php
/*
* Template Name: Investor Grievance
*/

get_header();

    echo '<section class="section-padding investor-page">';
        echo '<div class="container">';
            
            if( get_field('page_title') ) :
                echo '<div class="section-title">';
                    echo '<h2>' . get_field('page_title') . '</h2>';
                echo '</div>';
            endif;

            if( get_field('page_title') ) :
                echo '<div class="stock-info">';
                    echo get_field('content');
                echo '</div>';
            endif;

            if( have_rows('compliance_officer_section') ):
                echo '<div class="officer-info">';
                    
                    // Loop through rows.
                    while( have_rows('compliance_officer_section') ) : the_row();

                        echo '<div class="row">';
                            echo '<div class="col-sm-6">';
                                echo '<div class="officer-profile">';
                                    
                                    if( get_sub_field('officer_image_border') ) :
                                        echo '<div class="border"><img src="' . get_sub_field('officer_image_border') . '" alt=""></div>';
                                    endif;

                                    if( get_sub_field('officer_image') ) :
                                        echo '<div class="profile-img">';
                                            echo '<img src="' . get_sub_field('officer_image') . '" alt="">';
                                        echo '</div>';
                                    endif;
                                    
                                    echo '<div class="profile-text">';
                                        
                                        if( get_sub_field('officer_name') ) :
                                            echo '<div class="name">' . get_sub_field('officer_name') . '</div>';
                                        endif;

                                        if( get_sub_field('officer_position') ) :
                                            echo '<div class="post">' . get_sub_field('officer_position') . '</div>';
                                        endif;

                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="col-sm-6">';
                                
                                if( get_sub_field('officer_title') ) :
                                    echo '<div class="section-title">';
                                        echo '<h2>' . get_sub_field('officer_title') . '</h2>';
                                    echo '</div>';
                                endif;

                                echo '<div class="officer-address">';
                                    if( get_sub_field('officer_company') ) :
                                        echo '<h4>' . get_sub_field('officer_company') . '</h4>';
                                    endif;

                                    if( get_sub_field('officer_address') ) :
                                        echo '<div class="address-slider add"><i class="fa fa-map-marker"></i>' . get_sub_field('officer_address') . '</div>';
                                    endif;

                                    if( get_sub_field('officer_contact_number') ) :
                                        echo '<div class="address-slider"><i class="fa fa-phone"></i><a href="tel:' . get_sub_field('officer_contact_number') . '">' . get_sub_field('officer_contact_number') . '</a></div>';
                                    endif;

                                    if( get_sub_field('officer_email_address') ) :
                                        echo '<div class="address-slider"><i class="fa fa-envelope"></i><a href="mailto:' . get_sub_field('officer_email_address') . '">' . get_sub_field('officer_email_address') . '</a></div>';
                                    endif;

                                echo '</div>';

                            echo '</div>';
                        echo '</div>';

                    // End loop.
                    endwhile;

                echo '</div>';
            endif;

            if( have_rows('register_and_transfer_section') ):
                
                // Loop through rows.
                while( have_rows('register_and_transfer_section') ) : the_row();

                    echo '<div class="office-list">';
                        
                        if( get_sub_field('section_title') ) :
                            echo '<div class="section-title text-center">';
                                echo '<h2>' . get_sub_field('section_title') . '</h2>';
                            echo '</div>';
                        endif;

                        if( have_rows('register_and_transfer_details') ):

                            echo '<div class="row">';

                                // Loop through rows.
                                while( have_rows('register_and_transfer_details') ) : the_row();
                                    
                                    echo '<div class="col-sm-6">';

                                        echo '<div class="officer-address"> ';
                                            echo '<div class="city">';
                                                
                                                echo '<div class="img"></div>';
                                                echo '<h4></h4>';
                                                echo '<p></p>';

                                            echo '</div>';
                                        echo '</div>';
                                        
                                        echo '<div class="officer-address"> ';

                                            if( get_sub_field('company_name') ) :
                                                echo '<h4>' . get_sub_field('company_name') . '</h4>';
                                            endif;

                                            if( get_sub_field('address') ) :
                                                echo '<div class="address-slider add"><i class="fa fa-map-marker"></i>' . get_sub_field('address') . '</div>';
                                            endif;

                                            if( have_rows('telephones') ):

                                                echo '<div class="address-slider"><i class="fa fa-phone"></i>Tel:';
                                                    while( have_rows('telephones') ) : the_row();
                                                        if( get_sub_field('telephone_number') ) :
                                                            echo '<a href="tel:' . get_sub_field('telephone_link') . '">' . get_sub_field('telephone_number') . '</a>';
                                                        endif;
                                                    endwhile;
                                                echo '</div>';

                                            endif;

                                            if( get_sub_field('fax') ) :
                                                echo '<div class="address-slider"><i class="fa fa-fax"></i>Fax: <a href="javascript:void(0);">' . get_sub_field('fax') . '</a></div>';
                                            endif;

                                            if( get_sub_field('email_address') ) :
                                                echo '<div class="address-slider"><i class="fa fa-envelope"></i>E-mail: <a href="mailto:' . get_sub_field('email_address') . '">' . get_sub_field('email_address') . '</a></div>';
                                            endif;

                                            if( get_sub_field('website') ) :
                                                echo '<div class="address-slider"><i class="fa fa-globe"></i><a href="' . get_sub_field('website') . '">' . get_sub_field('website') . '</a></div>';
                                            endif;

                                        echo '</div>';
                                    echo '</div>';

                                // End loop.
                                endwhile;

                            echo '</div>';

                        endif;

                    echo '</div>';

                // End loop.
                endwhile;

            endif;

        echo '</div>';
    echo '</section>';

get_footer();
?>