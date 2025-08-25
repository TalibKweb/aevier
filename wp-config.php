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
define( 'DB_NAME', 'aevier' );

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
define( 'AUTH_KEY',         '>e!KAZ5zEWkKDLvoCELJeL6v-U X!Su|lm;]0:)}~*eLO$Fr|h?i@,gu|C)fW0]3' );
define( 'SECURE_AUTH_KEY',  '7.sKf}N^G?zUeGeF)%/WyxN1GZwZ1bE5cGP-Lq0q:%xv^$qI&pXs,(=rAi:9p8+e' );
define( 'LOGGED_IN_KEY',    '};GQpM|?L@=X}J7mm6V1R|wh9hVG}NHNp|KCwK=3Nf$1$UT*J%%We*O%E;k[s5@^' );
define( 'NONCE_KEY',        '3zL[T7TcG|ZVAz/VX(=G{9Gl`>sD#bgzAsXanUe{+|qS,2Ph#5|<M.>^m+~Q%CU.' );
define( 'AUTH_SALT',        's?Vu-xMsqpD{MK$&Nf};[Ro1tSxow*&T]gXP_nwx*>Sy8U%+pu+[quNgWFUu1b#.' );
define( 'SECURE_AUTH_SALT', ':)Q6d$1pGbPEL>iv~4q#quH5V{i+pA<L.U{XWW/Tgl=%A04H_le7<aNc(+~kw;Ic' );
define( 'LOGGED_IN_SALT',   'Ig[ZZE1aiN_~QwO>D&D X_mdRl5kC{(-(LIp0hI#6r3#]&tFZK}mFlC;pXHXvsQU' );
define( 'NONCE_SALT',       'XP{y.&(eHZBHr1tT&$Y{$qI3+m)PGl)5 x#f3u;,CoNWQ5-K1tW}.)?>plgv5I]8' );

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
