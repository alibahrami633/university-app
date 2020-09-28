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
define('AUTH_KEY',         'o8o4ugcQYKHB5tDek+LuUVoiFXx83cwmTGdnan668ihb4wlkogBVc8QIu7OLQ+fQjB353jdoAj4CbMqTQ+TOAw==');
define('SECURE_AUTH_KEY',  '0nca/Uaap+ICu9QbMwWwL4UbBpXCyE8579J0xzwBFLS9E52+bbrNjpTTDYeVvka6oCkDA7GuYOTpI4YCOg1UTA==');
define('LOGGED_IN_KEY',    '/OQ4X9899cReGtMlpx9a3BmvhXGSGBcfehpvS3HUifCQxzOnJ3SsMTHki15Lv7hlbptzmXDf7lBOLszvt+xIAA==');
define('NONCE_KEY',        'x9N6/grg7cU7JFc3tongWCMYFv/cNKKp3G1mO4Ia2rvKBALmUEWhMwsx406h7ItWkci7Pio97JD/ztQJo2pPSw==');
define('AUTH_SALT',        'rTkhH0irhXuBM15ngCl63CLlJtIgBgOpc0o96dwrtjitEEdBrOTlkfhr9a1LTF3/FiBYYM5HsyEFVfvDnbpqJw==');
define('SECURE_AUTH_SALT', 'NpfiEL8ZDi+ZxdQ9FraO2bFMxxqFqhZ+j9nwJQX5QtzsvKO/GEymH9jCATi+ODkOVcddoHhqDJlRbuWtudD46w==');
define('LOGGED_IN_SALT',   'iSe+1C1FAH/FCCmeqDWpxp0B7/WrQMkDNpf+bFwmuhygI0+JdUiukLBnlY8SI6b26Iajg/C/jSnfxvU7rjlFlQ==');
define('NONCE_SALT',       'Ihp8OP8gfmubz4ogHjKF2wNSlXRzzDNJ1XsWpjNTlEXwSbmSbdUSagFfeulRtqtsU4wOa9un0LYwclSzi53w5w==');

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
