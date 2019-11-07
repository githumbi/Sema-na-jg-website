<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sema_database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2}M^=GyX;2@oAU hJ)D[CWTBer-vLmU*m[:O!2lQX+u1c*G9bD(T]p}[3?&lv1Dx' );
define( 'SECURE_AUTH_KEY',  'bo$Bu{tK9NWS.;0*QlFeUf}M:)fwC=C.yu2vnCOYl4RS=1JZceFh-c$:~^f=s /t' );
define( 'LOGGED_IN_KEY',    'Fh>J-4b1BIJt,(Iiw]S06AMi)/48PjILO9;n5&!w5Sp~CNvO9q=Yy# zH,52bmY7' );
define( 'NONCE_KEY',        'oy/X*2eGM,9A]3}5kP}RSvSh2q]qvJIVw;=yQ+]4Y,3OEW`)tC6c<E<dc$#%F>0z' );
define( 'AUTH_SALT',        '4nF4sjg>LN8ox;/iAQw@n*(?o$I2?R3<.Qk1-;kp8NXX=tOHC%f{U_h@Lxr1j-Mz' );
define( 'SECURE_AUTH_SALT', 'SU^ _Fidmf4h#A./^`C;A5HAB?h0x}FR*Ec3dv^XgAu]Dn|i=*1`6v--61hS.EB-' );
define( 'LOGGED_IN_SALT',   '0+*m6rx/g^A4K{E<+Yd-vWoj,(>hnBV-hz^RC;B>nd2XM0=-&){7pcVt:~f{j@j[' );
define( 'NONCE_SALT',       '<&94v*iSB9}KK*vUTJX_y70:k 4>@%_OsyQ$l}ouhh<}OrH 4 It:mBK_^FB;B2,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
