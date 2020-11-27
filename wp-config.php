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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nsb10up96f9uniwi');

/** MySQL database username */
define( 'DB_USER', 'pemgnp7kxtrk1qbh');

/** MySQL database password */
define( 'DB_PASSWORD', 'wazeuc6h2qdj13ju');

/** MySQL hostname */
define( 'DB_HOST', 'klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fe9b96e9af537ca4771d91acae1450ee6cbe7348');
define( 'SECURE_AUTH_KEY',  'd68aef4fa7c5e48569df70c33d51dfac223317d7');
define( 'LOGGED_IN_KEY',    '455f80bd0ac12834c2469af9049171d8bcee5df2');
define( 'NONCE_KEY',        'b0f379f200ef95f654b9352c24e6e70e550518f2');
define( 'AUTH_SALT',        'fe917292f84fe4a3faf025b35b2878f4ddbf4664');
define( 'SECURE_AUTH_SALT', 'e81aaa3fbcbae332ef6de5762c4176cd8bd53c68');
define( 'LOGGED_IN_SALT',   'bc6e5385a7dff07b55e59f6c5b9c5e71ded82ba0');
define( 'NONCE_SALT',       '354bdcaab144bf2f40c222eabf0864136a6325b2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
