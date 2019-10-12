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
define( 'DB_NAME', 'catering_db' );

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
define( 'AUTH_KEY',         '-mMPQRhW&o>y^SDjD:2MvDy+H,kd1QW@:SFNt<B/]5z|$,iJ4 Z{Mz+wrMhqN69x' );
define( 'SECURE_AUTH_KEY',  '#<fDxzkLI%^4l?CE5|5/Iatbels**^1$QE$6g0$:_swp`BT&5_w<-d0b^noAA&vM' );
define( 'LOGGED_IN_KEY',    'Jm4um4blpz x`^G94eQ64Z>5CuV1xPQ^JLQRiWt`W$Y{&>?]W?^]DV]~H L+ Zwt' );
define( 'NONCE_KEY',        'H[H@|K+^D}QlL!>LPhRXw2)cE^5zoCa}u:nDHR(eWnh#{LSR.Q}-@f=}1l }Os7}' );
define( 'AUTH_SALT',        'k?_Am/ahyPtq{t>A?plGa1 M0{?KdF/C~o5!FWDD2innH1X&MHb4(Jx:VW!=[j>h' );
define( 'SECURE_AUTH_SALT', 'X|5KQst{ngTo/9Kn,QQDcCa+.{2CI_!)6;e+y&fXj-1|C:{L|I.q+O@$mJp-wR<l' );
define( 'LOGGED_IN_SALT',   'mBO1xT-24Ah-)+oXW,!!+UkISVgz}#9u(|%F6OQ5q6X@N{uStw 3Mu^1{v]Yy`Vu' );
define( 'NONCE_SALT',       'v<A.]}b6Ed,B~Jxx]xdCc2v/jqjRxe3)~}y!,gghZ2u_i6MpOKG;hqjj.Luh[{up' );

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
