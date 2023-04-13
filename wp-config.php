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
define( 'DB_NAME', 'bd_salyam' );

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
define( 'AUTH_KEY',         '5Yk-KEQ7X[Z8wm1nlnU-$w3I^l!UyY>1i8!o#b6Mz.?PwE;T1KKfFFX7A5WmEQkX' );
define( 'SECURE_AUTH_KEY',  'EaO*`V%LybW9REW:{x&I=g|XHn5]U=Er-D4(0E(;W.1A&!KhD$muS]*9MMRCeU0~' );
define( 'LOGGED_IN_KEY',    ':lD0~y7iur),&0+;R8Kf!yUL_nSwC3wA*)J i9=Tk9!qS|:<BB`Wl$2muac#d. N' );
define( 'NONCE_KEY',        'x#dUr}gkht|/gn>#37jg)RAA4]?{zRE%B5#v[J/k0vyrDg_.=WGqjPzrtn-r9tq#' );
define( 'AUTH_SALT',        '<,_m}m2 Q?-pb@sr](ahk1(S7>?wSz#bqGZL0lclaF{qHAOS,0DA=@E3zKzL_fIO' );
define( 'SECURE_AUTH_SALT', '6d;]rqt``{;;|ts`qzc3Im_/Pt}Vk.CR >)&[&TwO9}KyCQy1<QJh9qf+Wsr$l{v' );
define( 'LOGGED_IN_SALT',   '(]$x% mR$26$r##fPMhHpa#mX%s3/-ey$;],Ti^Pv#^._raS~J>f|aJ=*2(.je}t' );
define( 'NONCE_SALT',       'w{S,V%L#|Ue}m.J|Y.uqImkInV.=nbRkc%Q@W}.a;$B}}E8bO5>V0>.H8pI37J;{' );

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
