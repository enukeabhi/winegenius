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
define('Membership_days', '30');
// ** MySQL settings - You can get this info from your web host ** //ssssss
/** The name of the database for WordPress */
define('WINERYTASTINGNOTE', 'Winery Notes');

define('DB_NAME', 'winegenius');

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

/** Path to Yii **/
define('YII_FILE', 'admin/index.php');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6E#E*[HTw?a;])jFm`^BlYot|.[T?VZc=|H?Kr5HzWrGQ<yC$=s{_+:uz.sUl)w(');
define('SECURE_AUTH_KEY',  '<>TY8%;UBbv!zWf-:/[Z662UK4D$|^5OILh2lEz&>M,+q/-p$c|c-+HMaAgj.((G');
define('LOGGED_IN_KEY',    '2+Ad-!o_UgCsTen0){,-Tc[61vMfH]C;%&[gsxaKkMN:9f qbec@B4/@=]H_]1=M');
define('NONCE_KEY',        '!_9|pz=)_hKBDLoqgUTMcCvR*+7SDv%EY~?&o?N,]0u{#{G@d*5&yrDyA@R2@~^g');
define('AUTH_SALT',        'FfX/<hRJR?sh$2.8w`>cV2%h|;sf16Ni|GVrm=SrI,h1ne|f(MN-+-8KiXpsi+H@');
define('SECURE_AUTH_SALT', 'L(FO_YXmus]#k(oc K/=VzD(=7Iu>mC>v#aC%p3~`X6Dd]gW4)/W Po;<=:F0_%q');
define('LOGGED_IN_SALT',   'xUjhRy;->mKR[~D$)vs@-d7^,/RmBe83|~([F&sCW1xe{. sek(R&:2}_eV~rIhp');
define('NONCE_SALT',       ':]t%[s1*nil|+u0-m?6C.&RTGAF0Aw$+N^Z-;w(lMdrsY:WC2R6=zc#t@t/L2/$Z');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

if (!session_id())
    session_start();

ob_start();
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
