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

define('FS_METHOD', 'direct');


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'sathish@108' );

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
define( 'AUTH_KEY',         'Qd#F>b<2@pfyX4!app(jyh_1o%$MV.B#RS~r4_v${{fKp(%dF$]S{NFsg*~F{rFW' );
define( 'SECURE_AUTH_KEY',  'SbLlq6}a%^2gT1G!9^~4j5[tN.:b+fkm$UKN4(r&N*rV_n+07Rh9/;cRO=M0_P2$' );
define( 'LOGGED_IN_KEY',    'c`Jn!S%/0cIr~x  UAlQQ`!Kp$TEI.[kdr3&KZ7$%:V4/{GyXXtD7uS[9O}1g^<U' );
define( 'NONCE_KEY',        'KW5BBfen|YR=bp:IM@,L`+} 20{%y[bA`x(]NiE|47cc$&CEYL3`#3vcJX?M0;zd' );
define( 'AUTH_SALT',        'IJ~[{aO0V,^A2qcC1:HSa-1Dx6H{>yl P=1IbXV;SteC^W7~J,+h>kSUss~M-cdW' );
define( 'SECURE_AUTH_SALT', '6mpD;.,KKE/&ErT)Xupv8L.$.GTC1[AL2(a-h?Cz?H7z.hEN1KQS_pBN%l7QemAL' );
define( 'LOGGED_IN_SALT',   '$F5(@^nKlv}7*~fv{{Yd*9q4ztl>OjbP*Eh&t#go%Njv*(Re|NScfM9J|2g._f23' );
define( 'NONCE_SALT',       '54[-EDD8822qmEMqH:ME,o[OxhxYnP|8nZNfM]XroZ>;%g~.)JIhQ/l>eU@x&1u^' );

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
