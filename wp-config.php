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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kafa-baza' );

/** Database username */
define( 'DB_USER', 'wp-kafa' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '7XH5d;UuHb|eHC4KkTc!rCrX1.nh*`Y7IWcZcc{>j<~+24+Bpn@Y<&.]iHXD&Fc!' );
define( 'SECURE_AUTH_KEY',  '`V[6{TRECWdoY;bX0&:q,=|^-Fw+Mk`/jTt]VTR~rOP5C5@wTq7kY/8K)3mJ/0DU' );
define( 'LOGGED_IN_KEY',    '_`,9bGDhG-i<}Rb3g@G%$B]$h92..xiO9CszIbC++aT]K*V06$CJ~Dum]1)fcCd>' );
define( 'NONCE_KEY',        'Sk^,v4gpl0U63&RO{.<PQ_v&KePSK)l?LfM;>K6[I&.1~Sc7KrdWT-rCC|bXrA<c' );
define( 'AUTH_SALT',        'p$*MP;flQ%b1- t{(E=k~-.w/GFP[PeOBS;>TH@l X_Cc6eFC0zoGrx?qX8++wwl' );
define( 'SECURE_AUTH_SALT', '5KT9J=v3h<yq:0K4zg0 hORV#F,R%3s*t.RhN1R,6w|0ekWix Rrh|Z[6k|cBrlK' );
define( 'LOGGED_IN_SALT',   '96}-^cWW#GH@y(P_>nUs#e(Q9v{tcAYI6I^`K?su$NF]W?kRV,TsHw)/g?V6tGqd' );
define( 'NONCE_SALT',       '<hjjV9pLdV5:wI6b!5CLeOY2B,E}7 kOVr]B]x5hHA,&x?9nuC6mdyqS}j.s;o(m' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
