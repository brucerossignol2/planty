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
define( 'AUTH_KEY',          'o2g&f`Wx8enj9}ZhD|JVJOgzag%ie/[scSvTxw{8QnCtF00DC##,2>^m~cgY&&:+' );
define( 'SECURE_AUTH_KEY',   'eX$F)y;2Ant>0-f%E:v{kp<{L](IpC9V(945A8{LY/_XI]8;:oRB&|={nI0_!v3C' );
define( 'LOGGED_IN_KEY',     'evRw>uSQ4?(aco?h0+=9xj@v./L~2*R<P;+~CZ/>>*%6L<BaTv-~k]+QGL!xcG+m' );
define( 'NONCE_KEY',         'pF5x8+id,BAlWmD.LEEX>RdS{4h!)p5bA:Ofgn1Y`jNaK(C*?w/geo7d]8/G~Pa6' );
define( 'AUTH_SALT',         'gSE(IB_WawqCUf9{C<@SIdN-$3jv<:UU5NW,c/s`|yCx9Hw(=+2gfv$B#U4MaA2d' );
define( 'SECURE_AUTH_SALT',  '}/-d|lR#zCCgdYO%H^E5Ibke%:WJss~Gh?>(~;9BP%tV/sxl-VH@,o1fVQ/Wg5M~' );
define( 'LOGGED_IN_SALT',    '@3yj*kNc&ta$x^=Zogl~i5.0CRchy2|lVT=qfxicChx*tp|=s?o!8ac!sg<8E/i)' );
define( 'NONCE_SALT',        'oc~U7hdH%wW*2XoKOW%y[y,HlbsD$/Yzde?&ssio/:<Ln,y*^@CX oxQx)&AYUR=' );
define( 'WP_CACHE_KEY_SALT', '{WN|MPzAP`[2b-lMDi h4@#l6-wK<(f(7&Q;=q.:69loeqCde|2T5 /eWG(~&.<M' );


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
