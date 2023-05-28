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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neww' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'kU1Ev|`[*DB[+%6;TG<:mS3{:9hKk92{>-Mky1P_F0wE*a%O}cCH*l}WO%{wAxES' );
define( 'SECURE_AUTH_KEY',  '^q@pf$=G8[BDAnUKd^MhDJNU5yC[t@b]G62-Y&ei_)Ywq#=&)9]ImgYfjB:h*4)j' );
define( 'LOGGED_IN_KEY',    '^x3&(c^0,q~[0=*dKCK PW+)cdu(L$jO$*c(_,qF0u_UqAfNq]iK[4Y0>$g88@(Z' );
define( 'NONCE_KEY',        'n3y1yDk=5s[U_QV68;wIrhnqUzl$i>U4)jli:=9O%qaMzGhfi(TjmMim5%QtVR]g' );
define( 'AUTH_SALT',        ']~3BxeDJ!n#~kAkev2>;yxU8kK|GBFmRrt:$B*QF4A{*wSt.[YPub:cf5yV>slM#' );
define( 'SECURE_AUTH_SALT', '@9%y?(Y;#P#5NXVD`9xWH]3)!O^t*JIk;Bh%ov.Zm21go{8 :6OksVDWgq3=zz;>' );
define( 'LOGGED_IN_SALT',   'YWlUZaP,5t,+bh3r1~fg=e<=PX~[)%G3n rzmsmY/`)4b4Re/YyCi.)=T(Ba&f(I' );
define( 'NONCE_SALT',       '@]H*}`RPFRPyCOJV#@3C*|yRN.G5j6bD$?7)CRLGN|fXHL;7j)C`TtrO`6tk?rq6' );

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
