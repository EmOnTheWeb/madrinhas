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
define('DB_NAME', 'Madrinha');

/** MySQL database username */
define('DB_USER', 'Madrinha_Admin');

/** MySQL database password */
define('DB_PASSWORD', 'fab9hexe?');

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
define('AUTH_KEY',         'nd7lwoit5serhk2fgs6voohrchokcgvhaicihiesrttd9hectl6vxwxah5fn3grd');
define('SECURE_AUTH_KEY',  'ene6xktkv5bedp4lc67hv2dbtfnkdak0ekpol5l4jqgagoyekzmr6evsgta9xmdx');
define('LOGGED_IN_KEY',    'v1a3m0mq1ufovthljcr7a3v2phkxfqvgdvvorfpjbqonrrojus6tgabm7ikzjfas');
define('NONCE_KEY',        'x5jorynutcnlmztjeyzfnio58fvph8zy1oulo40shkdvpj4hf0wihpe3myetg040');
define('AUTH_SALT',        'nsz8da852npeulwbxdvti4zfkbj5wiyf5uhnnwp7kcps1wmotdrbwxyh48bctcr1');
define('SECURE_AUTH_SALT', 'srrqaiscktusfq5ce8sptypaxqpbltwngvpcncf20t7rwb25womacvsifxegtg0z');
define('LOGGED_IN_SALT',   'ap1jazzi5tunibsg2i1hjcjgpaypfp9pmap3lial9rwg59ljb9l8qlpymgfdks1w');
define('NONCE_SALT',       '9vn0ukul16ic46ujmcbskdkz5ilgmf8fhwaekfph1thlawpkdbpvym2nkstrswps');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1q_';

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
define('WP_MEMORY_LIMIT', '3000M');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

