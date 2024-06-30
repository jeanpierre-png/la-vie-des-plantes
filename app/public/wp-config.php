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
define( 'AUTH_KEY',          '{,$`6wZ]uUNAIzkgjE^bk^P_ExH)B]O :TTXxfemFzgLj~t_`>#CX)|ae32s2r Y' );
define( 'SECURE_AUTH_KEY',   'qk `i4E|85(eB*]1?[(tFmosy9o==Lp7B9(q2<&9LEf{SU&4`?r@(=M*u9/2Vx$%' );
define( 'LOGGED_IN_KEY',     'K8%>&92)vOe;.^7xFXF+&j;cF@A{X!x6sY|9b*[p~U1`-!Ksm&09Dy3w>[mm,ys$' );
define( 'NONCE_KEY',         'X-*,6#rX[wuy#r.F65HZ7:[NuH`:VQ5oAoQ ~)~QF[.h$J/oG#9idgLf7]Gw 0/I' );
define( 'AUTH_SALT',         '$;*r.R*(gLK}r7?kB^s-FTu-Jy_Tv9!r_1N3F=|1auP|)n2~k&J;9UtDGx AZd?{' );
define( 'SECURE_AUTH_SALT',  'LYy(FSn.,J7.e*q(EK:GO|PKZ%v,W^?KK52v~{@m4:nx~QOl3PCs@o_Uuw/MYgyt' );
define( 'LOGGED_IN_SALT',    '?}k>@o*tNE(y4L{vbJ1qu0[)Y.h!Y8jD448nTw=]kz~H.cE7eN,w}QStEwQ;rk/h' );
define( 'NONCE_SALT',        '3xF@j}uk* PwQ,oUwB9  G9~,rsOuM nY}&BjErR$r8pxkrYJ~:b40(8XVl| #12' );
define( 'WP_CACHE_KEY_SALT', 'i7=P&@v#:z8<iWl-t(31NysZ2q!v-61xW&Nutce=VO22FZIM{J`Zt!,Xl(Qk Z5@' );


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
