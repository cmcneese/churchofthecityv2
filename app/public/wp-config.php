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
define('AUTH_KEY',         'OTSrnVHJsRYfxZFUs7Sn7Xk+kD21xny2wz9n3uUazCd3r6XtaZARTXK0aALJ+WuzTB9/4tCuAbq6HqCQ8uAxOQ==');
define('SECURE_AUTH_KEY',  'wTb+QE0mQXocz8EjryfUD6nMq2vJjrW9ti2NGVr2orGCRhqZoslJyuKfLL+zdVzaRV0hUlLQ0N6HQ2n1jNuNug==');
define('LOGGED_IN_KEY',    'js6/FE6TUTEgkUZdhwcTo4ci/6E+h9QQikuSRMzoBY80BDYVWFauxax4b87JpyJE9sfcQ90whpDIF0hAvhiOfw==');
define('NONCE_KEY',        'zLItb+EfbXbGg+0UgX6XPNxbBjFDmrLrriZpmEjAoyRqvw33hfao7BVniuH4liQd0iGffoa+N1ub14HC2QYMrg==');
define('AUTH_SALT',        'it7ehD1euCoCGQZilVj+XxjoOXiTslR6Ola1MVgWhgh7AZC4Sbs+6yDnBO31gNBGXyQoYZ6iWBkUCQ8ht6ehRg==');
define('SECURE_AUTH_SALT', 'XfNv+QxXrvUx3dB58R3rWVRq57dxs0lGhm30+EdRN3L+6sNDN2zMyJcUXgrwzWUiUMcwlQBaXtHe4d0Sw8Hkaw==');
define('LOGGED_IN_SALT',   'i31a/xJGA4qV7fbIgG2eTM1TimN+X0j+QJP2r/j70BRG+u7meo4hqq1II/bYELowdtATsBx4aRW+zlmGXU0JXA==');
define('NONCE_SALT',       'JatVYqDEr8oQTH4mDsQFuf6lu8bTOj14ES4ASDQs3v0x1+33shoOAEgF/byRygSX+epESc7cnRR0TAv+DIighQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'churchofthecityv2.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
