<?php
define( 'WP_CACHE', true );


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vwbeetle_db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'k@G:lz=DeYXF.!ceOj}^*7S3}J6Cm2RMXi3|mJax~O6+rlCOr(sR]rF9O.taw$nC');
define('SECURE_AUTH_KEY',  'SKM>t3pn=wQDFsQX&p]Gg@m[~OjO/|_6?s:Wc`,~VdZ:7.$&ji~4e-v#E:Q>e$2f');
define('LOGGED_IN_KEY',    'X%&xPyNHy=7tl4>yFaK~-;1w|+0AO p}.BLR}S^ Xxo_)W?QRQTsB4vr8wXij<i$');
define('NONCE_KEY',        '|KAT0m}w$^vZ`8x}lpsPw&DA#{wn_7>?M%&vrN=~&_-+bw]n1GVN@d1.DjDwd`e6');
define('AUTH_SALT',        'nrP=T!#%YV- K,+~Vk*{M4eQK*SaIO?^(>%n9DB>K8Ao3`p1M?O naQ~k5_4,N!u');
define('SECURE_AUTH_SALT', '/tAVy1y#V[c+iqgPiQI6}bw)dAViiT%ml*lc*j~F/Ha,M?R#2a#)}(Vs4/xqY3&v');
define('LOGGED_IN_SALT',   'Kby}*x$aX*<>wnw4q{*}zQ9:=Ed&X@aPK9[lpw;:/jBHEiZg(9,{5#IEWx+GYtnF');
define('NONCE_SALT',       'r@dP7<XJ$bE8ee1x-nRhS=PIp/X%XEMe3!sXMvb|]o*`Qu5~}ZthhLjl<#jhgu &');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
