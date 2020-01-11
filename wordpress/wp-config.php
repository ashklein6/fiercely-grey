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
define( 'AUTH_KEY',          'G~1U8~P8ro6 4Q`,.xf_X_3B{+iiC.] *{FB8H(Zg%nhXtdc4F,Vn30aU wpg`8,' );
define( 'SECURE_AUTH_KEY',   'l4R6F7?+[yycU!6c_`&;g~;Fj>b;*J{_EacI{h^kS!Rzxmim?Z$^h*kuUdQ<8y#c' );
define( 'LOGGED_IN_KEY',     '`wKN)W>t,Pc88^G@}->j3v&.>Kq#q,]UEL?.kWh4/T0f[H[0-Izy%A/a7%@1vl>}' );
define( 'NONCE_KEY',         '=T*b=ynw]p8ixTLtU>AC+_^F`ngiW@mHn]0Lk7jI%s7DDtre$-CtH1ik4~Fg`-^/' );
define( 'AUTH_SALT',         '}1DZA},Ke11|wnx*p:DTr6%i{]s:Cilyu;bvYB`Ibop3)/%N75Ou]rQ5fc>Nmuh7' );
define( 'SECURE_AUTH_SALT',  'dBE>746p#$?[`GZiTng3Gc)l]PNcL`S[nB+->iEx;;m.V%-ZNG&rQD1||Kk}_Z(W' );
define( 'LOGGED_IN_SALT',    'w*-hTMw>bB[tZD-v8:qar$Yd ~fkNzM{YNM_U`:USK6Z_tcCj,Q/25Q2uWY`n})#' );
define( 'NONCE_SALT',        '>Sd}y<Mf`%KyOmbWFE<tX,I,N@/~H,580L+umbBKVY=^Q}MFW.m-3pPwic.(0eK6' );
define( 'WP_CACHE_KEY_SALT', 'o>`2/.yt|8Jt(!+/B1b#heM4c7`>j]Nx$_u8W|el[m;nE8&Sr.|8RP^;R+Bi+&E ' );

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
