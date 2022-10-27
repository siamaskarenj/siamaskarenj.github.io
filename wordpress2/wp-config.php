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
define( 'DB_NAME', 'testwordpresssia2_db' );

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
define( 'AUTH_KEY',         'K*vF)C<TR+?z*ozuAT9MQU}AOOXf)@Tpqap4Z/;pZ%[HWiTV(Hj)Aic|Ai7=]9lv' );
define( 'SECURE_AUTH_KEY',  'sk|nS~mNTy~O>lb>IjAECa(^V%ozO$jw1E+mzI:Nm,1*l3#u/|1Kg<b25tLdK7|d' );
define( 'LOGGED_IN_KEY',    'rq?yh3B]iR_P!H85 D$e72-rQzYHPT*)HPs9ryq9L5{,fY:9`N7s^qO,DRF4}~^u' );
define( 'NONCE_KEY',        'rWnj#a>!/O`X0t)[ZMrZ({*4N%PLDZYvt9QzNeziZoUNWUF+%?R^;*@HJc4fyh|D' );
define( 'AUTH_SALT',        '1(8xXsYex4o@t&B6tf^]`W-n4#AdY13UJmoV[GqnBj-!x+.0^_^7(U}rV6TJ#ybr' );
define( 'SECURE_AUTH_SALT', '.aFE1WEz@ygV0B^*Okgn89XB_oc^>P6u=|~u<_Lo$#e:v8:8A(gl(<R*mIR;tR^2' );
define( 'LOGGED_IN_SALT',   'KxO8 dXb=>tw]!-P3?LZM+BP~Bw~PAc-I6G9hj@pnG.-_mphNzWKm?.`oHvXN&|2' );
define( 'NONCE_SALT',       '!4fd]Z,^)L|TzB0zF9h7}IdlauPhs4=sl,Z)F9=CUl`i$eIN79W9^|N4$ivc8-y$' );

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
