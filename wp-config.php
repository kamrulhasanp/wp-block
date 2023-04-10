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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ',i(p#)t:<J764Q!6+dRyE&V.lfW/%W.yN#_t/%e*3Q.Q/of2FK(`h#{6/zKp(#{7' );
define( 'SECURE_AUTH_KEY',  '6X9LEkBt)TfXM9Rx8n=,^dyauS9: )a0qbM/eOw,v%DBt29Cw[8=^A_T<Y]v$T$e' );
define( 'LOGGED_IN_KEY',    '4D)5Ubah9OHATY*nnz7c7uGfS4KWkOBIro +^J)_HWy|Z2v-f#PjPL~.+: 30lTg' );
define( 'NONCE_KEY',        '6hXDrqj$(eWiP)m2NO9fB15B-[|lBf+V dEoLQ9*SDe3z+)4e<Sxf{JAeNo8da,h' );
define( 'AUTH_SALT',        'xvr,koS+M2R75K*5T F}<Dg<F#*{GLw..22p>e%0*4[>b<bsS)H0Nu><<D6nQ!}t' );
define( 'SECURE_AUTH_SALT', 'tQ@`#0346R+m9YnkLaOf?lG#)#+3zgva2;5d1,2G$bPCi}Gf:Id}t1H7)gSE~K!=' );
define( 'LOGGED_IN_SALT',   '18W +V&U(iWSYD<)#Aoh2_#MQ0ap90glhMAVc$k^W[+ccd=PwJ}UK.Nz7jEvRS ^' );
define( 'NONCE_SALT',       'Lek|G*#Y[M`Kl_45k2Hun:MEG+urz]~!WT:x7{o!tU.5NH,%|9w}ZJ*|d;kF]W]a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
