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
define( 'AUTH_KEY',          '[YB},1TK0+OD=gUW[`>qbBd0#OL~,ofaK}f!!)G fvk7_dhZ~lJUTF^C3^z 5!==' );
define( 'SECURE_AUTH_KEY',   'Ex1GfLBeDuw]OUGl%A|}^%HK3LzJd{Bm$`Xkt_K,LfC(Dz+ki&I<i<nGpIMCo2.&' );
define( 'LOGGED_IN_KEY',     ')1$6oQmF-lc2(5nRYw}6g83oBUIFs=&jQ6m1b{5<fa)BhA_D8IGN!/V]uJDm;/2_' );
define( 'NONCE_KEY',         'z:`GP*N7B}It/6s{&UN}BM84G;DC>eDu0oV(A{oT/;x4UBij-xg3X#i)qE.>==! ' );
define( 'AUTH_SALT',         'sEWe_c-1GQxI:>:G[3i!!!Rk:PN[BI$)q$`2%2YM[%=4xxt![]yB|XS6k6ti|&V?' );
define( 'SECURE_AUTH_SALT',  'r^&MT5Jp1ljoOQJb3.g}^3Xfj>dC RTG#!dq!!$EWn{#4;,{y P9Gq`)c$xAv$yc' );
define( 'LOGGED_IN_SALT',    '>x}P%U?=B5^8Sn8kAf5gPp.<Iea,hIr,&VO.2V>Y~+4i,9BRwFF~#WL1|]y =ZHc' );
define( 'NONCE_SALT',        'CoCM1[),_RhkLfcgh(C.OxT8V*>h-BK2?305:}]YTZO}b*/_k;kih~TSP?/LWGks' );
define( 'WP_CACHE_KEY_SALT', '|r7|WnH:xKcl]v=8j@r[=-p;=$n2!lx&OtlE<bc.Ovu{Dfk.Bz<:sff&PW;V_`j;' );


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
