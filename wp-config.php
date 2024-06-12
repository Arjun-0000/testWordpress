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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         ',YQSW5RZ[dU2o9zEhgBs-y( m+lYHJ]H!eisg%Z1/fE?e#7QRDdRwyaH)AMW1>F8' );
define( 'SECURE_AUTH_KEY',  'akQ,H*Z&svz+XlYTlP/S5{$b15 >Vt;R/!zz@b0z+&BcI!ibwp3)wc?]Sb*pdXbV' );
define( 'LOGGED_IN_KEY',    '[Gl5.LZC~KN,V_JE|ow]~[|]aF:Kx+ <P>Ee_RG:z )#6}/1Ann:m^=g}mH{SIfa' );
define( 'NONCE_KEY',        '<b>/Zjy``O9QX{D_xZCD|F1Jw8_5)j~(|MF72f}F1o?s@FZ42`C%tUS:i.%J|f.}' );
define( 'AUTH_SALT',        'TLmcZUJ ZG-j[_gi6})2|yvsH.C1?bD6q$9,HsjiRJi39^Rxvj&x/>9zi2~d%M#E' );
define( 'SECURE_AUTH_SALT', 'd3=<B(i6alP=8}v1XTmJ$Dg6V[}P$X%9XQ2iljZ3gY=1BrEJW.OPRTrYE|3u:~Rw' );
define( 'LOGGED_IN_SALT',   'DYQ8?BnWE%I,@-rl5in/6.tv3oh{NffZf|KX[f)Fx)mSRRYKicBGBGl6h/nNF0<)' );
define( 'NONCE_SALT',       '1:N}r(0hLhc4e?_h lqh%!O#c4[C#6<,}R1f|T^EVD}Dw][G<bbB!oiDIB:SyMPO' );

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
