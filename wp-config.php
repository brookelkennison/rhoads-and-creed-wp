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
define( 'DB_NAME', 'website1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')S,@3^w/fS!EB7^7C2c?ORF{%7BMPoqRnL^y48nc756I@[5@8-LLI,!FYNqGe@nP' );
define( 'SECURE_AUTH_KEY',  'Qswl$9~&e^}=aWBFR~zF;-5Lyri8KdQa68`H$5nM-O7_]a~D(NqHw@yxLaUl:o3P' );
define( 'LOGGED_IN_KEY',    'c-^]i~vdfCWCs-|y1?r^n5Tl,oj^~_DeTlGz*OG a*UCOtBrPmXqD{%T39J+8/3$' );
define( 'NONCE_KEY',        'LjchtYxQf9z<yLw4k,c~)kx3YAa4S hM~;mZ4d9vA1nVzKMq1:iv+)DulNmLt1_y' );
define( 'AUTH_SALT',        'X7,5*@z}XGAN0,|@w4.vg1KwKK;}B~uZgPG XU|]1D/HGh?`(<(VWJ*Bd,fyFlNP' );
define( 'SECURE_AUTH_SALT', '=__3:0~rr~ZVTq|OCfh9i$ZT9Rd]DrB arEr ZCj&?OcYB[-eUT/YfBO>O/iQnI8' );
define( 'LOGGED_IN_SALT',   'W4X;.f2*YoIbP+U*+~yJ2X)wjoKDku;uTu~,hDwfelp4}WFSQ0)YHgaDYiLHP!GL' );
define( 'NONCE_SALT',       '7Z}x+C7p!<kj[i{Ce/;#$7?->@e!5+[0&7><%x@`ObC8_a@2Vvl]yK3)=5KxQiIP' );

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