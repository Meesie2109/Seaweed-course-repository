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
define( 'DB_NAME', 'seaweed-local' );

/** Database username */
define( 'DB_USER', 'admin-seaweed' );

/** Database password */
define( 'DB_PASSWORD', '2O6wv28g@' );

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
define( 'AUTH_KEY',         'A3R&<}6$P1swUD01_ v8WO$Sn?){+Z4?EDZ5.ZB:h>&&MqmJlRKhe/U8xG3T.kSt' );
define( 'SECURE_AUTH_KEY',  'i.G1gU_8b?lW&LpoR8O,^2NQ2}e}lOq|+%Ki^4H`@_b|Qugn7b2i-t]W0Ik|y+`a' );
define( 'LOGGED_IN_KEY',    '-iaD=XB]n9ixsk]2IY::Sbr F+c(>tLgVLrSjLZ~U7d+3VK3GKwRz@h=?O@8}4/|' );
define( 'NONCE_KEY',        '[L$ANSxXegV$F(XJ#5__LHzkjMvu2ITRN(_Q]m,BSw%w@ deg+Sbm<$WI9 4jkQq' );
define( 'AUTH_SALT',        '~.TBLJ7X@Nn$T*}Z ]AL^6U>*jS*s<lfbrK.eNh`JVQ<?pLqbGNT(rsj<]O`^jqz' );
define( 'SECURE_AUTH_SALT', '7DW{xCOY7DoH]<;yZkvTfDIf[Q;cfiSMys/mYH{BNPc>!Mc*yC;hWBHhu0r*cS9|' );
define( 'LOGGED_IN_SALT',   'a#7^v3RMzGRgS/dM HxC;ZNqB:6VL2fH]/^TKCBH=fwxIbYI!ZM5^S57u5JSjK<p' );
define( 'NONCE_SALT',       '* ]wVt p%S-`U:MYreC[j=L0m^[M0:lpW+6t<zm,6lCEWp:`f4(ZFkT[Q3;>B/1p' );

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
