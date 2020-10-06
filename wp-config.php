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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'jDI_6h/U8podqdlO`Q^fCyzz9N*w[@{/!VXn+RWXxs7EH@`Wc_s;y4S.$);b}X+S' );
define( 'SECURE_AUTH_KEY',  'M6en2c#NLu3]-+!-/pf~FFC=M: w{%e|cD^SgY_evI(ucxKOuIj_t6DMh9z#TD~b' );
define( 'LOGGED_IN_KEY',    '{WdYU_a5[F{|L),jr5yD,*r_-.lV;MO%E_fGF_0J@~x:;KJw 0lfCrm:jWs*1wKY' );
define( 'NONCE_KEY',        'euzEo0Q7wD/I.FvsR.h#id8->:INO~ysw>6n2ys@X+:q0PM.i1<DF}Gl{tR8GN$6' );
define( 'AUTH_SALT',        'T3(/j2Jopp=6!LB2)a(-4F{N<@oN9,klF./{{IF`J.s.^cdI8Vd<o>C$IdP%Zb{;' );
define( 'SECURE_AUTH_SALT', '%Um3SCM!jbu$3 z=S]_G~3Wg7J r.WfHO_Z=9(3?]HCBhA9:x7S*~P&@z}`-hp^W' );
define( 'LOGGED_IN_SALT',   '<JaXnt#BPIiii8#rb~ZOm`.6Ike5;ZAjRJS_~a .rQbt/nmPDYae17}@QKm7dx@[' );
define( 'NONCE_SALT',       '];_WE|iwX-i?bPo,412:+A>zXkK3nl/+S+8S`f1htF2V7R~n[yKrTH)I,(c1V|b;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
