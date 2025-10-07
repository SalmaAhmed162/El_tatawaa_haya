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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          'F;f{+5>,Saj`gtmrLns*rqRmSfM`iQ<D~i-dN7a(#5>9q}dCm7l)J:bArdwQoh?4' );
define( 'SECURE_AUTH_KEY',   'I9h#cP7Jq|f,0489o1o471T[F3*KT0o(R5ri#6R:0`_M,R&1v,/Z<W&Y#=VfaUZy' );
define( 'LOGGED_IN_KEY',     'D?:xiIy[3KA0RZtow0w/8y*lJSk+%!H#?SeA,Ko&}k>nJHXuSY6YhxqAIm|Q:K<P' );
define( 'NONCE_KEY',         ':{0X.x;>USAcP,@Zn<gPL49f8i!pGUgP@BvW<,t+&gi_%oRM5S,26t:zp>b`7EO|' );
define( 'AUTH_SALT',         '>Y1KB7C>M6o7-CW&x]qNI;<3o}**#Ohdov:A,yGPtzL!A+J=~GB8mXY4*bdP{Pa4' );
define( 'SECURE_AUTH_SALT',  'tXJk|!+K/=)XF_o*Dw8~OnCF2Y?kh&|tjp:=Rm>>nfcanEzqASL{%F+q[m)KlLKY' );
define( 'LOGGED_IN_SALT',    '-BtEe<#MfdP7Psil$sNv$x_>=NxevT?J,SV[aC=l|;Y{9s?Y[d~e6-%:)fkI4(~G' );
define( 'NONCE_SALT',        'pBlh<Sw1v!~HhmpqG5Q0&Qo]?L:Cgw|&S6jfOXvWVA;RBXk.mcNx_xnfeW]gw[<[' );
define( 'WP_CACHE_KEY_SALT', 'CvP}$:5A{}O*%sQxv-?HzaFn|=,a1`D.smH4qG*q416b>Y8%yobcx3G6_:>;D2fj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
