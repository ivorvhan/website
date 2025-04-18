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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y&<@IS[mv*0^ZHQp<h-k1j1V*:wBEctr$|m_.>;+4ny}J/fh7!V*g2u[Ya1ai@$A' );
define( 'SECURE_AUTH_KEY',  '#ikeC(bQ;zdb0A@2^a%${a-3aP{yom?ka7@$:$W-bCtlCZ9DjHX}SA,d;ZDmHdsz' );
define( 'LOGGED_IN_KEY',    'W,[o:3l#k#15je[#@[6Z1LVdWcGrTvd.V&/C:*$M<+7;#>EBx2!zG>00q|%}`1A`' );
define( 'NONCE_KEY',        ' h%Ic~{et~7op7p-WNK_QyzB[3q$|/$j*HwBJ$q>-sT!)2IH2)z]?ejbsLa0ER)g' );
define( 'AUTH_SALT',        'z48Cor+vrGo0}q*=QvrKT(Y]y^!Ae4>.:zRgIG=(iB0*a]p]!uZRypH9w j9rybT' );
define( 'SECURE_AUTH_SALT', '}]Uf.|0!Oks+(Su&iYPzI|.r|#%pz|6wP5[zR3n<Pm?[H;<(jH#*7&&9rAxglGQo' );
define( 'LOGGED_IN_SALT',   '-<[bon/z$TW{b9QOK>~]@pSe.UWd(l1~aqc:-/!,;jchC0sM<K)e]n*jiX1IvHl3' );
define( 'NONCE_SALT',       'pzX[apRS%Lzci0%,}3u?w4%,$bddP?436pL<Gc%?:B]M5osh8/_9]y*eudF34G=I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
