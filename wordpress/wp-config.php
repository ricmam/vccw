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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '9{L((_$UVSIx!Pot?,2(J*gZ,2s[`w4T/pQE-*oauCv]KOzIYOncIoZFdqazvY<c' );
define( 'SECURE_AUTH_KEY',   ']CtW{>d_W~nb-oEKK-S,[:NU,2mo^q_u%Xl/ZCCoz>/Kv,Rfw2<AJq,Md/QD]f<%' );
define( 'LOGGED_IN_KEY',     'xm9f1>^K^*ZM3`{`,/*f(yQu0O(Zb${-=i4S!=eRD)0J)tS6j7NHB^5]s8:U;Nu4' );
define( 'NONCE_KEY',         '`mKzQg>x7o>x&L$c*m][y3-YD|RriblKjS_tBh(#i`MebP{ot>RP$F%s$Ys^7c?/' );
define( 'AUTH_SALT',         'R3QMyu4i@Fu[n{8h@KZ1?9;2-kp= e qsU&ZS>%e:;a-LmVft^=>p7jSQl/MjOzM' );
define( 'SECURE_AUTH_SALT',  'Gjv&iIXK;1ruUu<8}a&G*})U`[fcyWEqF0HbhTgNY&BCZ1o}c0rQ`Mt?x<(1qjoE' );
define( 'LOGGED_IN_SALT',    'P%CW|3<8rf/dE=6qa q/5@FMzl?]QBc&T?`GN[>I|5w)F:!*;V@{{^m p0/?&{Q6' );
define( 'NONCE_SALT',        '9U[1]:[ljc&-|_;8!owUpm_@c3:-w)EuNVgKQmlS~V#GgYz]oq^kpsN2QBNmdLau' );
define( 'WP_CACHE_KEY_SALT', 'bVP-y8sJffhW|SFBV^?IQ&5_9yr:gM!` Y24-&%}J_{xHns~L^)1QqI|xy0cx$=}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
