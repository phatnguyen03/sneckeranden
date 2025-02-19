<?php
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
define( 'DB_NAME', 'webbangiay' );

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
define( 'AUTH_KEY',         'S`.=BGn24B0hZjXRc8K:?/6eCF$(&bkYY;MBN9t7dyFhEF5Kx{pVj(W#*x1y5f>n' );
define( 'SECURE_AUTH_KEY',  '-H[$|~TG:W &|D9<$wIa7 ;jEM^9#beDfS`x]BpT>Sn9yh7oi>%7M8G:hb</}8Z%' );
define( 'LOGGED_IN_KEY',    ' K6%&Wa5ksl`2p?F^2@N~nGX47M>%{|ouml<F?zP9HCJr&}`*HTHBpwu<!K=-HId' );
define( 'NONCE_KEY',        'xr#SNSny6?9V[06Q?}_.gbh{f2-&>zZ7)/K?QP!4piI<Y=jSMUXF?HsA~w=8K/6[' );
define( 'AUTH_SALT',        'O8`s]MM$tLF*Nek%d.`kMo_vI)=QM5SGT8d5}{:CbmZE1Y28wI;q%V1]M3/vd(J.' );
define( 'SECURE_AUTH_SALT', '-k]BdiP eUv{![h_&k<t%?wKVd_9E[OCIfdd6x,l8n<-`nyUSL]y3HOc?.h%<,yd' );
define( 'LOGGED_IN_SALT',   'Bk8C&O%|v Bm et$pJnq,&n-j(=rI0dsK6qHiT&.0`m^Pa!N OQp+n;[GDA?Pk%6' );
define( 'NONCE_SALT',       'hOIJ<~k:P= Lj&kQUgwmcG1R;+-EI-aF$h66v+xCeSth>{+ChE,!*;+FCWQk?djS' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
