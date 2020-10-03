<?php
/**
 * Global, generic config for any WordPress installation.
 * Contains server-wide settings.
 *
 * TOC
 * - ENV
 * - Development
 * - Performance
 * - Security
 * - WordPress
 */

// ------------------------------------------------------------------------------------------------------------------------------------- ENV

/**
 * Check if current ENV is DEV; anything else is considered LIVE.
 * Intended to be used in plugins and themes.
 */
define( 'CODECONUT_ENV_DEVELOPMENT', ( $_SERVER['SERVER_ADDR'] === '127.0.0.1' ) );


// ------------------------------------------------------------------------------------------------------------------------------ Development

if ( CODECONUT_ENV_DEVELOPMENT ) {
	@ini_set( 'display_errors', 1 );
	define( 'WP_DEBUG_DISPLAY', true );
	define( 'SCRIPT_DEBUG', true );
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true );

	// Store queries: $wpdb->queries (slow performance)
	// define( 'SAVEQUERIES', false );
} else {
	@ini_set( 'display_errors', 0 );
	define( 'WP_DEBUG_DISPLAY', false );

	// define( 'CONCATENATE_SCRIPTS', true );
	// define( 'WP_CACHE', true );
}


// ----------------------------------------------------------------------------------------------------------------------------- Performance

define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );


// -------------------------------------------------------------------------------------------------------------------------------- Security

/**
 * LIVE environments.
 */
if ( CODECONUT_ENV_DEVELOPMENT !== true ) {
	define( 'FORCE_SSL_ADMIN', true );
	define( 'FORCE_SSL_LOGIN', true );
}

/**
 * Set ability to change code files from within admin.
 * Disabled for security and clean Git-based workflow.
 */
define( 'DISALLOW_FILE_EDIT', true );


// ------------------------------------------------------------------------------------------------------------------------------- WordPress

// Media files
define( 'MEDIA_TRASH', true );
define( 'EMPTY_TRASH_DAYS', 15 );

// Posts
define( 'WP_POST_REVISIONS', 5 );
