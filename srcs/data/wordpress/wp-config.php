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
define( 'DB_NAME', '123' );

/** Database username */
define( 'DB_USER', 'vferwefwfe' );

/** Database password */
define( 'DB_PASSWORD', 'fewfew' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',          '$7=V.9*$kRPOIaYdPD/#KRpJ<A^7CdL<a5O$ UAWEQQ+R`$!Xs5VV#ZShLVHk=Nx' );
define( 'SECURE_AUTH_KEY',   '[(x:z_~$T6pL=F. KE]RATlI{V/mr.tF)]Dq2yWF{?-!hA;61[tzE2P2`rka]<G;' );
define( 'LOGGED_IN_KEY',     ':D-=B.Lla0pH )ny&m^Bf;FKV{YfQ9A)WF29B{XkSG066ffOL@|{0#W{Pws!TlAp' );
define( 'NONCE_KEY',         'V5#0}=?]{@`CzQ2n0v=NKa2a]2]~dv*ih|nO]O}:y7^FY7 ;W>_W-tj3y5qM21K:' );
define( 'AUTH_SALT',         'DBzV_3p{1?FsI-:hK$sdexI49BT**&2F{hXs9RI9LG0oPZ/q8)`SW]/nW7~-5_sS' );
define( 'SECURE_AUTH_SALT',  'xv/q*.n8rrSbp{jQ4^eG`mdA=`1Vdp~Pvz&D0^un//F7!Z49e-zhx>4m_a>5=`zw' );
define( 'LOGGED_IN_SALT',    'pU/QTJY66*TMqFnlWd##Y%oV+s`/1-4gbpasWJYF@2*AR=CW !hJ9?*c:kxNs^Ho' );
define( 'NONCE_SALT',        'o2QqQystdaU<rl{il*4kwpV_EyVNasmi4)F05cv;:y0I]#E@];n|3Q&Z}G8czwAO' );
define( 'WP_CACHE_KEY_SALT', '%`I/!_4A_2*r# M.P_UcWaOFr$QKxO6.}h&t,5P-&>JWAY%W**3DdlLeEenzGUSR' );


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
