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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'homework8' );

/** MySQL database username */
define( 'DB_USER', 'waleed' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!zN%%B|S$U[c(>D6h-}E`h>dtgSf?|,c(/b1|8#^Vc83-i,Q/A~4/o3qWSc`T+e0' );
define( 'SECURE_AUTH_KEY',  ':,tc:Ai-|/#nBwG2&6v^fIc.rCv03,UlNAI122)4=#I-CrS^7Y/|{8*}ke2;9sF]' );
define( 'LOGGED_IN_KEY',    'F9o%;Q5r*Ep0{la_;^LxTYT7L5#0}kTvW=rI<Hu3%ymzBV53y4.NQ7HPd{,%]kxb' );
define( 'NONCE_KEY',        'S_/YTLy]x&>&D.>,ZRx!gxMRvwfR=tb0{g|@&%uTUBxj63v.+A[tEEfDS%CHr;eN' );
define( 'AUTH_SALT',        'e~9c:h*JqT.`CY!.Dcvoh~a#9#1d7x=0*lVQ;Sf)CAa3.rNPqo.@eF@?4zw+U!I6' );
define( 'SECURE_AUTH_SALT', 'FR)I>=ikNW9B2b?$@:rkkB0Bk-319m2 r`~;kq>*<YP2xLI=R{pK3Gqy2m+Fx23e' );
define( 'LOGGED_IN_SALT',   ')HZqVJ^b&0`dsPBGl-b!t[?e^U]?9oQ|E7K43?ye>zH8)TP6-563ByxOb`]vp3.T' );
define( 'NONCE_SALT',       'F@862FUEogID&xo`%SM3qr+8ve(*&>E]fXx-c3d6kv.`3QDbj!|5bv-:4:W=#g-/' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
