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
define('DB_NAME', 'wp-starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'LTk6O{+!DgLp:2Sg]aW U#[P)Y;)O+]~iZ#-eo[#oP83fZ}%{SVg*>:;]]YeY/77');
define('SECURE_AUTH_KEY',  'E#Zfwb.g/;%>w`UEQH=`P_!vRN==PPt(`R|9Jz/~)~Q-txf9]?0{ZVL?xXPD:.a1');
define('LOGGED_IN_KEY',    'P(qz>C+3Lfci:9ur`_C<D]$;@4.N e%O9M/Pu[.mV(lvjj/>{E;!K(hayH+aMh&(');
define('NONCE_KEY',        ',pApQ5}FK{2?;G+qfJ1B$[9|%UP[Ia_(cMuhTLdE`f;k2Aze)s5L#G)Gstz}qaMK');
define('AUTH_SALT',        'c&B6k_}DqH5L0-ZYkd`.AK=`r^3=cU2^9}C ~Yl;wk#E]0jcb6~rGZ`c:~]9X(:E');
define('SECURE_AUTH_SALT', ';}?Moqg_+!a-Ij05L+* ^-TxKM)*PKcX.e#[cFo ,}vJIdaqS2NNp>>CG_}IH!T0');
define('LOGGED_IN_SALT',   'oIPU+DQ+u}h:w70E$ub(DjU%:B;xf.dp@.:*hft;jRP8uqGo2~XzrM.Ds-i.|g]C');
define('NONCE_SALT',       'm$hd@n)^hYMzbv?a*3NT#4ZgZyi;3CU*>l2z=g] qR3|xBt~Q3^B47s,OlcVQ_3o');

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
