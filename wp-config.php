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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hmppde' );

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
define( 'AUTH_KEY',         'Z9Y/7C:A12_;SN,mjCotY^olnEQ9;M1^dwwg`uWGo1.(}#:DF2zqG|g!c53.$PSb' );
define( 'SECURE_AUTH_KEY',  't#rT3JTB5q<IGY3`Oss`%jVUdDuV0dn(: Bqfi6g{dRcS0sdu:X^7t,E/p*:X|jg' );
define( 'LOGGED_IN_KEY',    'hK1RnQ#)~8p[BDY{J,fmO#A~LtW-3[vhOtc-eqS HW8!wBceb&*1J*A X)`ynPjt' );
define( 'NONCE_KEY',        'pW$:8 W!ptU,iV-UAQw@;LczNcNEb(V*]Zpnm)UZ^3B8aDg<ATj`bV=WOz6Q0%{!' );
define( 'AUTH_SALT',        'NA^E!he9E|g$7.F@Mr46X7qK}sni5#X.6|DW8gVmU]/V%t!} S]OA9ZMS#7t+Se.' );
define( 'SECURE_AUTH_SALT', '(geL//Wqw-^@(TPCnz*%e*-_WT0XB7Fepe<R/4%~` N7Xm[[QoV$]aHGAxKL,Flc' );
define( 'LOGGED_IN_SALT',   'Z3Q^N>|VKV0}oD@VE=8ScN~e@e%yfu[a9noG[fp/DZ5tNfs2)= D_&/,k,cH6O;U' );
define( 'NONCE_SALT',       ']b1x7U_{P Z$`!.a! P:|)[@!Oty4<UlGYvVCa)PUAt62<b9kX =TV%;+[rfCp{ ' );

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
