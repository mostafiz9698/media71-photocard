<?php
/**
 * Plugin Loader
 *
 * @package Media71PhotoCard
 */

namespace Media71\PhotoCard;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main plugin loader.
 */
class Loader {

	/**
	 * Run the plugin.
	 *
	 * @return void
	 */
	public function run() {
		add_action( 'admin_menu', array( $this, 'register_admin_menu' ) );
	}

	/**
	 * Register admin menu.
	 *
	 * @return void
	 */
	public function register_admin_menu() {

		add_menu_page(
			__( 'Media71 Photo Card', 'media71-photocard' ),
			__( 'Media71 Photo Card', 'media71-photocard' ),
			'manage_options',
			'media71-photocard',
			array( $this, 'admin_page' ),
			'dashicons-format-image',
			30
		);
	}

	/**
	 * Admin page.
	 *
	 * @return void
	 */
	public function admin_page() {
		?>
		<div class="wrap">
			<h1>Media71 Photo Card</h1>

			<p><strong>🎉 Plugin Loaded Successfully.</strong></p>

			<p>Version: 0.1.0</p>

			<p>Welcome to Media71 Photo Card Generator.</p>

			<p>The photo card engine will be added in the next version.</p>
		</div>
		<?php
	}
}
