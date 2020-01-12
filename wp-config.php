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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '[>,C(35-v(`*fG.lUn.B`6~(8I@P5xHri_!B4t1tF=IqPCLJ%W[G:6$l7b^]ThJg' );
define( 'SECURE_AUTH_KEY',  '|: 9SCSv|[{5jQv]&3k_fGok_!lt+_%wf~+FqS[q>_Db9GZ 0:Rs>1bJ??H,6R](' );
define( 'LOGGED_IN_KEY',    'bpV5pOi]b^kD!FWeKLW*C_F1Z7;Nj=:gp#_K}E8s?4V>/SSwsPp{?x3.pp}yM?dK' );
define( 'NONCE_KEY',        'v^xL/gH(tSTjVYPfCN0Q4n<pS,7cKnz %R(i18XO(v8r2a]ti*V`J3w-vrzMwFu(' );
define( 'AUTH_SALT',        'g<S(QU(7rV^;=#atOo/Ka5ew.v_Hvya?}8F=_L{pyk;(<%ln=lZOZBvI`=Y*|nBp' );
define( 'SECURE_AUTH_SALT', 'kaanO!E[y}[I;]+9TmOZc@z#$Lzr;+Mc<fQT=w1Vw3uF8.(&-*HsEYjN2W%_~fOL' );
define( 'LOGGED_IN_SALT',   '.j>K4dH;;gMvRLy;e:mE:*c(U80QQos_J(TOL&Hhemrx/xuqM.w#s<b*Ke#W5)en' );
define( 'NONCE_SALT',       'gGN&f>xDX$Qsx`l3fqp0x;]5Z=E:-}*@?]k^LN^<-5o5LK8Q;7Hi+-]L!j)B~&#[' );

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
