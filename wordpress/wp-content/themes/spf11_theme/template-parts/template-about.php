<?php
/*
Template Name: About
*/

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
             <div class="container-about">
             <h1><?php the_title();?></h1>
                
                
                <div class="container-content">
                        <div class="container-content__img"><img src="<?php echo the_field('about_img-prez'); ?>" alt="Image de présentation de SPF11...ART"></div>
                        <div class="container-content__txt"><?php the_content(); ?></div>

                </div>

             </div>
                
        <?php endwhile;

        endif; ?>

<?php

get_footer();

?>