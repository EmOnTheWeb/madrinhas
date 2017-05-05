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
define('DB_NAME', 'madrinhas');

/** MySQL database username */
define('DB_USER', 'madrinhas');

/** MySQL database password */
define('DB_PASSWORD', '39jqTMenwcUQGJ3e');

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
define('AUTH_KEY',         '~Bg}Vte$Tqujx]qk,6yrOy`hL|X#8=/oZ)Pob%4}$Pq<tL*q/>]oqBTU&^^^2G`!');
define('SECURE_AUTH_KEY',  '}vt1!qwWe|y7&Xscg^9,C5{l9~($W5&c=$^i%K4Zv7lWjZmvr 9, =JScMY<U,<h');
define('LOGGED_IN_KEY',    '_`&Yn_X)W8+6@O_F^:Uh26voD4q|Y|D:;F%u|]H*VC*i_]4oB9N5?6bs!txZxkJL');
define('NONCE_KEY',        't-.$GkOLLGCh&7T{lR7X-!0`H%IzCyDSIo})K_eh*l1Xg&?0,|q[Ku&*C3`b@4-v');
define('AUTH_SALT',        '}(qr0H4G=UB RwL1U=w*)zre7KUmSaUL9z@;2,jX(+u3g*iD&?R_{Bm0W?OH%]44');
define('SECURE_AUTH_SALT', 'z`x)E2J)v[=[7_,zI99>q]8ns7&e/Xn5z9_mdKPVj[*}37s@76F6, j6bUj7y(x3');
define('LOGGED_IN_SALT',   '2YaA?C /6Y00.he[[xIQl6Jki?[qiRw14aAze n(c|<)0__1~&KLhhw>D<Tk;Xu,');
define('NONCE_SALT',       '6r!<`%0oyHlRl#8 6,VLMq8X%wH2=i)KF/aJT7Ehp&Q5Op)r]S8o7.aw8xsjtLQW');

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
define('WP_DEBUG', true);
define( 'WP_MEMORY_LIMIT', '96M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
