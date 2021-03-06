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
define( 'DB_NAME', 'projecteife' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', '10.2.205.36' );

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
define( 'AUTH_KEY',         '_4bE# ?KQg4W[~f_>FTc=8$rE@W7]q<Hja>#gPp#&[W#q*/Gkb/Z)Pk&on2#e?01' );
define( 'SECURE_AUTH_KEY',  '$3R<}|HMVw)L# oeaB#sMJiYD!Re.ioL-K;Jmgr0.oBG5ZFC{t(AE qW1:Lz>Rb9' );
define( 'LOGGED_IN_KEY',    'x0?47BkxW|e$pF}ex!;PIrLb)8>-0|6hKpGPtn]Wb87W$>;mQA;0*f7F`REyklW@' );
define( 'NONCE_KEY',        '+tQsS:DAic}(~/ k7BKV=1B2M0ZZiQ9>SKjCo1bg][R%G?8.Ae@)2goAuNT=b83r' );
define( 'AUTH_SALT',        '$-JxY?*([`hl*x+B.Cp~c9|2Jd#o?@C:rK`Ik3SYSzaqur8iAY:?w[!d$Z3jP.6@' );
define( 'SECURE_AUTH_SALT', 'X//tDg{`Hy+k:jEtD0+)S/i>psa@T3i@crYoE5j|eW^=pqwHbmHxd,Rp$EC2)<_Y' );
define( 'LOGGED_IN_SALT',   '@SpdO4KuvyLw&)MTS#?Epl*_o]Be!q}yppNWI9,SK9gId]H;5J+6P`YwQ?LLg/o#' );
define( 'NONCE_SALT',       'zste*N)#;uTGD</uuxzsi4]bGy>gEw,H_9?9)tuGjIvSAG^E()zE~0cR1l+*wg._' );

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
