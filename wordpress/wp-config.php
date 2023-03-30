<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'u,MDti<Y{s[Z0-Q~F=nYA:Ip[_PE~PK<n>,&)dJ2eLlQ.7EmVjO-p|b<d1W:`6bq' );
define( 'SECURE_AUTH_KEY',  'z4cXKGT04i2.wSN,WE@u4fagoZ;lcD]0?:>^]5CMCSg3E*]gq%=7o+Z=2F}tOdF)' );
define( 'LOGGED_IN_KEY',    'mjO2{=,%<UdAtZ$})H!n`^@Le-D*5fx`w?gc#IJ?,1Kr;Ph!0x7^>(cO=@T~5c;(' );
define( 'NONCE_KEY',        '[5gByT)E&ciswCOLc[ewhvG`BedzlKrvJ3:qj*c.2SH-4%7:F_Me@}xd9jAikM,v' );
define( 'AUTH_SALT',        '|sW`Buc]%P=n;pAcR[m2V74M2c+3jv|!|k<mUd,Es2ufSRpV<bAC;:XoZq&@lxIU' );
define( 'SECURE_AUTH_SALT', 'qUB[![k)+-opF#^DDB?AL-x0^hHT6-<`bD^y@o,j17@U>`Ugj]E]UkE&ff_%XIyJ' );
define( 'LOGGED_IN_SALT',   'fq}Mk)!UO&3Mr`#{d) Gt-iD<|Zh%au4EHugL;e,7,2)RZ;Bc9=Gv o*#4SIL7=h' );
define( 'NONCE_SALT',       'jf)HM*q1DF[(%l`=7}g,?gn6vU<Q[DYz@9gS|w9vE}Q2:djLwe~W^NRe#NTdqF]Q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
