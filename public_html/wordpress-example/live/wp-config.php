<?php
/**
 * TOC
 * - Includes
 * - Core
 */

// -------------------------------------------------------------------------------------------------------------------------------- Includes

require_once dirname( __FILE__ ) . '/../../config/global.php';

// Change domain file as needed
require_once dirname( __FILE__ ) . '/../../config/domains/wordpress-example.php';


// ------------------------------------------------------------------------------------------------------------------------------------ Core

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
