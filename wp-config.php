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
define( 'DB_NAME', 'infibeam' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@S][k>)IZlb(te}w#bw`yu.SFDC^]SJ+35_hS2YC6F!]!U<.}gm];@/-$+sMr-2?' );
define( 'SECURE_AUTH_KEY',  ']TJv=H(!0^?;Yrezq2=1BSLQQeBb[VAj-0$P%{aV_W1cbIq9o4&x1N1tfI1uiZrt' );
define( 'LOGGED_IN_KEY',    'Pr}9{F2ZrIxKoj{7L&QoSceeDP/ascQ)5|Z4g+/A&2^&mg2$?K4H]i&cMv.. iTd' );
define( 'NONCE_KEY',        'wt&JmrUUo>I[qn@2Pj.W{W/T;;IKGV+i>JqwYf4LiTzP{zG<eTJp2xzt[(,-h/h^' );
define( 'AUTH_SALT',        't[c7?YcFu~#XhdTsIT)B[ZRRbL@J_v?kQHa`,d{U6r)v>5nRvxa!8SN_$1nO6UFu' );
define( 'SECURE_AUTH_SALT', 'B#d_kdM:`Fi:(wp@|pe/(BMlZndPLsSg}x<>(g!q*x RkAqpR2y``3Py_X@[4pbp' );
define( 'LOGGED_IN_SALT',   'd#IlSn-Mr0*vl 5Int7:ipj0WGUnS>PIAXW--Mi$sCXx-QRl=.$`|$#)7_Zy5BPV' );
define( 'NONCE_SALT',       '+Ns`C<xw])m0Z|3oZQtdkpg0W!)Ljt[+BoqpK+S2WR/8&|k~YKHF@DAE_0W6T1nC' );

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
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
