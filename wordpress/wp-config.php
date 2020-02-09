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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!QyPQ~:x82l{1l.<i_G]mpEPCPjMxs[(.H7d#7]eJa,TVc0ZES|WSXv>8n.Tp!71' );
define( 'SECURE_AUTH_KEY',   'z&(.hO2y%;e%ZGpQv0LC,:HV.@8B4<R6&C5>;bh$.*W`?DuI4lji$l9yq|X3,Yy4' );
define( 'LOGGED_IN_KEY',     '3KB)xwR$)wlne$}p>_A}5)Tb(%*sgLjGk:>vs^/cI^K8l1/*>i}e1Wt[(Y<J}5Uy' );
define( 'NONCE_KEY',         '.9B?WN.RcHg.PYvT8BU)3u}?s5qn01F+}DL9u4^ic>U2-EDNW_Z]{#bOt.pfAv![' );
define( 'AUTH_SALT',         'hw2#SwV2cttT``;kC~gnh4jX#a0,9*GT%gS(YR~2!@e1OlMovUT$?NEsg*~yaBP%' );
define( 'SECURE_AUTH_SALT',  'J+:o2pDV@yx/Yf0#-J)du4}k-=z:!5}&!tE/d@QWyV1e_g>jat]EQKcx6+?N.V|d' );
define( 'LOGGED_IN_SALT',    'h_K4[R7iT`LON57)PdXk0UwzJ7{~D wA8<KWg//(wc0]4YrEvQ<&%^S<!a<vLYX6' );
define( 'NONCE_SALT',        '9uWu<zM$GMZ6!MX!ORYfe$cvNP8IK2t1`JP3a}u5 -ts3H`K-z94=8UY@Tuvi$9n' );
define( 'WP_CACHE_KEY_SALT', 'j yVbOZ%^+b}nFCd+JkNpYPa6K/`Ifi7g_ew;GQNgpPko(=@E4;e,^c=/_qLi2?-' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
