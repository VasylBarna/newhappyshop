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
define( 'DB_NAME', 'happyshop-product' );

/** Database username */
define( 'DB_USER', 'vasylbarna' );

/** Database password */
define( 'DB_PASSWORD', 'Tesoro88' );

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
define( 'AUTH_KEY',         'JNl9KYJ6.D}oL{H$Glo5^wf>HYwQT`g`.8$WbIS6$:%!] CJd[<Q/WLuOG`Z0-C.' );
define( 'SECURE_AUTH_KEY',  'Ec<scaz,O]=LR8z!+R*Cg,@b^NTXKvcC1e3^T4J/60[$Qb48MF#`OaW`|s<%EJTa' );
define( 'LOGGED_IN_KEY',    't<pp;!^Kg.]c&u]TT19V_ZvFpZND_ SIuj25Zk&6,(QV&t#a6xcTrQk^!)59h{4Z' );
define( 'NONCE_KEY',        ';@`_0|LqlcO=(*X!|Ea|DSAL03u]dz3L>?xQK:>64Ud)*Z=FGY{,./Y&yvyC+1:H' );
define( 'AUTH_SALT',        '=5&8J~obn)N#|qrINW[9nZJV]mqHG8!}}Q5~!8^2T$o:Foxp$ @6BT%#4yh<l3?O' );
define( 'SECURE_AUTH_SALT', 'D1b:7[];WlK)0|$Xusuu`jsbuNHH1O#&5{mzxWua}{}0;NVW@Z|Q?I_D6]bDT~}A' );
define( 'LOGGED_IN_SALT',   'LzOlok*X)Ui&TEq8!_2_o6|w5^^r;.wk_wl_/);t]HYb6<q}Q^3j(gJ-^Untu9 0' );
define( 'NONCE_SALT',       '9Ws^ul2-7aq.[2d<KWm ,sZ`30uE@%Dry.wkfy]UEDMuH*YK?M*yHzN6iw8Ns3*W' );

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
