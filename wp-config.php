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
define( 'DB_NAME', 'freedom_sew' );

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
define( 'AUTH_KEY',         'O``6|n]]S]ZPfz1R{E|K:q.o1ORr}C=VselSZ|V.giB]d.tzVKu19g.|G2j3s@yC' );
define( 'SECURE_AUTH_KEY',  'quO{_^Fav4pA8:_79-{@rWxya9NL-AQt+)E_LNVmM/c%B|U{Vts$^%;bV[3ZJWh}' );
define( 'LOGGED_IN_KEY',    '}vXOK1I=NJ5Nh{[W|M+@rx<GtM b`exgVJczo.9PwBn?5.EwKJa_XPY.yOqy@[ D' );
define( 'NONCE_KEY',        'oT|(]{sJ`J%w*]&1f$nGDP0>htx!{a:w*^a:PZ|xb~v~<d-M0d033wsX@i5BCy9&' );
define( 'AUTH_SALT',        ',AsAcXI_@RCHWhk_;C]!EjQ{?TI59N9ypiRW/gY9*.{i*Bn)R:G7p39<A_=DbqV3' );
define( 'SECURE_AUTH_SALT', '0CmgCcAD=6ql0W6U9%7.DYvM<mc6im[A?%z;&@`pm?bQ{pJ6Rd<c4M-bUP-i;J7M' );
define( 'LOGGED_IN_SALT',   '&g4z:*d.yw:HI~?WZ(orYYeqd<dQ5P#p+^]{KOTBt9cg,%V~`sVn6kKtwRj}}(Oh' );
define( 'NONCE_SALT',       'fG2 D D)5osm4^~Nt}i(y-Lf&w.v*rV#/ks8F4 (|n(*|CmjxShk~j|hIP]ERa$]' );

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
