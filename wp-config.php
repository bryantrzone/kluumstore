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
define( 'DB_NAME', 'tiendakl_kluumstore' );

/** MySQL database username */
define( 'DB_USER', 'tiendakl_kluumstore' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E3l6?}Mb(8Os' );

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
define( 'AUTH_KEY',         'xTXop#3jg3g 1;(hW{w7GNgJwjW%BwVQ|9[CHsR]C%edFDM:Zj8hVdK?IM1iP5EQ' );
define( 'SECURE_AUTH_KEY',  'J.%+SBvgY@hdYIYghfj=O}Ym.yL:]_Y9>Qer0i8Z)PYqbZQFan.$T*x|{rHC$QO ' );
define( 'LOGGED_IN_KEY',    ':Zq)XM/TD%V0v ,sukS1{@*n]$ng0DI|JssdRqcGMEj}%+4tQ:fCT=+Eu)jiO)S>' );
define( 'NONCE_KEY',        ' >io[2fu;xt$hHPU}.z3A-pnh!2HK4I5K1 !*nYy5[u2N;_2Y~V@]T9[)CxB8DZ@' );
define( 'AUTH_SALT',        'u.1n NE6Apd@xBi@L.!qh|}xf)OD_|`B3Y+{;-;Ew9;wmj>;jEe]CL% `_Q7_:(]' );
define( 'SECURE_AUTH_SALT', '[W9pL4W[#T;IE(B(Jd1bW/R{<2#9)o-d.d^bC]rBu>9m@A&+Z}^V?JNja/SRXC/S' );
define( 'LOGGED_IN_SALT',   'D+*VAGZ7@GF?b^R~nCllr|03GFS1K|f?=OenfR)h<O7_gZ~00p_GsoY^mJKmAamw' );
define( 'NONCE_SALT',       'c4F=N&N)d.I+^UNs{,Ty*x6a?1N FAJ![^Nv1K.TS~?Awd;_5Eb[[8,0gb^cAhJP' );


/*define('JWT_AUTH_SECRET_KEY', 'trzone-g1583');
define('JWT_AUTH_CORS_ENABLE', true);*/

define( 'WP_AUTO_UPDATE_CORE', false);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
