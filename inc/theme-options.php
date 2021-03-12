<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

// Register setting (http://codex.wordpress.org/Function_Reference/register_setting)
function theme_options_init() {
	register_setting( 'sheee_options', 'sheee_theme_options', 'sheee_validate_options' );
}

// Add Settings page to WP Admin navigation
function theme_options_add_page() {
	// Page title, name in navi, capability, slug, callback
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme-optionen', 'sheee_theme_options_page' );
}

// Options page
function sheee_theme_options_page() {
	if ( ! isset( $_REQUEST['settings-updated'] ) ) {
		$_REQUEST['settings-updated'] = false;
	} ?>

    <div class="wrap">
		<?php screen_icon(); ?><h2>Theme options for <?php bloginfo( 'name' ); ?></h2>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div class="updated fade">
                <p><strong>Settings saved!</strong></p>
            </div>
		<?php endif; ?>

        <form method="post" action="options.php">
			<?php settings_fields( 'sheee_options' ); ?>
			<?php $options = get_option( 'sheee_theme_options' ); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Color scheme</th>
                    <td>
                        <select name="sheee_theme_options[color_scheme]">
                            <option value="sheee" <?php echo $options['color_scheme'] == 'sheee' ? 'selected' : '' ?>>Sheee</option>
                            <option value="sarahhuber" <?php echo $options['color_scheme'] == 'sarahhuber' ? 'selected' : '' ?>>Sarah Huber</option>
                            <option value="musikteamevents" <?php echo $options['color_scheme'] == 'musikteamevents' ? 'selected' : '' ?>>Musikteamevents</option>
                        </select>
                    </td>
                </tr>
            </table>

            <!-- submit -->
            <p class="submit"><input type="submit" class="button-primary" value="Einstellungen speichern"/></p>
        </form>
    </div>
<?php }


// Validator function
function sheee_validate_options( $input ) {
	return $input;
}

/**
 * Add color scheme as class to body tag
 */
add_filter( 'body_class', 'sheee_theme_add_body_class' );

function sheee_theme_add_body_class() {
	$options = get_option( 'sheee_theme_options' );

	$classes[] = 'color-scheme-' . $options['color_scheme'];

    return $classes;
}