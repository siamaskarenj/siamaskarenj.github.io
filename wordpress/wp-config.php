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
define( 'DB_NAME', 'testwordpresssia1_db' );

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
define( 'AUTH_KEY',         'g!]L-V ;qu(CP2RL+>9)CqEE;M+3rtfN5Vi.x*]*](#LLO3q8D!a>[ElWxG ywgC' );
define( 'SECURE_AUTH_KEY',  '7y#BwNo@293,f_}X#U$+[<ECY{uq4Ed]&S,=KB[%WVp=NxxlmgdzJL}YJ^[oEf;K' );
define( 'LOGGED_IN_KEY',    'B`#VzB#Q,9l5d<I9yL8t{hmVfqbNYGs6^{7o`=R|-7(>s]#8-MA~h2a(_CS>DvH[' );
define( 'NONCE_KEY',        'c7{DK2aJ|e`9Cw[.$qT|m#@zL#6zRsg5s|^~>dzw^m;svWOQ+Vx5~M#|LI2/O`Ig' );
define( 'AUTH_SALT',        'Sxd.[Zl.Gpt)^#^CkXkDX8sheD_/E2=<:hAQES7{{cUPYwM<xN=)|G<<{BAMlp5>' );
define( 'SECURE_AUTH_SALT', 'fhC`6Oo=lz%a42B |D?x0OROXgNlFmVMd@5XNe+/Df<},q4P3s/|+4e1)k3 iUd@' );
define( 'LOGGED_IN_SALT',   '_7,#`0KeHDfQwglYPx?Q=Ahu5<xM#6k-QAXlXT//dYeiNGphh%|Y1cXx0bOL^7F(' );
define( 'NONCE_SALT',       '0Q1gQRKue7):LleB+E39~:Z!3oq]:`=$?l}U{RNs]O1^&RbFrL`O)0(&2@6+XA?7' );

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
