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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'myuser' );

/** Database password */
define( 'DB_PASSWORD', 'mypass' );

/** Database hostname */
define( 'DB_HOST', '192.168.33.11' );

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
define( 'AUTH_KEY',         '2CA$.?]`oa5*10NW#BayH{pTA_}uuK#Ob!`UV#*7y$5[_%J@Gz5&Lqk)D.6#5(EN' );
define( 'SECURE_AUTH_KEY',  'v@([<B_&qH!!k#ShSr0I{l2oa8V0G<3PE^+En;$f+9:?veXJe t]/ASlU5)IVz0!' );
define( 'LOGGED_IN_KEY',    't{RF<!vK/#xLRlkd)`2Y+0k%|%]dh~{7lC_G@{srk6,WE<U,CAqVHTs3fgPL@6k(' );
define( 'NONCE_KEY',        'FC7=t:Zs)N6UpCXcU+,:<%{pwcU|w75K|pmtfb5t<W^rQNLOXF9A]UvhJ~+:E,1@' );
define( 'AUTH_SALT',        'yNoqHMj+dS^{G>oj,1;6-x.}SY]Y#JNahnW#+$F+b0iXI/cP2X6|l9{bE+`PYF_ ' );
define( 'SECURE_AUTH_SALT', 'QwCNIB[s~aV;Ii~+>T6n%;@`Le(Bx]enKa!4aE1N@Ajx D_KhPG[4x+gNrmHFVk6' );
define( 'LOGGED_IN_SALT',   'Ll%U8Z:SgASWV]|qs6pt6-2OsqKZQ]?iuQ;vX`@]qE=}*paB(lYq xIoi+V,-P&z' );
define( 'NONCE_SALT',       ';V9$ID[b)5h?#/* Obt$y PR7G|T5W5IpP0)p?o;D26r{Un>ESJkX4@sko2jyeg#' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
wp-config
