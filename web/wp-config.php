<?php

/** Include Genesis to use with WordPress */
require_once(dirname(__FILE__) . '/../bower_components/genesis-wordpress/src/Genesis.php');

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wFs4OLZpsQEV5yFM');

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
define('AUTH_KEY',         'Km+^7_O?f8xaXzEXRcl?DQH~?*jQ#g;Q04KP5b|ag=JmgLng_Vnei&e~IaPcP8dU');
define('SECURE_AUTH_KEY',  'G0&R=zw0>jeHo^nicSgt(8x>::D-Gu$tKMx-#Oo8t:4OM^BV({34RDC[zJna6X_H');
define('LOGGED_IN_KEY',    '`{~9M(npM`}V]%Ci6S|8c.S4-E+aIG!?[FU<]L#^}-X;V6 _]bWZECOBtAUr^<~A');
define('NONCE_KEY',        'Q=Ht@)VTY6+|/Q.fh|f1a^1?nZ]d/Lpb<L4kd/<fmcS+}WJ?0ELViB+<ix7^-mH.');
define('AUTH_SALT',        '} s3THZ:FkExr~ZOH^N98Y1T|U TeoPGjV7@22#j{N~0lI D+*ZoU!+XgwvC|@z#');
define('SECURE_AUTH_SALT', ')f(4GZi-XVbJ9D%*zCPdb+O^/0XJ7#m^tfS!CuJ_glV33@bkrj]@&w8*~hTuIl87');
define('LOGGED_IN_SALT',   'fzn3_eB8f$uOzvqk7@/%+scH.t<O%AL-6Yie1(%x@o7n9-.UeEp!lmj.Fu;~/c :');
define('NONCE_SALT',       '.+lR%pMKre|-JByIEI`=T;rC!D#^v=h+JQhqxfA7K~1.$Q^SE-.8GWdd+W$L|Jq4');


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
define('WP_DEBUG', WP_ENV === 'local');

define('WP_POST_REVISIONS', 5);

/*That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if (WP_ENV !== 'www') {
  Genesis::rewriteUrls();
}
