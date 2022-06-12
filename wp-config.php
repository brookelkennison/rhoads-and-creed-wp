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
define( 'AUTH_KEY',         '4KExWDfVgEsJ[Ly+*V(re7$`Sh <@2nE1?foe}[3D.* 3AzJIjL$ef^RU+Z=ZRR]' );
define( 'SECURE_AUTH_KEY',  'zL+?h$[Nfjp&E?833e5b_{6W2ppO7V~:BfPJLF6OdH+k.K=b)UHe];[BeWRDd=ub' );
define( 'LOGGED_IN_KEY',    '|bEwO0: m6e`eK`;##Qc*+A9P4^u6U+WE(`%iyr_GMq.V}159,COvaFAd?,:tDwM' );
define( 'NONCE_KEY',        'dZi{^tf#f>Z|)mZ6*{5J^PLdySaZd!@/wL8FIC>0/nk2aSvXLHT=c>q3Tx}$r Y~' );
define( 'AUTH_SALT',        'naeqo7wt7;fomv]M_`:gQO8m0kP.n8x=pr<qEHQn4?Ltpct+WcZ15)Qi:[~R[ajS' );
define( 'SECURE_AUTH_SALT', '^@!$l<t,es!I$c/#x-&&cOVDW:C#._D>q]l(*Z)rHJa+o`|t;XZW<2b[BJ3-s^T2' );
define( 'LOGGED_IN_SALT',   'u3:V7&e}u{J4%HYWE8BUa,(mZA@Icw&r^If&A^GmWb>>as+/n~oXc$uO$lIq`P?(' );
define( 'NONCE_SALT',       '8L++cu$1_NBJ3kw*6Ug]trtFIV`[YgWg7kkd kbNHpbPu+ARu<0W`k,/%~7n=p}x' );

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
