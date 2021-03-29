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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'door-sun-magnet' );

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
define( 'AUTH_KEY',         ' Hi=,0kZYrF(38B3LAU=`x1_%xS*(,lERyDafiEgNKX9D]@e,[r{&Pd~6av)r]zK' );
define( 'SECURE_AUTH_KEY',  '%`+|cD%7G#h4-CfTd6,G&FU^`vnvs5o/P$d8;2?z~Po0|+u[AGsQr0*}B*T~/as^' );
define( 'LOGGED_IN_KEY',    'bWE(xSPjMbo0*ZQ*_tORZ@EoMbw;;^eg=LZP+.Dl?.p_*[HB->rX$)}0^v[,}p/7' );
define( 'NONCE_KEY',        'GiOd]W-!]e%[](fcQ~B-1n. NEo*&t!tc$q`P#de4<0?Gez3fw9VN7ejK*StL9&n' );
define( 'AUTH_SALT',        '&a~~{;Lu331u!X,DAO0Pg4 =:_VmpmZ WV215NmVGi7`=`9d)krS[YexddrJ0}q{' );
define( 'SECURE_AUTH_SALT', ')h9L)MJot)w>q_:Yodt~g;Pj^Oz!@0@n=D6$&$9j&=[0Z PM*EWV74<M^6HsGH.6' );
define( 'LOGGED_IN_SALT',   'A)C0PuS[xc+T>:LQc`J}JV%BTb)*Lu8vh4HcQ.xRiU=jdhgTMW4Tu4:A Fv!Dr<{' );
define( 'NONCE_SALT',       'nc.9|uT5~r(;c=gni?)=CLUrVB6{y,&J`W<!BxtO;]%,Zvtx5bjM^A:6U2kd9e~2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
