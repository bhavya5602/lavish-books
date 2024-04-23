<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mockdesigndev_wp_hdam5' );

/** Database username */
define( 'DB_USER', 'mockdesigndev_wp_costi' );

/** Database password */
define( 'DB_PASSWORD', 'Zr1uO5bXSL@6r3*s' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '9#4885k!RPW6W:&UD87Pr]d9*r)1|GoiH+@27QbBH7mN2y2m06F_h8N5R4CL[Tzx');
define('SECURE_AUTH_KEY', 'N6p5hFN4x+e2(YZ&0cYK)lf%4#P|]NeS5A4N59nA])9Pq%!%af81(8&&7~l)9x7k');
define('LOGGED_IN_KEY', 'EdC95EpiQQ(17qjx;Z6RoP)52x+F05x)-NwLnpbMe-tZ%3MUXbgZAQ8B@+vL&/us');
define('NONCE_KEY', '/1R~Ow3AY3-Kk@cK;jSboaT!/@_FBt9y[;4%~Ux%1VNi17X|t-BAfu*n57u6mTjr');
define('AUTH_SALT', '_1;6!Xf3[de1TXYe4G3ia9++b&OgE]-bJf@frK191u]/RL(T&19*2o|B0P~3w;Y&');
define('SECURE_AUTH_SALT', '(5U%C4G5IIt|;;a%EoDj3Iq(1Gkp[57aT/9d3@L9tID7|@668MB]J|t042+CH704');
define('LOGGED_IN_SALT', '&AIMG68!N5d2%9r]LG7129DZr[)@(55;v9+94@r5)~irZ[&*NC@b%-seAO/6X9:-');
define('NONCE_SALT', '+4V48E4EC4f09o0D1z0%Y7T;jL22k;R~~79%N][0zOx0G19d02S51~8RjX33;4dE');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'y72owb_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
