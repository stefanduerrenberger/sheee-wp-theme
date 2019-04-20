<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sheee2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="footer-col1">
			<?php //if ( is_active_sidebar( 'footer_1' ) ) : ?>
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer_1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php //endif; ?>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-3',
				'menu_id'        => 'footer-menu-left',
			) );
			?>
		</div>

		<div class="footer-col2">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-4',
				'menu_id'        => 'footer-menu-right',
			) );
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
