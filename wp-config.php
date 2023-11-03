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
define( 'DB_NAME', 'biscuit2' );

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
define( 'AUTH_KEY',         'ixjE?F8:a^q@:!4B#_tD/^8UOz.O{1?&ucbKJYYt3;^+,yo0.@mt_WA{bk5NWeLr' );
define( 'SECURE_AUTH_KEY',  '&HI#t-&$B>>s{lj6tk~EwVS9M~B%Shbjh&}=nT_P%tGIpWW M;SLv)yOuQ)cN^./' );
define( 'LOGGED_IN_KEY',    '7V2u=]b n5MZs9CBJ~Jb}J$kW3]0PKY-Q f{yq# n6t[T{VoHZ>NMwj);8mEZOEr' );
define( 'NONCE_KEY',        'iWth7n8hDoKwQgxpv+Clc]49=e)Y#zMk*v.0_%l4*E/?o%V3F~,BHQi[<C +v}3*' );
define( 'AUTH_SALT',        '$(p73$WE{ss@y7.Z#eb4/@34d1YJrZg#g)=&G?uTvLzs`X&b)le${.SopLEdGnT#' );
define( 'SECURE_AUTH_SALT', '4$1o=hO@?oz26vVMkdlf1^$=+D k5%Q~)~// .%?oLbmK?O.]o/=T : 4j|Uc>St' );
define( 'LOGGED_IN_SALT',   'a&PdRBfUl4ad~gA-I#N,[-n^+)6E8gqv9fN~BHgjyELmW_u7/KR6M2fysXv({}]2' );
define( 'NONCE_SALT',       '!,cU+*IA^lsS:jBuPvkAga|+I 5#Z=qp@C gZuOV{$vS]w)#+^=xe362U3R qxsx' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
