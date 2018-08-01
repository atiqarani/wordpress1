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
define('DB_NAME', 'atiqa');

/** MySQL database username */
define('DB_USER', 'atiqa');

/** MySQL database password */
define('DB_PASSWORD', 'twinkle.twinkle5533');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ADee%~/U[1vZ(^}!{*1,hX/^,u+)p8%yzw%;FTND|;g6* MfYz*pTA:6dq@w:(GE');
define('SECURE_AUTH_KEY',  'mI_K!|n$z^gw_><Z7>5F68@dy{)!(mn1S7jGBxo2c+$*`|2z[Ag~J|Ri_w/GKYTQ');
define('LOGGED_IN_KEY',    '0mp4c*<| zxJU&Kb_br7CE~S|EMlmwTEJInzde!1_yXc_`kv/J$m}x(C+4[W0A%>');
define('NONCE_KEY',        'Ens!5NkbFuG%_IUA[v_AHT@q]BJgnHa5C(&myKAY8s] ]6}wZW+nv#gIjLc8f*wC');
define('AUTH_SALT',        '_N=$(u<&PW_yt9l]vPJ8X[M6POw)aoM3IX5OgW.<dCqE9X;1|?W+i0aHvmx,-9`;');
define('SECURE_AUTH_SALT', ']m/G![UbI/h>j:@~aWSku#k:h_>yaxEQol:407rz.$UW<f<(+*dcZf8MUA!cB!]1');
define('LOGGED_IN_SALT',   'wAv!;As;T*/V!dyq]PL)v&>h!J%w0&Y.ZzoiWE YDuvk{ok1^#G=4u{dgaNj<`(f');
define('NONCE_SALT',       'B%4.GXw %[G-W1y>8u}BY?oYQwaz~XAym9UoQ.R`YT-z;h!d{8AU]N#@s|u|1w`6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
