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
define('DB_NAME', 'rootstest');

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
define('AUTH_KEY',         'ulEy&fsHwoGF<2bz:U;m*X]m%Hh`^k2[lSqq8&3#6h$K=2lKVPS09Hh}ARuNTC|x');
define('SECURE_AUTH_KEY',  'y7{g|T{S+lsTi7:o2`RZ(gy.nI+|@htf-z-FHnaRD|/`T|gf5k=X3vv5+w*}NB31');
define('LOGGED_IN_KEY',    'rO=i>8ls`{O7|nFtzX`XdP90(FxPW?h(rD]c||N?3A{*+-s!{97[ul,9*#Lzd|2k');
define('NONCE_KEY',        'q6JoS5xNE43#o;n|9Y /B!iA~?HZpX,_7B;J&*(E9&I28txJM]/Gw4P*t[+7VW@ ');
define('AUTH_SALT',        'zjEy)4(H$/;EXTa`%K-e?JR>@2HFF&v0Ov3],:9d^x~F04.P2!=6FXSOXXG@p!rx');
define('SECURE_AUTH_SALT', 'E<xobm.+ipw^?p|kP^}C?Otv:tmXB-e.!P|I`V@i0y_%+Co7v,+exNUf:L+iaQ=g');
define('LOGGED_IN_SALT',   '|dWFbqMk)6IrimJpAhx/5n(!7&lcTZ41/XF.J8tO$]<>/1<a5:V}@/n-;+r?S,/?');
define('NONCE_SALT',       '`VXJS%p3rRXRvYQmc_U*ZT$5na)rj(KUo#=BH38q?3(u)H9N-sTrmSS.::2,tpQ[');

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
