<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zokofoto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VLtQ%Jh+ASj^]`!?7?%nD-1*16c=yn4&I{YjTaOyUT*K)9&r+3,#+2%g h<Ap7}X');
define('SECURE_AUTH_KEY',  'pK!O?T1dKe@us+CVPb.-kUf}N!#d}?$(P68Z1XJvu|@,,5>4fP@wbJ(|40{O/:~w');
define('LOGGED_IN_KEY',    '_?x=% ;+j{)2bvOdi#Y`,TyBb_v>5prYq~FO~A:1@_62P8Iv`SOe5jyty#3Prgf/');
define('NONCE_KEY',        '1E<lP-k/}/a`A3er}?@4E0oCWA0HnOao~~iE(OEXP@:ru1`umosn_;x:9RV-77 Z');
define('AUTH_SALT',        '*vXpzq=+[J0&rQ*9&<FNv-r(4eZbXuUiS Q2>^G>0wWS*IwM[b~qFQ;0HYY%m Fl');
define('SECURE_AUTH_SALT', 'J<>HbrYB|DR^oW;$3^ynm#7m&b7uR&mDA6Er?V_ym_%)[tv}C(Jt^+6^=tv-}iau');
define('LOGGED_IN_SALT',   '+};RwgX`IbwL!}31t0/r;<:Mm(J`o+ |nk}R-VOcM|+5jTUA7GNi%$(HvAyn.Fc_');
define('NONCE_SALT',       '.?d;ulG*U)LAwZ0t$xom2#j+8z<W;wI,vXpH(BLU+=@~{C2G?zaDVj+}.4<j#JEQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
