<?php


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sujaldas_db' );

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
define( 'AUTH_KEY',         'l<Q |+Igb!wtuh)Dq.qX/BIW@[{|BgVbJ9Q`{*P0.AVt*AnN2HYyjlsYU-)%(M:3' );
define( 'SECURE_AUTH_KEY',  ' x~@A.F~<j~;Z?DA;#-oj9XKE6d%F8VfVzw@UN2w}fzHkb>=-P.9ijOs~23Fl *T' );
define( 'LOGGED_IN_KEY',    ']@#r|~R?2t1oR* n/ZY2{MC&R-}9N]&wArrofW&VT(%Qx`u<Ek9;hKk2oP:|R {{' );
define( 'NONCE_KEY',        'x8y[c>r^Qh}TrW>X9EB^Nu?{QFLv4A<V-RIdol`t[<Z0Tq1}$ZO-}KAax3IGnQUL' );
define( 'AUTH_SALT',        'BiP9H{u,tI0yD2d kP`=:7pU ,t]G?q<T@v=~yohZCgfN9mK)Y[J}.ra$Sz0|(Pe' );
define( 'SECURE_AUTH_SALT', '9;HbIX?$8J:-bmy/9l3*md#F#K`&a8 ]>z^*=Fs%t0]lTlz&z_u$s*0$!ac]x:<=' );
define( 'LOGGED_IN_SALT',   'Nr,e9q,~8+SL{*78G,RYm~hbH5%+jjr!;p}!dpY%_^gC!v{,:2CRYgZlGWkSGs0W' );
define( 'NONCE_SALT',       'Tp3:Uo!fB(eC~=>o1~&8E]OYLD@u|&(-rIp;ua}mw(]Qm6f2>OHX7p]sAS<#qb;z' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
