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
define( 'AUTH_KEY',         'l=<YKlp/pg:le5VA1IFHO%[{eIQ?yb62k6Qq,H<he8oGSU]K#m=GTjdCTF]NsLHu' );
define( 'SECURE_AUTH_KEY',  'd5uY{LOuJ4lon3zDQDK5A+HQ3TMQI:*pefE}+0Dlv$],@g_m{%FI}-<X*.zD$tzu' );
define( 'LOGGED_IN_KEY',    'WF!CGc?4~Gc#qLTI+ad[Fd*rU}:9wX/cJus[.J<ihU4Ig3^~/J&V?-eP`<7?*pA<' );
define( 'NONCE_KEY',        'gTXJ$)uT(^JE4SeIeY(xNp)?7&^4{!-pIS UbGuPt-=Khz1iHv[xdF=sum$,9].=' );
define( 'AUTH_SALT',        '(SttlW&Vo=It9<oCv9i&8b*bt,Z3.9@)@/!UmPF(1~n0xqE9h9cN.{FIi6_%36#Z' );
define( 'SECURE_AUTH_SALT', '[sJh/7hXF*Me=Y2ED5K+1y8n(W$ykh*IYZRjoa1pja`T+IZePsj*N6t]0Vocs9#V' );
define( 'LOGGED_IN_SALT',   'td/0i$OC{?9lhD+B$8?|,q+;iqr++@hxQ(=|jnN,J569R]Gz>nG]</MyAtfepxMK' );
define( 'NONCE_SALT',       'qf{Z*[p$*:knf}jSJ,C84)h!D Kse_lm4Qsp`UJ=MR@0P97@8sh]&bhm_quv=s`(' );

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
