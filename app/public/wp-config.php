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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u:sI[zrYehzikM2qn`T9)oD,%8(;K^lxVHR{3&,7<LbkC5x~S3hKloD0ln@RjGIc' );
define( 'SECURE_AUTH_KEY',   '+QX :pW94IpL3ZnQ&Irvh?&54RGO&`}^5;20:}+]uo;7FTv./fg``^be?-clXRXM' );
define( 'LOGGED_IN_KEY',     '1plTVn@ 2)|OI`:e-{%yKEPXIB#iUoI$;(<KPuLmT#VCiyB|2ZUF=EWbK|QK$E6j' );
define( 'NONCE_KEY',         'qH/s^Kf7XCN~{Mt6@%[>1@zDHU{T:!L~,FamujQ-Uq-Tw6fbKTkWO0cI-6$UQ F ' );
define( 'AUTH_SALT',         'imV@&Do?o}([AW=gk8zD{[l0`PSnePaTqlqoZX^nHt 7iwqO9V5N&Ji)vMZ_%p[B' );
define( 'SECURE_AUTH_SALT',  '1_2R1yK_y4Qpv&QX6<gJcjbL=]HrKu~+/UK}xO|UV0]a!&)_V<WKP}S!1P</Diy{' );
define( 'LOGGED_IN_SALT',    'Gf?1_?ZBEpyA(,EibywP0/lF<Qz]y9b6(r;`f(ma8S/CyqbmQnK|6?;3m_U5~+25' );
define( 'NONCE_SALT',        'W]lz{0QR9Y+z&JNd`lHrpI)S1ounqJC&SxTZ7cIu&XuB[/GCDZs%,/g5u i@;9,2' );
define( 'WP_CACHE_KEY_SALT', 'a[i:.#zg-APd*mH4N#h49U7V?fp~>w5.@jzEZwOA:T,fs%2KP9^#)vgA0f4Y.&3v' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
