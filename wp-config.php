<?php
define('WP_CACHE', true);
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
define('DISABLE_WP_CRON', true); //06.06.2020

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );