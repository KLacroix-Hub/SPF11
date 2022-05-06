<?php
/*
Template Name: Contact
*/

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
             <div class="container-contact">
             <h1><?php the_title();?></h1>
                
                
                <div class="container-contact__form">
                        
                        <?php echo do_shortcode('[contact-form-7 id="122" title="contact_page"]'); ?>
                </div>

             </div>
                
        <?php endwhile;

        endif; ?>

<?php

get_footer();

?>