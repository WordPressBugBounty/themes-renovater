<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package renovater
 */
namespace Renovater;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package renovater
 */
class Asset_Enqueue {
	/**
	 * Class constructor.
	 */
	public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ), 20 );
	}

    /**
	 * Enqueue scripts and styles.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'renovater-style', get_stylesheet_uri(), array(), RENOVATER_VERSION );

				wp_enqueue_style( 'renovater-presset', trailingslashit( get_template_directory_uri() ) . '/assets/css/renovater-presset.css', array(), RENOVATER_VERSION );
		wp_enqueue_script( 'renovater-animation-script', trailingslashit( get_template_directory_uri() ) . '/assets/js/renovater-animation-script.js', array(), RENOVATER_VERSION, true );
		wp_enqueue_style( 'renovater-custom-styling', trailingslashit( get_template_directory_uri() ) . '/assets/css/renovater-custom-styling.css', array(), RENOVATER_VERSION );


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }

	/**
	 * Enqueue admin scripts and styles.
	 */
	public function admin_scripts() {
		
    }
}
