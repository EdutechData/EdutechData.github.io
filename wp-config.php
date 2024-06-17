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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edutechdata' );

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
define( 'AUTH_KEY',         'zWtz2(hI9q{HI[/O*lVM+> +%W_TUX.6o2xsYEa*uRS}o5jt*v,W(,xA($j?MIY|' );
define( 'SECURE_AUTH_KEY',  'A1$d?)<!aFfiWy9ZrN[G`qHI.Q=xWz/p>8df)e~sZ?OD7*PP{qGYCD4yWN6];Z0T' );
define( 'LOGGED_IN_KEY',    '8f#0Ef>_|GUwq`|/JR oW|pt4lNS%}Eor>+|;tNoY[s/z!]7 NGup6#@DJF8S%$F' );
define( 'NONCE_KEY',        'W[t7u:E,?,aBS}ir3Jm8Kg%hJQ)2uF+$Jn_C6.m,RiZ3a?)YB?OBn>k (oN;+`hg' );
define( 'AUTH_SALT',        '{0,<nYqPaQC#AFTL#25$J{`)IG?rN5p#iOY3h8$mdiyou,Xk2(5jT]~UJOVw_X`q' );
define( 'SECURE_AUTH_SALT', 'Df|oJBq r` H9aeuT?n7e`Kmbsm/<;z?.vcwehN_YgR=d$@]tka6V!P9t3-;|X=}' );
define( 'LOGGED_IN_SALT',   'NXdYr~eCGb0Eo2T7qFXB7Radu/u[ik{5rtQRry_N$Vd$k:k+sI<`|-&,-a&*s37B' );
define( 'NONCE_SALT',       'Oy3yh]]qP.*>{o?P.:qU @+k<B!M^@-q&)<&;GJx*CJy<O6A:QL2;OroyH=l<-.,' );

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
