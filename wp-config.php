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
define( 'AUTH_KEY',          'pne[[s&KP.D~TB)U7O_eFXgCs!1nP/2(AO|e]k*[r}m>4<c}nrRNI]<#at}~bm$W' );
define( 'SECURE_AUTH_KEY',   'R>+#sr]S]Aq?H1/ F/)N2Yj_P^vo*^shI%~_i&v~:9JOpfM?,{.d=RUxGN;%rt`p' );
define( 'LOGGED_IN_KEY',     'CY51z^<3QtGHWdY08z0f%}$k-+>cqgu@rT*dhebt&ET!De=#L}Qvr4^(OVJr;.EM' );
define( 'NONCE_KEY',         '8o^&-FQOa1tEu]q|G4B~(xrZ^#88Lzt^bJGN;+A1d,Cs-At4K{#h1<WNtk&).?7M' );
define( 'AUTH_SALT',         'VcxI9@J;u]8e`5x(JE^&y?Q%w*aP4g3{og43Wr6:ebw_C,uQ;0H%fONxDJJ]u*6t' );
define( 'SECURE_AUTH_SALT',  'd{[^TmM:hlBq]j}xR7yh1gL{Ogr]TuxnX.`9nqy?xB#.tH`~<4c:^b8axO2}i3}E' );
define( 'LOGGED_IN_SALT',    'fuJcb,kd4F]ii,%x&7vro@lu#Lwl|U4%%!Hyn55=:X%pX~A,Y8Z-68LJ~!$sCnj~' );
define( 'NONCE_SALT',        '6K_2pUdC[yN3uFF])Yq<]B1#N4^mHwXd0a<`cCH9^@wr6h`mey~@&J^ZkB&qy&pQ' );
define( 'WP_CACHE_KEY_SALT', '5L(?]r1gRGygBm*>VMZ;g]Pu,9D7Dl=R}>@nD|l3&)1HXTKV::?a$<V0%%+98~LF' );


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
