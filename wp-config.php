<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coffeeshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'F@drV$0O6]l?#N 4Tm}[%~`#@:>J)do?}lW|OPZ@m6Sc%(`W`I&vDSF<Gk`#9~=X' );
define( 'SECURE_AUTH_KEY',  'vH;R<v;?l]e2/(a4]&T-7O|9Y||L7REJg>XSXWeQ7rCW0}`{ocW0D s3c*kG7nqU' );
define( 'LOGGED_IN_KEY',    'PY]Pf`b]{uJU#6bVCwX2SBiVeG&7G,6n9NA 5C$Y5Wi85}iJ$~)u.f!|C{uMzmpz' );
define( 'NONCE_KEY',        'S9?(!kw[b?xV`;}r;8k>Dfyi%fNu^?8Z n2S}Es>bC&&&LO%pO16Epav=Tk:BBy}' );
define( 'AUTH_SALT',        '.m-zSXv.1{z6.`Oavm~ThlgvENn<30p0G$/wl;fhnNG>|f7f8QQfW Vt9h6l!G<a' );
define( 'SECURE_AUTH_SALT', ':{XJOy;(Y|-;G&@+ox 1BE:GT*ch$6.4e8Y/B|Qo$yP45bhU/PGhiaEURHv(y$&V' );
define( 'LOGGED_IN_SALT',   'O]y/S6n=p[4&]9v4s7|b7Ng9@H9kG&9$W2HfgUf7-jd<I{#qWzbgB>$7E+B0q=,h' );
define( 'NONCE_SALT',       'GuVlRH.7aay0DtfJvxoq{5-xS,;aOR)bYW#=6O ,haR:*b6@,LA)Nh>m3m<g$_i.' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
