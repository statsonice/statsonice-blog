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
define('DB_NAME', 'statsonice_blog');

/** MySQL database username */
define('DB_USER', 'statsonice_blog');

/** MySQL database password */
define('DB_PASSWORD', 'SavRFL2baq6hqCsP');

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
define('AUTH_KEY',         '9^e|-7n$!d#1sPV4^p`-l!TZh`NicfH@@8D~q/@}u>+XaFNLl*A;>7Dk9DK/8ULI');
define('SECURE_AUTH_KEY',  'J?ulq7[&.J)b?`0s!T%?N-+G[P?4io}pawt<b;vuU/o-$:>GqbrWa^09FP~n#7(b');
define('LOGGED_IN_KEY',    '(#;$E;j&r,|/O7yub>nj<]JLXEiw{1-v2,;-gykV_Ze5 NG%4|cr+@]pi1M0;H[~');
define('NONCE_KEY',        'mD b5rxF)v+aw#$;%5#WpuU:T$-qEDSf4;#+~vmW*1yw-pY(6&79xi9!WR*>j|YR');
define('AUTH_SALT',        ':lfj6Xc;&z4cwL#+$47KoOBuhA!IpKR$hL:3yzSy2D=<T:Jp#XQfD]cPuRweB0{C');
define('SECURE_AUTH_SALT', 'O?Yu:j_U4AG2*/9{[{-m8/^sT,-)<$ZMcGc6P+F#.|r%D!/_bnK v~-2o-.>),N`');
define('LOGGED_IN_SALT',   'rnY-r^N.$?/>ZABJw!s_p)tlC&+[|@MmN|V.FwX-cz+GuIwpAF>KzM1wHAe?~+h^');
define('NONCE_SALT',       '>q?-q%bU|wuy_S!H|Pn5fXXm_xG;lH*dm#i|XbK095zD>r|o|4.gu/$0h@+0.rnH');

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


