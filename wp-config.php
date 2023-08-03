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
define( 'DB_NAME', 'pharma_ecom' );

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
define( 'AUTH_KEY',         '7#@Fo+4p3tI:3g5C2Ye<@,)jUg6vz9PUEURY8q%ElE S_LI@_.V{01.E3Uh?;2k.' );
define( 'SECURE_AUTH_KEY',  '8:0n=.I/av!$$h)s<3&zPuL/tp!vamt_vJj6^t?yk69rv+781] ;;&uafO2?f!:x' );
define( 'LOGGED_IN_KEY',    '.7~:F?^/uJpVj4&K[p|/~f7_zk/$`sHE#,e*[X(>X(VaBK:3nb8)EdX<nk~X7rzD' );
define( 'NONCE_KEY',        '80ugO^g_!O:/ ItC^%~qW(<us[O~^~6@:Ox^/p9_)*Hzp)W_5q`uJ,l)G$/X8Q|n' );
define( 'AUTH_SALT',        'V-^fx?@nR/y?z^<-Q;7Z85o=I!THGnccf9Z#~NdI<1`NIPWF3D2>Za&lHQXy!JuA' );
define( 'SECURE_AUTH_SALT', '4}LXfSh-ODb3r@;<bNYu(m%.PA)j0E+v8kKFK$X~Lhz.Q(@^0% gy$?d-v<@!0}C' );
define( 'LOGGED_IN_SALT',   'N#t9r=+C+E?[H9g1FeDRWW.A8^ZP;@3K%rp&=XCMRw:t=L?+ /WC0p(2},>zaMZS' );
define( 'NONCE_SALT',       '@4-xp^wn>1t&}f272>aFIYOkJDpOtj&@%WJ=VWuKYu:@a9&H7Lv@}efbX.SK^hs*' );

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
