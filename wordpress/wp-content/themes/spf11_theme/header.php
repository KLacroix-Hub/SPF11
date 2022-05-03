<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">

	<div class="container-menu__mobile-open">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'mobile-menu'
		) );
		
		?>

		<div class="container-menu__mobile-open__shopping">
			<a href="/mon-compte" class="container-menu__mobile-open__shopping-account">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/profil-mobile.svg" alt="">
			</a>
			<a href="/panier" class="container-menu__mobile-open__shopping-cart">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/Cart-mobile.svg" alt="">
			</a>
		</div>
	</div>
	<div class="container-menu__mobile">
		<img class="container-menu__mobile-burger" src="<?php echo get_template_directory_uri();?>/assets/img/burger.svg" alt="">
	</div>

	<a class="site-header__logo" href="<?php echo get_home_url('/'); ?>">
		<img class='site-header__logo-img' src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="SPF11...ART">
	</a>

	<div class="container-menu">

		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>

		<div class="container-menu__shopping">
			<a href="/mon-compte" class="container-menu__shopping-account">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/profil.svg" alt="">
			</a>
			<a href="/panier" class="container-menu__shopping-cart">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/Cart.svg" alt="">
			</a>
		</div>

	</div>
</header>

<main id="content" class="site-content">
	
