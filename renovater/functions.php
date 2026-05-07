<?php
/**
 * Theme Functions
 *
 * @author Jegstudio
 * @package renovater
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'RENOVATER_VERSION' ) || define( 'RENOVATER_VERSION', '1.1.1' );
defined( 'RENOVATER_DIR' ) || define( 'RENOVATER_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '2.3.3' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Renovater\Init::instance();
