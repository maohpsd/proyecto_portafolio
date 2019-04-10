<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'examen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gV+|X4rU3x*Spl5Oiu,j9)YU~PZ0Euhsn,W*%NH^Mj`i!tI8o`E;/Xct6fmg^jON' );
define( 'SECURE_AUTH_KEY',  '2P$Z%rQEJj@E8A?l}xf`A~|zyp[ga|>IAb*CxbKo>Z]/Bs,x&sEhB(HANQh:WI&)' );
define( 'LOGGED_IN_KEY',    'R(Bqtznda}%!T.=da<c 9#BJFiN0b1J%GvP0|<lW39%I{5/is_K/(-qTkW<bQ-/h' );
define( 'NONCE_KEY',        'fv)YP!#sk7TW08vFjc`*I*;|fU]0U>Nkv-U|f}WS(8ua_OK%G&&^Q|X8;5>l0Xub' );
define( 'AUTH_SALT',        '^ShpH/L?up*B+mHgg}rQQfr> wp,Yp#ytt@;!4~FGr yu[Qlg,iLj q;Le7CdIo$' );
define( 'SECURE_AUTH_SALT', 'Tn$TR>-v+v[_%eszCSjRJBK9*r<I}3S,J<mY(zBu`8n}~.LcB]C9{XO|j:TGH%}3' );
define( 'LOGGED_IN_SALT',   'X{C?wP+)%,UQI[q8wxOo?VE<%@t4E:r 8w`pCJ?2wp*4sa^?)M7_7K$:O*apS`<#' );
define( 'NONCE_SALT',       'y33EMseum,3P:)7P/WF;C@jR?&yjFUkyrPAga5*fj0h)[Jw.vE;,-qd6JL4R0m$>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ex_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
