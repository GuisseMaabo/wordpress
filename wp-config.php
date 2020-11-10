<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DyWP/g%_O^PZv(%`<#Ow=jVJ.CbplcsAK/Ry3uwE)s -z+Oq}{Xsv S09ubFitNW' );
define( 'SECURE_AUTH_KEY',  '>K^?jKxcI+%g.M0##W3>`.qyhCBeqrJd%/kb#e;h PUd@?xO&+C#ICq]5Mj(SZ!:' );
define( 'LOGGED_IN_KEY',    'f~&}a{Z77i0bp*=aI~]js_zPoGEF}*71~):nr*MH%&TrQQixqB4:)!Xc_s;k,0l[' );
define( 'NONCE_KEY',        'Y=pYOx;%]0vO77~]KxXYiBFViDck{F b>:_JA=w}K!Iis`nJ.1($[==nmv+?X*U7' );
define( 'AUTH_SALT',        'ZQ:ICW/>$l;-Tk@@kLgHFtm^z5;S*e<vF:iox~*} [cEGxbb=dZ4BWc27&o.r,(Q' );
define( 'SECURE_AUTH_SALT', 'u|.uMh>P#IQj+dv<Z$(i3s%LWi66EQfuzYtXt1T$CgP[eg&A0HDll<p%)Zh:QX_t' );
define( 'LOGGED_IN_SALT',   'm5#0 &lu0t(N0ThR2b?YU;9p!iBtViTu:l8bFm6~;>J!(iNx>6VXt>B6OcJ8g@Sx' );
define( 'NONCE_SALT',       '?/Z,]95*SyhfyLGxYTKK&;zkO@5Df{.OZWOI~_N(U;3yST-KjCbFl@/PB3SjyY8M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
