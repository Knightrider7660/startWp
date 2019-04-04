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
define( 'DB_NAME', 'start_wp' );

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
define( 'AUTH_KEY',         '(cQowu]Rk[osxVN2W]=7aX*pa?RBBB<(TOUi.R1YwbEbY79QTiE><($1d]^*yG]>' );
define( 'SECURE_AUTH_KEY',  'u69}0]OQ+Ug>T#yT Q<MC7N6HN:+01+T~kP w3%bz``[|@En+hBxNa:/]F+~bU <' );
define( 'LOGGED_IN_KEY',    'w$)|iy1|mxWg>ms~,f|6=5JlZbCrc@YR4=8!9nZ$g.:?Q--B(46ySV$r:4gW&qt5' );
define( 'NONCE_KEY',        '0:+{P?=vIF)6iGV*eSEU5o1G$U<*jZ(Q:.JK>/^]/mN}>9GP#1NEX4C.oD%[+vc6' );
define( 'AUTH_SALT',        '-EJ@6W6h/~j_?&x/h*cYxQvr+]=GxJxwKEzmyg4).#8)^#`Dbq|ovKy75rSx}g5l' );
define( 'SECURE_AUTH_SALT', '|$Pg*?=y>THww:1Sik>q=.Jd@mpn:)5~20{z0Az?VHYidD:92UHcrEj:3`xgl{B ' );
define( 'LOGGED_IN_SALT',   'K{qg$U2>zAD9,d?i]^WQ$Fi5ZE?VyO?iXV?%ZgCFv*%2r$BgGiMvPt-=k[-g.TGh' );
define( 'NONCE_SALT',       'dp9q;g+cmOy(y7a{,gc[k$$$=2LlWo+g6x.<P@-t4_:KkW g|h2y.XJK(:&%k54@' );

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
