<?php
/**
 * Domain-specific config with all the required secrets.
 *
 * TOC
 * - Hashes
 * - Database
 * - FTP
 */

// ---------------------------------------------------------------------------------------------------------------------------------- Hashes

/**
 * Hash salts.
 *
 * @link https://api.wordpress.org/secret-key/1.1/salt
 */
define( 'AUTH_KEY', 'XXX' );
define( 'SECURE_AUTH_KEY', 'XXX' );
define( 'LOGGED_IN_KEY', 'XXX' );
define( 'NONCE_KEY', 'XXX' );
define( 'AUTH_SALT', 'XXX' );
define( 'SECURE_AUTH_SALT', 'XXX' );
define( 'LOGGED_IN_SALT', 'XXX' );
define( 'NONCE_SALT', 'XXX' );


// -------------------------------------------------------------------------------------------------------------------------------- Database

/**
 * Database access.
 */
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'XXX' );
define( 'DB_USER', 'XXX' );
define( 'DB_PASSWORD', 'XXX' );


/**
 * Custom DB tables.
 * 'table_prefix' is a global variable and always needed.
 */
$table_prefix = 'XXX';

//$table_suffix = 'XXX';
//define( 'CUSTOM_USER_TABLE',      $table_prefix . 'user' . $table_suffix );
//define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'usermeta' . $table_suffix );


// ------------------------------------------------------------------------------------------------------------------------------------- FTP

/**
 * FTP acccess.
 */
//define( 'FTP_USER', 'ftpuser' );
//define( 'FTP_PASS', 'ftppass' );
//define( 'FTP_HOST', 'ftphost' );
//define( 'FTP_SSL', true );
