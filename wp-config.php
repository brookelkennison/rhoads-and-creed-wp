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
define( 'DB_NAME', 'website1' );

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
define( 'AUTH_KEY',         'rp!.QY7#bS>c~)IS=ZCMB74cYB8lJz1;qU.a14K|4iWp:`d4hfY* ,7_%r>g~&VS' );
define( 'SECURE_AUTH_KEY',  '~-:PF 2K1sNB<<H+o,^/gS{%_gar,:ucJ#klkAvK~<[O:/,ZkD?If*U)TF8hr>u=' );
define( 'LOGGED_IN_KEY',    'd14r5R2KEIqWq7c{]<Lea6xA01jbU-Hs-INr-pPR7vZe{zzOzOl)&W^I][MVfj*M' );
define( 'NONCE_KEY',        '-G:HHLZ|760;x4[m~G]}s0[`iP5Y,Kn6g]?cGP<eZbjRxv8/QrVdy([ySGe!DuQL' );
define( 'AUTH_SALT',        'J 3Gp?Ly9uMkaRh$wDcEhw`oT$?c>T!m(K>Wp%o8R;_{6YYAFmJSYT2mJVy%X1S6' );
define( 'SECURE_AUTH_SALT', 'a5+x(d3Yb&XOzHhN:y1vZ*(|?b=H9TP_*071?<2:3SltD121N_{BitojJ9sJ1,oe' );
define( 'LOGGED_IN_SALT',   'FPOg`(/o>4Nu@b0.z%(sp{F*^*eRM*0XQ`KE!+F>W)V}3K(SWgH5@KCL.voz{U.C' );
define( 'NONCE_SALT',       '8I#cVMei8](3(g&kH7=p~>(.eLY2ds9S<&[y@(,4Qn5-}m=)b+*>si+CDuL$pZ`q' );

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
define( 'FS_METHOD', 'direct' );
define( 'UPLOADS', 'wp-content/uploads' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
