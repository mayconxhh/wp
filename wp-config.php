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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'dd2e6362262ac77084621d4c92bf2f2782b681420ffad312');

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
define('AUTH_KEY',         '2QIL`qj!BvQItDnU6:K{|R]-5qUC0ue#863o4vwUYp2>XwGMW)t&HbM3)%4iiDF9');
define('SECURE_AUTH_KEY',  'o9;;Vi-)a2I8 OO/jG:[)6DK(m-|PcU,-(Bo*F#E2J)TM_i+Q`A.bQ`KV~L_-ax9');
define('LOGGED_IN_KEY',    'U>(a~4U]h1.+g83D<O}AFcG%*;2@.k;Dye`Uix|jM!@R#`8BqyPK5K0tFg[J4ac#');
define('NONCE_KEY',        '-9y%Kb.9D+H%%O]cWt<lvUD2ky/pHpfz#QdK.0d+VtEcyijn_vxo@K5be o1brL&');
define('AUTH_SALT',        'GGIbA|8$LK|rZ~R4kf5M4:K}s[FjDnlD<w!ULsP$=s/!ZB`:K:<-f$ZHsbkaQQi3');
define('SECURE_AUTH_SALT', 'GoqaFf3${?yVYp_d4=m#w|VN!IMln:2/l&@UyvObd^|01Acu{mA1SZjHizkfqc3!');
define('LOGGED_IN_SALT',   '1#xBI6(i7MVjQwY_<?R{DC|U/cV_G?q>$;HZ+c#Z}K^?j;ZreVh2bTBBxd9hR&_S');
define('NONCE_SALT',       'z GJkSv7hZQm^v|+V.2:Qe(vgd3s.U#_jn_loyU~%,v:X3;n9nUTc C^}cX5$7.#');

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
