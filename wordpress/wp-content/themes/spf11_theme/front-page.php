<?php 

get_header();?>

    <div class="container-main">
        <div class="container__hero-banner">
            <div class="container__hero-banner__black"></div>

            <?php if( get_field('home_banner') ): ?>
                <img src="<?php the_field('home_banner'); ?>" />
            <?php else:?>
              <div class="container__hero-banner__noimg"></div>  
        
            <?php endif; ?>

            <div class="container__hero-banner__center">
                <?php if( get_field('home_banner-txt') ): ?>
                    <div class="container__hero-banner__center-txt"><?php the_field('home_banner-txt'); ?></div>
                <?php else:?>
                    <div class="container__hero-banner__center-notxt">XXX</div>  
            
                <?php endif; ?>
    
                <a class="container__hero-banner__center-link" href="/boutique">Découvrir nos produits</a>
            </div>

        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="container-category">
            <h1 class="container-category__title">Nos catégories</h1>
            <a href="" class="container-category__link">Voir toutes les catégories</a>
            <div class="container-category__products">
                <?php echo do_shortcode('[product_categories limit="4" orderby="name" order="ASC]'); ?>
            </div>
        </div>


	    <?php endwhile;

        endif; ?>
    </div>

<?php get_footer(); ?>