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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'super_nour');

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
define('AUTH_KEY',         'F~ckTS)cgC3t*:v.uY^OW{:j-hOSx-v6<-frezXTniQ,dS`Ruk|C-+lWLJW9!2VP');
define('SECURE_AUTH_KEY',  '-^d88`G R9^8tPLu]htMy-k[^B/#.4~M1H`T]m<uA|sZ<[+kMB-jmN]BbGH -pu0');
define('LOGGED_IN_KEY',    'zuXNkVr-g+2DbNL0&j1COVv[veuO|.~.X[P*72kD%7~K@w8Mujyj4OD;S8 !*7`*');
define('NONCE_KEY',        'q-_H`>r{nb;z G+I!|<A!|VWn,30W_(zO?2-~y,SHGomU$^4h<=M^IvInMCok}6+');
define('AUTH_SALT',        'K^6{NN`NTd+/EVz~yh3hI~`Jse3*>wb$/)e11+!e%9sFHP*boKQ>CedB@sU&y1z2');
define('SECURE_AUTH_SALT', '3wX%[P9bo5T<GKJ(x[Ljtu-:j)0DRha%E9KrpIhKNzgJCh(Wi9m]~:<@&|u-|.(*');
define('LOGGED_IN_SALT',   'k}b5<C*0?AAgzU]F9#cC#pN3}CHX03{`?++]A5S>Xp%6J[)A2K3e{~HC(>Gae+= ');
define('NONCE_SALT',       'mUdkov0ZVj`+c_%dUUj)POD7JQc|HFkVl-3?.=NFXaTYm{cEUiWa67Yy,&Xc^y{Q');

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
