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
define( 'DB_NAME', 'odakun0913_w1' );

/** Database username */
define( 'DB_USER', 'odakun0913_w1' );

/** Database password */
define( 'DB_PASSWORD', 'rfe6lqdjcryd' );

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
define( 'AUTH_KEY',         'n dcWwWD?(w3`24ck }2Enh*s;i/mg3HoCGwBRw]tg!YvWC/0w?Ax}W=WrfocOiJ' );
define( 'SECURE_AUTH_KEY',  'VIEAnF1N?9yS~[2{j(j,jKYQ$a9{*LF)OwE^b-{AT({1FT]ty.oY>*Ywa|;mMDd`' );
define( 'LOGGED_IN_KEY',    ']Xdu3 +0xL()7vTMJf+Q7^rDD?{Z:X03S$GYX|]jta;e_CiQm<S@Qnzq843dEVRK' );
define( 'NONCE_KEY',        'w1G+SuNs}j-_b@+on&_c9o_#87D8@^r)DX)w8:czEmSW:q6=loTV7Z&s]@?0]%zS' );
define( 'AUTH_SALT',        'G#~pfT/!8XRR!ccF?gQx7tcRrk[Csj;=9^x^i)Mp2zyN]z=MP]l)=H>C6fP)j3H(' );
define( 'SECURE_AUTH_SALT', 'WaH@%ySO$>R66FBdhFo#j1{dTQP,)Z{k:qj4_b+@+jU:]hb5-$O*VGyM]/9&P0I<' );
define( 'LOGGED_IN_SALT',   '6cBv=GiN2uz}]l@C_mJm`Rp;az:-_yo^(%NwVsIw(QO}|In+h@H1-CB,ovu=hk?h' );
define( 'NONCE_SALT',       'QKO5)ya8_A_@>TcJ##Z}l0k4 SKeF|?2+wq8){e{/?,yF{Dj~ZFaq!MeacBe#fH8' );

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
