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
define( 'DB_NAME', 'web-2' );

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
define( 'AUTH_KEY',         'o1;>p`Y6Mj1)dClF}9g#x1xc;%<x9aF)`]<`P/5v-kjnat^bOc-::T[l=}K%?X>r' );
define( 'SECURE_AUTH_KEY',  'yOc pe!+)fOb#$kP7;XK8lF.%9&2/h{$}LMPui_,R.+x<7<LJA[DG[=O2$q}apSg' );
define( 'LOGGED_IN_KEY',    '?hP]|DHa= +0=:92Bx?2{gicUz4,`Ybn9:~k%_6dA(0pPt}y.L >jJBsNO<npD~N' );
define( 'NONCE_KEY',        '#5w;5<tDD|tdK4`>$/YxZ+au<XO%J{5 OvoK+hiP2>_be6InRvQ;Py]pb]jYq>Iz' );
define( 'AUTH_SALT',        'S{Ns0AbU1LGnd37JNj xA4=-cI2UGjYnAUyj<$Id{y~z`&}w5L$iENM^M+.Q&XA$' );
define( 'SECURE_AUTH_SALT', 'n(>`Ry:]{xO;c~EZga1a,u7awbvS0JoRYVZ#B[._>,@%$v6Y-y[/8a`^8t<FxLpX' );
define( 'LOGGED_IN_SALT',   'KZ@f<g&c6sjR{?d>LZAq[{lDdGr5uG+@kqhtZMt6`Lq!F27c_bu5Bxb+Y.jDo;; ' );
define( 'NONCE_SALT',       '0[epmP)U-8Ox>gCokDSg7}Z^{V9^cJpaM|lYIKm[dHPkJ;sFFL<hcjI6cr7cp 4c' );

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
