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
define( 'DB_NAME', 'cms_data' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'XdU>wICQ*P(c$@}FU?vpE2k:EI 3vOfGBs+n{6_y@I/^XD-$,B]Cmv[z.hXp|CVh' );
define( 'SECURE_AUTH_KEY',  '0> R!fR&O/6Lb*VZH-IxPs<X[t]%]62psedy,LV;dWj_!&+ XTNV^nqeHC2@T(w<' );
define( 'LOGGED_IN_KEY',    '}h%6V2N4|q_P.PQ=l%n9$Ei~!nT)w{~/F5COX-}qf9[uJrw2E v;eD`EuBH>%uz/' );
define( 'NONCE_KEY',        'W``0Px1M<a>1Old~|Un+Cvz.R$>T*2pE%YV98f^2Z7J^L~Zp%Ly#%YF~SoE>2nC)' );
define( 'AUTH_SALT',        '!8uL%Gaa(~/_,eo_.UAD3M8P{L-vh0_|gvdH9gi}Vi1Ig`?4]p[rRf&V:Z%dY!+c' );
define( 'SECURE_AUTH_SALT', '2RI}*1:U;@2o,LM*d]NpqetNpR6jE?P<;{jPD$u_WTE*;#X@%2/gX5^>w3xny47G' );
define( 'LOGGED_IN_SALT',   '=iJi>GERA&&JRfRes(nx6)i=hHhocqeqZ;5[^v`eaf7,cys%c38g_mu$*!Qm(ifC' );
define( 'NONCE_SALT',       ')[Mz%i$gb!st^*sFjW P$qdL(-y9$6@>, lX^j,{-4wB&l$T@ 6jI^hEod]X+3QT' );

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
