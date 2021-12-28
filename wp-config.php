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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MdP30f7W/kX6zghtojOV/L5TaVilOkYJudCvHpa1es45e0MsCU2luIb0i8ooeCHfkYdWDNnSFyzI5e9vfn0ZJw==');
define('SECURE_AUTH_KEY',  'Z58KwLou3DTvoYpLB4AwB0Li+A+H0wBSfqOImXV7hmUAAlLXKxMywBTxEy4SP5i7Pc2qqMuz024nHvDI+JNOwA==');
define('LOGGED_IN_KEY',    '4YiT4j3u9Uchwl6XdnJM4rj35plrgcCi2vBGKHckMb4QbKi4P6RULlM8499Az7KAubPn+dl8jD5bMQ1bfR5pLA==');
define('NONCE_KEY',        'ZELie1zliMeobjz03OfCe+FLpy5hfjxeisFlCkco7ech+mE0UbZXAp97cI3No8XdwdMFCVvl2huBlidF6WB4qw==');
define('AUTH_SALT',        'VndRUnIYcFXOOgBPjIJkGdRrJuifZon17OTdCTqG8R3a4fWTWOakPeG3ymi1LyVWEw82w/khoDMZHr1HnutjFA==');
define('SECURE_AUTH_SALT', '5qdm+YLxXaJNtG6fNGoTq6aBXEUWsGexdimGeL4uqVBvJdS7e+AoTzxZi4T+iKn0ibtzs2C/OCwo0VZaqPvWxA==');
define('LOGGED_IN_SALT',   'YTSGliFvP30FmiahLqGT/K3ZWq7coAmL4vSGlWYADxEE6x4IKnLYuLZ+A4Becrli1OBFxWHwsXrsNcQJBChPaQ==');
define('NONCE_SALT',       'U1ANL071+6sLjaaqFylE+To+lAnu0DA/g7iuyqjwcb5M5mBzADjcYzCimQEaa3fsQ+D8Ajf0IPqzihXouxMOFg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
