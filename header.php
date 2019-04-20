<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sheee2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<style>



</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sheee2' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="topbar-left"></div>
		<div class="topbar-right"></div>
		<div class="toplogo">
			<a href="/" class="logo-link"><img src="/wp-content/themes/sheee2/img/sheee-logo-93b.png" id="sheee-logo"></a>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<a class="menu-toggle" id="toggle"><span></span></a>
			<div class="menu-container">
				<div class="menu-left">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu-left',
						) );
						?>
				</div>
				<div class="menu-right">
					
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'primary-menu-right',
						) );
						?>
					
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
