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
    <div class="footer-part1">
        <div class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
    </div>
    <div class="footer-part2">
        <div class="widget-area" role="complementary">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-3',
				'menu_id'        => 'social-menu',
			) );
			?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
