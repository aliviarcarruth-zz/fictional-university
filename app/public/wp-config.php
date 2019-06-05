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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'VlnFPXMAYBAIaauG1cEdE/FzRV83RpHreqUM0lb0yP1x0C7vpooYV+NVBqsxRkyM0Uepo8w9u/wW++mTD4iJxA==');
define('SECURE_AUTH_KEY',  'NMLTbrcqHcWlMAxTXX/+G+Uhvvc3Ls6kx2jdRqbM660Wrus2CY6vhqGIlQC6WIba5GF+XrwnP1yVVBcIf2JdjQ==');
define('LOGGED_IN_KEY',    'YjKqqtve2Nvdllvw7t+kW3KiHmyABlhbgNx/qDTz4B1f/yZeBzXxuEC+YrsQeQoQBTXJvOHRC5MfYS/9gB4Z0Q==');
define('NONCE_KEY',        'frvLm6YVDzvoftxNIvdzWYPOqR9XLB47D2htSlzGzr4FXKVFqefhZhShhGqZISJeEgUbadmRwMR8uDQozJ1JLg==');
define('AUTH_SALT',        'hgMvpObqTuA2TWTJZHH/kAXmUkGV5K6MgWVwcFDiZqTcxWkq/y8HYbNoGmfg37JClet1x60tHodsQjP4HsstEw==');
define('SECURE_AUTH_SALT', 'GkP4wEVR5O/Ic0PxOPc9As0rJg1bdFKweUQ36vnVn2hrNvwn0PJnNW2RgjCRwfp/LmVFdyHIE5KnGtdJNsY7tQ==');
define('LOGGED_IN_SALT',   'B6HNVN1qxwJ86Jz83xiBgo4hasB6+IKbOq3fGPNkkWAM3nihlYhgZrFCfwYelv/26jR5qPpBI5DhX1UGp4PdVA==');
define('NONCE_SALT',       'mcGSZa/lQ7yo9Z0BSr1duuzorHKHSBst+2HnQT30olz4y6VhgIadGPWjgorlcDMl0H7ld4hngWwoMjXaV74mkQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
