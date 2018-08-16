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
define('DB_NAME', 'pretty_level');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KyJESh&Y=tIBIpt}P5[0bP(B6o+5>yl]!5E/HS,3_}dL+1%_$;yFr}uk=qO*7E9>');
define('SECURE_AUTH_KEY',  'hnBw0L0OKe<x]/k3yMJt!!=Dsd/2l-mpjC8o1]r L%P;<5W6RP1}gV?/9>l=jp m');
define('LOGGED_IN_KEY',    '<l&e7?1E~^ Zo#vp?Dx*K9mA5Wr(9V7]i)E),8>%5P(Gt9?yy+)8Rf~aR%%dbasO');
define('NONCE_KEY',        'J}dML1RE&S.z4RPz7S TV%3eS.Yj>e<(ZK/]Z((@%Q&IQ:<>6p3/A}mKpV~Eq89I');
define('AUTH_SALT',        '.}Sv5g<f7m]X=27#kN0o>U3lST!SP~E6g5%_D`0mlZu61#I}Y.#&RCX^|kTfGP]g');
define('SECURE_AUTH_SALT', ';Z)`<i|>~hB-<a%R,Py|.rh%XvK~+nyC8>J/6A90q?4VBv9B#=#a7LHLHG (:Q6(');
define('LOGGED_IN_SALT',   '<zA|KMah<UqLtql }({7Z~NdJ8:X^%TIy$_5%yiJuuZZfogoKzRw(V,x+Bg]H+xK');
define('NONCE_SALT',       '1_;:@/w+!a1;nM*m<:rAw[uHw2=_0ETZ$$e;^*}R*dBzm5WYBmGT8jiQd:h,##$#');

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
