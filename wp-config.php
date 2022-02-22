<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u969472162_CxBlN' );

//few updates for local dev

/** Database username */
define( 'DB_USER', 'dbadmin' );
//define( 'DB_USER', 'u969472162_gHGGc' );

/** Database password */
//define( 'DB_PASSWORD', 'zemnlK5hx8' );
define( 'DB_PASSWORD', 'abc@123' );

/** Database hostname */
//define( 'DB_HOST', 'mysql' );
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*kE(]b!_<a>L>ivT^HHyparVV}dF#IIcX)GSv~:ZrmhS 0], 4~)+yyX,XnNoWSw' );
define( 'SECURE_AUTH_KEY',   ' iI%jL!7qz}CTy]*?-pQ7W32+H~4M&@.i}IVhMJVGL+_!zt)*=Kw.*f:<oSCFoQ(' );
define( 'LOGGED_IN_KEY',     '{$3?t[8]XV<3)x4v[LYVp1h#Hp,pgV>$)hIZd`qlvKQntZd!F52IH(Da@6[Lux<f' );
define( 'NONCE_KEY',         'nZ}Dg_aK3cx%pDN3#mRV`1{a6C`S<_k0gN(M{JG=e$xP/XXQjUQ;|i=9k7yrfI>Z' );
define( 'AUTH_SALT',         'Z)ixR<^dP4Bmh=S%$>j`#b]YE2YkdtL1a(Nn:uSvnG_:`RSfckrH-u$:khlrh]Dj' );
define( 'SECURE_AUTH_SALT',  ')!y}otOJkzE,zI_A-z-,z4VGMmpa|g@4e|*L5E>yy@3b<jqc6)?SUw+nPb6o?6wb' );
define( 'LOGGED_IN_SALT',    'Nk|W`|3bw=AX/7{|bGYy1vsPtR*by:PF<28&  &Q#w$0h*Yog)xJUkHZKFf!0,NV' );
define( 'NONCE_SALT',        '.Z@U+^2<G&GF_j1Mf+t!I%odM[1UD0$99qcF]QGk5cd763~JnUumiRl ~u/rvnCB' );
define( 'WP_CACHE_KEY_SALT', '6sxTxOnt=qYQ~yym~7LHN+J^&mxA~5}366dW]FES?reA>H8<]0U0<vPC<!ShZl!U' );


/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
//define( 'WP_DEBUG', false );

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
