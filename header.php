<?php
$themeOptions = get_option( 'sheee_theme_options' );
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
        <nav id="site-navigation" class="main-navigation">
            <a class="menu-toggle" id="toggle"><span></span></a>
            <div class="menu-container">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
            </div>
        </nav><!-- #site-navigation -->
        <?php if ($themeOptions['color_scheme'] == 'sarahhuber'): ?>
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sarahhuber/logo-sarah-huber.png" alt="Logo Sarah Huber" id="sarahhuberLogo"></a>
        <?php else: ?>
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sheee-Logo-pink.png" alt="Sheee Logo" id="sheeeLogo"></a>
        <?php endif; ?>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
