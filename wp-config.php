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
define( 'DB_NAME', 'wp_test_task' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'chapa1chapa1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '%|Zu]/e!A$r.59tsMa*_!`<S2ji4{i&%{($M`*FR-<9mAuNc0XFJ5+{E4+*@kD:T');
define('SECURE_AUTH_KEY',  'EB;?$kxY~}~QhQo}K#fzd~Y~z(j(04LM7Unm1B$rA6 !?hfM4m&xhQB&z3i)ck3!');
define('LOGGED_IN_KEY',    'r0s:cxjk8Djln^=8d[0|mKD(X}vPa;ii7+qf|@^oxx+u,d37ck_~53Cr`u*psI+d');
define('NONCE_KEY',        '&Z/[|jIYL-We2<33mJ(434!!l(+zH+utV}G&4TL^KNySek{+@_LP1fO]UjUbgdx_');
define('AUTH_SALT',        'W-6#y%.>k5w$5jjI0[whQ]]9,O.E(HC,OUy:V:0%^+e0C/$4|+pYzAPzg5%q6WM}');
define('SECURE_AUTH_SALT', '4cG?DI-1W7-x>394=cheJ%31)OlTue1fA8bM4#w)V?np-#k~-pbx~zfIsOo1*69F');
define('LOGGED_IN_SALT',   'hJmJQh0KMyuf-P1UQhJr0KQP.U-dXGEW?m5U^:<=MC*B%-U3?!y%jD~:#{q<Iukn');
define('NONCE_SALT',       'K5j3ZSC:vA4;?g.`3-7kO;ko4!Ik5Rj|MXF{IEl1Ak?sP}n1rNV]Uy#5AD1/7a~-');

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
