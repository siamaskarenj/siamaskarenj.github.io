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
define( 'DB_NAME', 'testwordpresssia3_db' );

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
define( 'AUTH_KEY',         ',M2$tfjOMKiA^`1&v77imgqw{%G-?blqlh3lkw+|phM~c{_ED]wDk(xV}9B0#/Un' );
define( 'SECURE_AUTH_KEY',  '/c{t[v&w2Onty`]6))1[GO<StRzVk&m*[&&2U:JR-AC_qiA$qv2,EyJ?vR2HLC*G' );
define( 'LOGGED_IN_KEY',    'Q%?dk?#~3dR02-R`U0-yo_*bR5HC[[Z_z]6A55f1Fdy.y6hAe<dZY3K96m,$&9/X' );
define( 'NONCE_KEY',        'ST(d;9O8g8BG-20.3%y>1QsZbtzAo(:-1qB{hq]8@~fc%_@,Ur$9t.O^q(JNW0Qm' );
define( 'AUTH_SALT',        '1mSSIVQU:8Qk.?m!x2J=Wh5vZI<C5wy/ kcAk+rs?tygn%EXm59kiC3_e|8HPPo<' );
define( 'SECURE_AUTH_SALT', '`0Qgs/fY!^6rsO>:T=1jQ-S1oj*hW?b|Swy,BvhOoU(c@#&zp_6c{n23kN^52<My' );
define( 'LOGGED_IN_SALT',   'CQEj&/Z2%fe.s!w8E%`$e>8g/zu{F:8]#_S.-Yfn 8b|n)%5=sb|~yfq7}0V5INX' );
define( 'NONCE_SALT',       'N9~5Q.c9g@%Zcv<JOWwxmX*L!)B`n(-gri?;m-GrNzLY}/E_.Ob!W(n)(bqHmW(l' );

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
