<?php
/**
 * Autoload function
 *
 * @author Jegstudio
 * @package renovater
 */

/**
 * Autoloader function for Renovater theme classes
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
function renovater_autoloader( $class ) {
    $prefix   = 'Renovater';
    $base_dir = RENOVATER_DIR . 'inc/class/';
    $len      = strlen( $prefix );

    if ( strncmp( $prefix, $class, $len ) !== 0 ) {
        return;
    }

    $array_path     = explode( '\\', substr( $class, $len ) );
    $relative_class = array_pop( $array_path );
    $class_path     = strtolower( implode( '/', $array_path ) );
    $class_name     = str_replace( '_', '-', 'class-' . $relative_class . '.php' );

    $file = rtrim( $base_dir, '/' ) . '/' . $class_path . '/' . strtolower( $class_name );

    if ( is_link( $file ) ) {
        $file = readlink( $file );
    }

    if ( is_file( $file ) ) {
        require $file;
    }
}

spl_autoload_register( 'renovater_autoloader' );