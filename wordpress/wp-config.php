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
define( 'AUTH_KEY',          ';-_|}wRm[]Vf[C!t&46EKWfg:1>46AU7q27i-96IT(qz&FT>NI7PxaKj1r5|9,%z' );
define( 'SECURE_AUTH_KEY',   ',2KA{;]+[`1LS(Hg{cpPU#I}-yRn#K|9K@p.PCW6#as7lLHoqt #Nl^-w|XU!U/$' );
define( 'LOGGED_IN_KEY',     'x^luW3= S{/#1]#o^yOH.Ub2zu.6zO}*YxCL?;9xh0DRK3UhO=tC#dg&Ms/mI)pJ' );
define( 'NONCE_KEY',         '~6WqxRkCTYUVy1tWnvL= O:iq*R8v;V{1U+#_NJ.8n ;wCZ?Vs:iT2@)<v~~9;Lb' );
define( 'AUTH_SALT',         'Bs?3j$b&_H-*O{-gi,(sgN0&,xD2/9_$B[}&0Gn7F}C3fgEk7W+G?rP7d}!@+4py' );
define( 'SECURE_AUTH_SALT',  'Czp{d!3Pj{NvD?7>zdTOtQl91HlY`P4o *6V!2#{DFq5^M}Z6+ni!dAsH)/sw]:#' );
define( 'LOGGED_IN_SALT',    '9AjHSw9T{lUhj[j,U2Fpt/KDrpRxQQwMK7~>wg(LoJx1X7X^[p%.1Xi4NH,)fH^.' );
define( 'NONCE_SALT',        'g|A;VL`%S`&J>Js7*3jD6]~%Abg2g]pE_IX-n>$MLiE{sfovPo-m)A#PoM#W`0AF' );
define( 'WP_CACHE_KEY_SALT', 'G]hu#5-; lA05Q nWS3(~zw6d[;N{Mjk06g{P=&Ed6+n!v/mMN}7 y}Rc5sF$*Xc' );

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
