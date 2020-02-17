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
define( 'DB_NAME', 'helena' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         '|D|;dI=#,Fj/s)($r%ISZit/phw<{^aujM.Zui6Ge141/)pXWRASH&,A5;.KBUx_' );
define( 'SECURE_AUTH_KEY',  '1_{Il&G>M57 %UvJaV=DKmc[#vp/cEF(4Lmp|Bna8jO9Vq#!vKCvKC{8S.}g<RoD' );
define( 'LOGGED_IN_KEY',    '`$6kRXPwTjgg*?HS@JX*~6._prB,C3LeE<:7XdwWL>pBl:U+5wRRomx(@|NZWwR1' );
define( 'NONCE_KEY',        '$?3=`GTW_2CeF4t_X773(Iw.= }>e3g#x$U2O.QNd7uAf1G (f2>!T}6gJ3,:,wo' );
define( 'AUTH_SALT',        'qBP1Y$wiY,/z6g4ik2)|+Qf~ SqLp7Q0XZa0?SgPH1XJzEzR,|sB4+<koBiiKDo8' );
define( 'SECURE_AUTH_SALT', 'EJ4o!XI>+f|Rv3<&pt%YqRdTfxG5BL{s/?YDwmLJ7fLf*ITQEh+^?x@E27xsS9re' );
define( 'LOGGED_IN_SALT',   ']/~&60[6Hd<t=jM?Ro3t.NVsP11KAp}8R-;lPu{Wv${p_o{]J4P[t8Aift>3]$Yw' );
define( 'NONCE_SALT',       '~O g/]EhB8lji47sMXNX6}Kaw=gbCr}{uH=l~35yon]qK[o>|MKlqL/lOIvOE8Qz' );

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
