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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'MKj`m&;?I2||eT&$^P&[|Vg/0gqN,<(k]8$Xjr=[EgpXe9Y%)7~CP3K?oHSY:5v6' );
define( 'SECURE_AUTH_KEY',   '{E}BeyYNN P _E4;!~Yki9%D-EgPE!$(1@kx%9;%OR@sqMk}aRupKg~{g{(@1lS,' );
define( 'LOGGED_IN_KEY',     'r{Z24#xN[_2N )(KP2u]EzPNb.7,a9OJ7]JecPx<9cdX<Nwt5#s;Dj3x`7AS-QmU' );
define( 'NONCE_KEY',         'V{q{Df21fQq)j7%j ZGw3MR$pra[WOf#y2AGcTQ;|1hn-6UQkAsZ.1Hs!5cod,p*' );
define( 'AUTH_SALT',         'BErM*hEYAkIikSk*;]Wb:F)mbHl];|TxH-bZI(l;+481Yw^-Tq&g!QY,lt{7:fe%' );
define( 'SECURE_AUTH_SALT',  'N8c_o+U>]a:DSwnuD+K.D#uUvtf=WLiZ]qx]1{c<bjg;y7XALD. 6LS5s~;6y#tS' );
define( 'LOGGED_IN_SALT',    '._90Yl.R}}deiC/~9 d@^W;M)qzc~}]X._ewysx:~A1}J@+UV=f`$bm>~bh6BA;]' );
define( 'NONCE_SALT',        '00?d4[3#M@w +R8R#/@s!*zUr/-raWX!990Lcj6AX>wS$;.2/*V0[(PXK4AW(MJ=' );
define( 'WP_CACHE_KEY_SALT', ']065;6t(I-I_:!Xez!Ix}{;N=vsE :)!uWd4yUr}XI8{1L&Q/%L ?|Ex%k]4b/Ht' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('WP_MAIL_SMTP_HOST', '127.0.0.1');
define('WP_MAIL_SMTP_PORT', 1025);
define('WP_MAIL_SMTP_AUTH', false);
define('WP_MAIL_SMTP_SECURE', null);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
