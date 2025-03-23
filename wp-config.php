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
define( 'DB_NAME', 'bCE7U4K8Z3J1Pj' );

/** Database username */
define( 'DB_USER', 'bCE7U4K8Z3J1Pj' );

/** Database password */
define( 'DB_PASSWORD', 'Tz8USUZNeObLXM' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '*Zh]]z{v!aLe%Vr&vsmV8BX7Rjem-u=9J=tpe0>Or1*P7>(U8n$+KFUI#%_>3UGu' );
define( 'SECURE_AUTH_KEY',   '.(we51:TElUI`+fXmE]!?(pP9{Oi?f>a2l-2S=Ns^,G&S2g(oCTm?NXB.2jqJQ#Z' );
define( 'LOGGED_IN_KEY',     '$o&2R59.kmPY;)=|mx.F$J{0mx%o,gNDwatfn>spMkF{}L@^zPDpmz>!C|3{lwH;' );
define( 'NONCE_KEY',         'bs6!UL A.eqZ-H:=6B?qyCa777cq4(Rj!TE +#WV`MDFlr7]uX;NE5z6[|HBiqiQ' );
define( 'AUTH_SALT',         'ec6#o2g6dT/E=sMSi@XSUA1e+O|K~~b<@ki`)m5bhJ0A^o.PSl?bTevr#]7tEQ:P' );
define( 'SECURE_AUTH_SALT',  'aCG$7q,&;.C!?NP3,HGi60?(lPX&)*=^I/ZrB!h4/Z(xhVNt,$;l=RE<O=K|C>`*' );
define( 'LOGGED_IN_SALT',    '0.|y$fu@|;zOLUNDE:lB~chU9?TAy` v59 {Z=rARn~#*`Juz+556wdDA~Z$@_`M' );
define( 'NONCE_SALT',        'ym~g:E[g;)s,}c)oYwlf@U?GdY!1aov91sv`WGn)S6>)rCb_Xv{GC(c!s=C_Ghd0' );
define( 'WP_CACHE_KEY_SALT', '$m6>0bByxUoH60ujLe,PfF:/RjOo5e{!?#8T<=9l*}~u]:O,%5rs@+{O]PMKbk&=' );


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
