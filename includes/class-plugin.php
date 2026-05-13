<?php
/**
 * Core plugin class.
 *
 * @package Shift8_ScrollShot
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Shift8_ScrollShot_Plugin {

	/** @var self|null */
	private static $instance = null;

	public static function get_instance(): self {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}

	/**
	 * Enqueue frontend CSS and JS.
	 *
	 * Assets are small and page builders may store content outside post_content,
	 * so marker-class detection is handled in the browser.
	 */
	public function enqueue_assets(): void {
		wp_enqueue_style(
			'shift8-scrollshot',
			SHIFT8_SCROLLSHOT_URL . 'frontend-assets/css/scrollshot.css',
			array(),
			SHIFT8_SCROLLSHOT_VERSION
		);

		wp_enqueue_script(
			'shift8-scrollshot',
			SHIFT8_SCROLLSHOT_URL . 'frontend-assets/js/scrollshot.js',
			array(),
			SHIFT8_SCROLLSHOT_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
}
