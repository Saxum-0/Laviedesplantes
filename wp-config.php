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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_Laviedesplantes1_db' );

/** Database username */
define( 'DB_USER', 'wp_Laviedesplantes_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_Laviedesplantes_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'fez<c}VL}MocF`z#vet#fGUs=^ce_VKPIZ=N[v}moKX_w^JHyxPn,`:C33cmb0{$' );
define( 'SECURE_AUTH_KEY',   '@X3H]fRMoyfCoR*qCkl185fL:8A8IQx7sW<gK3g4s{2r9 $WGddgKl)p((2`&wFz' );
define( 'LOGGED_IN_KEY',     ',Y?SC6.?~5wRvk+e=Kj*JZkx)t1K[OTzP>X7wmvD+$c7vNFbqCu)h<5+jY%7y0IV' );
define( 'NONCE_KEY',         '7Mz3vSg^C$*W+BxvS`i;yEHuKj3v&+~wpV?<y[_w[?_ ~[6U0a2&2$5<>-R^ZaqR' );
define( 'AUTH_SALT',         'Lb_&+oLNC0;OJ/j|PCQ}+PP7Rmx,`X5z?]9(/0r/9:UR}f^aKaWQLF%c)dPN@X2?' );
define( 'SECURE_AUTH_SALT',  '{H%!CW?m]#r.]mCAm[) mrzT<RaxMtn-y_)d1i:SdTFS*9F&^;}2G2yVAxbv[8Ey' );
define( 'LOGGED_IN_SALT',    '] Ib[L;$T[j;)sP{{q)u>:)plyA5%l?$iw57JFJ96>Lis1q{es8RB.1foYxw/MCF' );
define( 'NONCE_SALT',        'V62_Tw0d/5yOOtCD3)tOC(goFF!=%Kvqgw,MCCI~3K{5pXOk9uj*umaCPlW~%zau' );
define( 'WP_CACHE_KEY_SALT', ',4uiVQ Cm~3ctktOg^]Gz4D4CL;mGP@R&::j{i[ol>$g0R@ENjeZ3dDPc:^zps=)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
