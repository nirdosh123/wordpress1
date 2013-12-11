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
define('DB_NAME', 'db_wordpress');

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
define('AUTH_KEY',         '`2>3ypk* 5,A^bVxmitz68+ew<PdE;xC(X?;,S;G9CuyX30L{.w>#H<,%?HWpEZt');
define('SECURE_AUTH_KEY',  'd{wvx;vzpqPCMP?<<U|G0+J&-AY9lh*?VNN7  A1{ R/5wNO^6^uU!uO]kiZ2WWz');
define('LOGGED_IN_KEY',    'o&?I+o6*(X:KLAOZ&m52-*5/~MRv0:^]Ad3,_%i0uTcxchM5N9z7nh$fmFMWPSAD');
define('NONCE_KEY',        '/^r!I.ADC2;~d>,!Zc=ge_HOF`;cEJXG:Rzu1>>(FOfB<Zgnelmy&.;oTp:VA3#l');
define('AUTH_SALT',        'fb*Z]UudAwV;Yq|L`m5_4Hm/pel2bfX7HHZA{P-|w15vy6_Rm>DS&ye?fkj| P7k');
define('SECURE_AUTH_SALT', 'h*4]%;fx/;-MXtk_SdQL=cx9Uw~+zzd^`-u@0w8j#k*!!}UOz(!yl@bp$`yCEKT%');
define('LOGGED_IN_SALT',   ']>,g=!bBYw3b`cZQfhWHag[*>$s/zii-x@&BnFWW!d#.AL/OlXKRXU0gimB%z?:t');
define('NONCE_SALT',       'IjfFp j7{3_Lli,=[>!-eju3vq}$W{Sd(+(zqW{gK0ia1$Gvk?j/7G!%J,Z<n*H&');

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
