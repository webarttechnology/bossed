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
define( 'DB_NAME', 'bossupfundingdata' );

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
define( 'AUTH_KEY',         ']:n7yE$H@TvaX/d:s.S^]Mh[h ~>.8daW2X)-(#_@DCN^iuq+=wV$5|d^vu8&SY?' );
define( 'SECURE_AUTH_KEY',  'eFd8[)iSl!H#d-vyvU%]d`T~9lh-W3-:u> <Q?0dr},O71SfDP5S+<*3Oj]H, d7' );
define( 'LOGGED_IN_KEY',    ',=|F++P/r8I1?~ lbY31(eF`Xb:v@&Y#bD]:WIE,s_{H)D6*3+h#i3$nqQG?r:B0' );
define( 'NONCE_KEY',        ' `s+=}fwj8[wp(:?9V^O@(CU1$|6qc&L|Q)hI,tf:W<=Ziz-8PUl+wlT7Y@qby9f' );
define( 'AUTH_SALT',        '#M#C%UbwTe7tTsV-*|;hK;@53{tRq~%molhn+UbxhMnXB14)q.B!WV2%sPhZcUo/' );
define( 'SECURE_AUTH_SALT', '$_vg=hlO<6Z4m9rDMf3Mqqgl$)j_W-5^wQ*yz^nx>VAhwrjhni[j5]fe1(S9l<~q' );
define( 'LOGGED_IN_SALT',   '3zGk9|;,sv=,>Upb]TMKlD@}Q}V*P@ERVunJWJxuFMeI?|BLgZ;#bhYA`J<ROz7/' );
define( 'NONCE_SALT',       'm{!^d4{c}6t&Q@NJ~6VbP#T4OO7}:=r#VHWy86|-nSk*0% ilW8y,G<Gq,]BEuKE' );

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
