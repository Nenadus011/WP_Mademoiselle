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
define( 'DB_NAME', 'mademoiselle' );

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
define( 'AUTH_KEY',         'I9&]q_=|Bel+N_DHc:ruiG~8aJJ38[0b$l6Xb<r-PpP=YZ&qW(v9}AV+<z!vE7*d' );
define( 'SECURE_AUTH_KEY',  '>8hA^,[d:`yD%&wt!*y;rypWx6jwI)o$BlY2a.!4jbRh;&h44)_>Pa: V:lz|kc(' );
define( 'LOGGED_IN_KEY',    'T7CZKY+c-g|9V801Z)?3k11`y*q%E[ky.ie`^_{flQOX&9B:0%,U8,$qZ)CZ4wZT' );
define( 'NONCE_KEY',        'V<xh#=%mJcM*$Ab%a &P0q/+0^N1r Fg*_wmx%t@hHi1o@4wdh MH,hR )1jfT!r' );
define( 'AUTH_SALT',        'q#|]nB}[~%5*M/3!(]:Hw;?m8WoR.[zBI)gHl1yj#_x]M `HKW0%rQIa5yG*i_0i' );
define( 'SECURE_AUTH_SALT', 'aPi$_go4(F=bqg=t19.3H-ZAq6 P`_ZeunwcJOJ!nIQF7{]~S=&d(uxD3&^tl1:H' );
define( 'LOGGED_IN_SALT',   'R5$0ieold;8wlA_KCL*YB1}v~swGR [w1x<CD57v*[8 K gMK_V?Vr)q DwreA%R' );
define( 'NONCE_SALT',       '4,A1P^(gcTfkbubN=KP10F[ltcXI314RAO[209C2CWWl]?t!L?|k|r<b7tO~U,a4' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
