<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thaiskdm_thailongtime' );

/** MySQL database username */
define( 'DB_USER', 'thaiskdm_thailon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sers2kSers2k!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//define('DISABLE_WP_CRON', true); //06.06.2020

define('JWT_AUTH_SECRET_KEY', '5!L8:w#U,+W ,g&]-E1w>T3o8%TV$~hRzc:2=@sqZMp<8G;W/GQjP=%Ni50T%p(K');
define('WP_ALLOW_REPAIR', true);
 
 
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',IBM9o<!iOp{k=GjAM^t0LD-SI#FIf+L..6cG$Q,(Qh{nVt*d]#V@=|`M0*-XZ.x');
define('SECURE_AUTH_KEY',  '~XJXJxT*XY}>Cltd_#b4+B1x+ bJ-Yn]h;sS%|ueknt!idj?D~^9e^0g3N/n+7!R');
define('LOGGED_IN_KEY',    'f*W?>3Ae|CC*z~P?u-%sYzn7se}8<`X5m*c-k,k+uZkt/LZ][M|KfXsbr=<Hw-Nf');
define('NONCE_KEY',        'ezIl}2IS-h6ZxWyeEJARO?@tIR~~b&}LAy#39,,$?KV-m{sY-~FOOHj<8ubK V$U');
define('AUTH_SALT',        '>5a^>.o==*+JFk7Z7|q+3<;uonV8WPfDFupw8jv4PFT> vL*/f7x~6Hio~*]k.k@');
define('SECURE_AUTH_SALT', 'Q!l`erth FP&jmyZZTz}c`FbUyBb;mxVjA?7G0YyVLF%|@msazc+q}vQ{.#V/ZYE');
define('LOGGED_IN_SALT',   '+k<iBuR2sUqRZ~$*lusIuJ9K?^=N`kV5Gu8~E`cy2<0^S?}&n%8J63a3m3Eo[+EE');
define('NONCE_SALT',       'iqHIuS:/Z[ImKHMqw4pAZ|LO^-8:<GoK=;43u&x(AMcw]}<.>zytpU0CF.dv]`w[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 
define( 'SMTP_USER',   'admin@mylongtime.com' );    // Username to use for SMTP authentication
define( 'SMTP_PASS',   'Sers2kSers2k!' );       // Password to use for SMTP authentication
define( 'SMTP_HOST',   'smtp.gmail.com' );    // The hostname of the mail server
define( 'SMTP_FROM',   'admin@mylongtime.com' ); // SMTP From email address
define( 'SMTP_NAME',   'Alex Priedl' );    // SMTP From name
define( 'SMTP_PORT',   '587' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_SECURE', 'tsl' );                 // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG',   1 );    
	
define( 'WP_DEBUG', false);
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
/* That's all, stop editing! Happy publishing. */

define('FS_METHOD', 'direct');

/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','https://example.com');
 *  define('WP_SITEURL','https://example.com');
 *
*/

if ( defined( 'WP_CLI' ) ) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}

define('WP_SITEURL','https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME','https://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_TEMP_DIR', ABSPATH . '/../temp/');


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/

if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
		unset( $methods['pingback.ping'] );
		return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
