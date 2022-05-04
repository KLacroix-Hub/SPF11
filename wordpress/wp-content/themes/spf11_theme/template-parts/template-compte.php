<?php
/*
Template Name: Mon compte
*/

get_header(); ?>
<main id="account" class="site-account" role="main">

    <div class="site-account__header">
        <h1>MON COMPTE</h1>
    </div>

	<?php
    echo do_shortcode('[woocommerce_my_account]');

	?>

</main>

<?php get_footer();

?>

