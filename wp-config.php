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
define( 'DB_NAME', 'sat-edu' );

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
define( 'AUTH_KEY',         '#x#4LS:gV_I:Ic%+?eX{F~PP&L/[5D;h6LpYOhTHZX!n!`GOs2@1Hv@sy0Mv m}A' );
define( 'SECURE_AUTH_KEY',  '@dSA<(3kz?|%qqCku02J*OzeT,)Mv^CBbmI&+lVen]YrA]e4f^K2KoG9c0$9N_cD' );
define( 'LOGGED_IN_KEY',    'e[,?2H7j0Y~.Ji- 8gL16IpAjyW4XC&i|}It1@.!GoX5~LJ>d$&<K=sU-9vk=`1V' );
define( 'NONCE_KEY',        '5J#+wSeI[Z1{9iG@DLi<j]@.tC|T}-T>gj=8>6i3hj?Di_tF[ARg_hU^7;OwI#x#' );
define( 'AUTH_SALT',        '1CaN{1$<uO.%<fjN^{{46F.?2Ck>j@&U?>TONh`gv&IK`{bn29K$Pu_on}._a#hn' );
define( 'SECURE_AUTH_SALT', 'n28 %(u(PNR)t7?aqp+yc|~;%Yxf ]R-p>Yz>J2xm(BkQ1x32Rk%dsb-?+_B~;xW' );
define( 'LOGGED_IN_SALT',   '9CrwAruU5l52kEsS*V@+`X;1T?r$q.|:_{hN%EX6YsA$ya[C}15i7#DA,EAg;Fun' );
define( 'NONCE_SALT',       'AUh.4vHu:o[%C.@&B(PqpS&#LCYeerVugMHEP8(+U<AR3mC,VCk_Qh<D6+M%`>:o' );

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
