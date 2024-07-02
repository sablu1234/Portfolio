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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'Vj_lx!|kU{>v.aB[d!2#{vrNjmAF3feAzK/5$GHf?%]DH)Pw[WeKEG|88zf85+&>' );
define( 'SECURE_AUTH_KEY',  'KMe!N,8+Az*TxKRpJBxxSuyPm@wkpAo0?C[YwX0wa[$o1D2~Kb6NG>9!$r9h+AHU' );
define( 'LOGGED_IN_KEY',    '>3:iE#pA-t/+Yi4bP3vy9Ng<iL3bN0{bFp0t:vGzo)z|G.R0 8^uOFgFD^^jPzG!' );
define( 'NONCE_KEY',        'JI]8A:5gY#B7y4/9~$ita/mbxM#I~L77_caICv;sHLA6V( M#UnLk?uS1bAnR6!G' );
define( 'AUTH_SALT',        '_.6sj;B=V8fAeZ7zjwl@M|nU9&bx4+ 3?FJ=d2rQRQ7!BLDFhs5qjUqL~7jC#Hc-' );
define( 'SECURE_AUTH_SALT', 'As_GEluQUPH_a:C{D|y7.w6UoKfh/BC4L-km@:zy_w_Bn1T!6:K!Y/essGwmA%4K' );
define( 'LOGGED_IN_SALT',   's!pSD{9.RI_h(:AXI0]T>:&|0bSD&fxB|hpyTAkX-;$N!s}v;=9 D4_r{t>lgK3P' );
define( 'NONCE_SALT',       'VaRr-B!QWTCb5-.Zf1v.i. ?Z?40bY@9Huz*TfJDz{ikAcv-AE&g~T;a,m!^)qb?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
