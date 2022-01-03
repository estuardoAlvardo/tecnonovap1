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
define( 'DB_NAME', 'tecnonova1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin11!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}u&h2Tbj1n]7KZ?*=}m^DeJ=g$5h2/HFd %z+ROO(V^y)vGcuSLMj]w+%Kvy+NI?' );
define( 'SECURE_AUTH_KEY',  'KuYE/j3>i]J64/^z+&h}yiCl*-&5-YC%Xh7VNrFt@<Pr!9J6T|Iht{@as3e@&4Nv' );
define( 'LOGGED_IN_KEY',    'zKQr+C%(7cQ8>MPqsqPa~d(Hq{ dl=6#K?&|=Bv}KS(Lw^Ss6?Qn*?x7V:,QP=^V' );
define( 'NONCE_KEY',        '7~~;k];ulZrjq%ZJKT+V<g+D?(D0QLfICKwSw>bR*m%b7jR+d(=EX3+[.Nl[6kZw' );
define( 'AUTH_SALT',        'tI|R?obVtw!w1V=B{RD-0TzjP^Z>R^wR/~0+3B]iq,>E[_bniF?wosy*TL,]V1Ke' );
define( 'SECURE_AUTH_SALT', 'hVKB*#PXmSQqsf6^nPBFZg&ofpbkzx]]a}771>KS[vghN.k:,0c&iVfZX6.zWO3%' );
define( 'LOGGED_IN_SALT',   '.:9Wv:2Y.t1XR$>>vN~Pw>q[7]%$6qEXb1%F..0_I>>OJW1A$EU;XJn[6Rk S91f' );
define( 'NONCE_SALT',       '4}2zu{hQ?ux0$:*S~ojC]21j,VK^1SS)y8eq#w%vdJVMq^y#FHVpS^&K,V&B)Z-G' );

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
