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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']QX+ b*hhUmuF/4],z`z.:4D{aTvgW+P}FeA0YGH*d9|%,$S=2h6+:a-~B%qHLz+' );
define( 'SECURE_AUTH_KEY',  'OrJz0)im{]s$1cB[3l*e `hd{6E^$Z$6t!D^L~H(V.{89IRemL|`Oc7*q+j6>HxB' );
define( 'LOGGED_IN_KEY',    'Mw!rdWiQxIUNZi0+MD4D<d7[RBd<$IuG^33aC#4t/9n/.~$l-;#>UFqr OkI@*60' );
define( 'NONCE_KEY',        '?Eo_]~MeVU7-RT-90oH>Y:4U) Vv-S{rohz%_Qsc,s{vEiwA3v*o<^;()uI@_kfD' );
define( 'AUTH_SALT',        'Q{7dv<hKCiTYO+5Xh6U#L 4a$H`pChHJD$D_5#?U916/3H+Ab1];v[Qv6t{^t=c:' );
define( 'SECURE_AUTH_SALT', '^);H+!6o|{ZjWK#U7{%+g/Zos%;@Xc;1aX!8Y9#IdR{Q+Mv98t$hU#i-_$AdO^=y' );
define( 'LOGGED_IN_SALT',   'YIeR8GK{uA$+~]*c)!!ItDlJ/0[!`IB.,$TH8bQ$n5Q;PVm(<fRjnl7gN0_@fNR<' );
define( 'NONCE_SALT',       '-<q-@H6>+_z~x8HKNx=D8]&s@$R2L#GK(CW2zO,r/5uBN:S%<FNV ]2@.!TVA7MO' );

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
