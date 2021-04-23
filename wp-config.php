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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Blog' );

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
define( 'AUTH_KEY',         'r./SIZlBl,x/<i6=s=Bvq&jS{Rj]v]K0nzee%M]upa4W!a(i(H9&pAc4wsmI7<Op' );
define( 'SECURE_AUTH_KEY',  'I/_>)}DG0X_3KOD_GcTH^w3Uk%3F1_lP6<YG*v=FwOtHX@,u,>+5)9|N3PVJ{28T' );
define( 'LOGGED_IN_KEY',    '.o{#:d=3QXgDM#ui*b%jynE]8b~N8hv&*Su_X[c!M|PdD<I?aIo_j-b7f ,%wMZ-' );
define( 'NONCE_KEY',        '3,_x>fBl%|aEaG<Sq1i |L8ixd%,Ebau I}H[)#*!t$E5@U8AJusTtLn.Tm|ZK{=' );
define( 'AUTH_SALT',        '|EkuY$]dY;,@dK/.(G9z0@/e7R5${!GT^32dKdw_oxt/xr4@*p]TLr0<U!+,e6NX' );
define( 'SECURE_AUTH_SALT', 'y^1S3},mVqm:/0BH:@lT}:x&[O@aI+7mUIaa8{_47wv hBog%Wm[W/(|p_;Q?~qh' );
define( 'LOGGED_IN_SALT',   'jHVXy2,zAD}Q!f/0Ys<LQU,aEMi~f?}JHfQ$ph*2O-YX<XF^r@qDT0*4.6<A;^Az' );
define( 'NONCE_SALT',       '>,!a&(z~nsu<L4$A]>Rax7l_jSFyJc|VRt(amQ)PDI:17@bL+c,o,g`d^FIdPcHV' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
