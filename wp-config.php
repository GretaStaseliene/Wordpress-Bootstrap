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
define( 'DB_NAME', 'Wordpress_bootstrap' );

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
define( 'AUTH_KEY',         'e:yV-1sA,Dy8?f|oD`eMEn7+V;R4|23TJ(*iT?NoF/sS{j&xnD!b;i:?5MKeXeEl' );
define( 'SECURE_AUTH_KEY',  '9*q6%@vr2_5Ox)a2I)__Kr{BJtE|sm-D^!,_)26)TaL0`i|=O|c#Vd?ftzEcO`Y1' );
define( 'LOGGED_IN_KEY',    'U:-&>U 0.TLlP4Jx58>FZgO=w@#@&EhAz=YCJ?TJJJ~%3cfEu|!WLcgX *%51=3v' );
define( 'NONCE_KEY',        'mN TXNl]#,=ki:=WE,jgJO2Sg#G_BBy10DN)Qw>svah<%E[/f!8J]B`ZHqmqX]Ri' );
define( 'AUTH_SALT',        'r$hlEoNRTPl!8QfI^_|@P,hIk]>25V2gkC+RR%`z3M?MPMV5@ya;-hZx%o -*mY_' );
define( 'SECURE_AUTH_SALT', 'A3g9{0%6(gQKEnkSHj4q>G0d*Kr:l;FAQSX33w[{,Tg>27/a%9De#sdd38j=]aV7' );
define( 'LOGGED_IN_SALT',   '0+xR5cZu*ca(-lozx`+B)l`WZW.;h!&1,A%CvP+ i2 +|}0B$SM_]$}K A}-gq7,' );
define( 'NONCE_SALT',       '}6z(-L~,/hi=dw&m+o]L4D4nCexx%:[4Rmh0Q)c%]8un$7]CRQu>ac%_eUlgD?jb' );

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
