<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'mhsglobal_1');

/** MySQL database username */
define('DB_USER', 'mhsglobal_1');

/** MySQL database password */
define('DB_PASSWORD', 'T9k8IwHCL7');

/** MySQL hostname */
define('DB_HOST', '187.17.103.130:');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YnxD*VDn0C@o&LIpN!B&dCtp)mA3MlbS!78^AC)Ud66muPCu%*)vix4jTQAqQOXx');
define('SECURE_AUTH_KEY',  'aS6MMKby9OL6pfoVgeX1BA8Dv4EgjXOoftYmTX&awPvn6@*4AK%Orz4CL5eicr#G');
define('LOGGED_IN_KEY',    'JOK@npXPemJCxn9NFlgnjX0y9M^C&PMt1OU2qgEnP0&RW(yhpeNtCK#ep*fPetQU');
define('NONCE_KEY',        '7CKnThy$L2IvN5qPjhgLw5nWyMcvFJw@SvX)t5uChuZwYIN4bL$n)C)iDqVoncWa');
define('AUTH_SALT',        'yFfXr8zicbLFKdmbGbVTNfei!)cpZzSJC&fdqyjlhaJJ8xy$5%5(tZdGY3(bP9&5');
define('SECURE_AUTH_SALT', 'jm(SbRK%3ts3m9y8tYKBuK4dvXoStkH16VgCnl0G6)y5CuMG0G5n@W5aEz(k!q(F');
define('LOGGED_IN_SALT',   '0$8vAJYyEoJsn)n1RsA0Rb3Co$QMZDRddhT1%LrXx2awpV6NtU*6huy*kYJQ1xn4');
define('NONCE_SALT',       'fgr5vZLf!a!IhLeWT8jmk0^jEwILg77iZn(ITH6wC1(D$1N!4pSgXAydXonaLZ@d');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'apswp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'pt_BR');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
