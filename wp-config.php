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
define( 'DB_NAME', 'main' );

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
define( 'AUTH_KEY',         '?$?B]C )74^#n{`K]zZ/8x_qNYb7LrRP>L`0VFzc|xYnNHonH?mg?EN(Cg]D]{Gb' );
define( 'SECURE_AUTH_KEY',  '}wBk06/1}by1Tx^uDOp3r9j=(QtR92F;M^(]zdb>1.RCui166ch}))_A0QTvb`aa' );
define( 'LOGGED_IN_KEY',    '4lrWV.p=1;3bM)en]ysMj%>7C=fD7Q,qh47Je1%Ly`4p>}T ms5elpXe+o[7TxD:' );
define( 'NONCE_KEY',        '>SCD[GK+iX%8O%Epr{=R;UrbnJm4ZpN@h[Ys)XkZZU2l0:M%&#1THF&}_0mn^b_Z' );
define( 'AUTH_SALT',        '8MHEw#1n_o6DnCju,[/|::>Un$pBWtm|9O%leq7,*fhsN|<ES-cU5mpXavr}X ha' );
define( 'SECURE_AUTH_SALT', '&Xk?4b`@`9f:T/_HGX zwl*h88B{1HgMAOcT+GAkJG 9MV~F~N^ADeNoeMq,=E;2' );
define( 'LOGGED_IN_SALT',   'E7DSD%yt+e(ua)*;D(#~sDdkhvR8Y&;dlzoN*mh]@k)QTV1#j#5Y%_Xb47thEYIk' );
define( 'NONCE_SALT',       'c {@B5Si>iP&1qgGP@;99xB??F8;/nvj 5<Jvvd([zo|`*P7LxCQ21@8U4.jeKG6' );

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
