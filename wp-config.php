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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mix_fest' );

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
define( 'AUTH_KEY',         '*PutE{;:<uW[j]]l#es6o<_<*6w(CrE8ud$@9/!L.TCu(Rs$5I,:M.-Qw^-B8]8J' );
define( 'SECURE_AUTH_KEY',  '|B9N]CsVtjaXmbZ&dw+@{MbOCa88487Q41E@W0}A:6`#2{Yak3Ej>ti6@9nH#C{,' );
define( 'LOGGED_IN_KEY',    'mH INAivhRlTv_Zjp=-U+%Rs5.MMV(4YqQL3$OLD;}2^w-W~7L .D}3rIoEOUaH4' );
define( 'NONCE_KEY',        '#x`hs~gRgJ*rj{[g5#0#n8*)`sX#$dLQrnHP?MJS!m7ywLcZ]W10uLgfVrQ vw ^' );
define( 'AUTH_SALT',        '{|<:!H|5#Y4DsA,n/X2q:GRVYw^Kl#rd4`NrcWA[VPq9a+S3W$.ZPqs6`/1r]7_)' );
define( 'SECURE_AUTH_SALT', 'oWg@)4_6Hy4h<OGnR[TMjzIO3Pv-_6+XpL$}^;:N_M=6x.+M9n_5u7}=?tIY)IL;' );
define( 'LOGGED_IN_SALT',   'J4qhU ^+l.TQjYc/f]PAq;yZk~lf{SG#V|m?A#+9)N/NTC>od<f|VhCeRdZwZ]YR' );
define( 'NONCE_SALT',       '~E,V]srk}3?b*e<eewllJxJrL-HJ%}Lzv8T=$(G_b!MCYQ}`]la8p].x=ucKJab;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
