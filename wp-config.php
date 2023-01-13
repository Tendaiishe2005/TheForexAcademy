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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/}@jxVF28.%P>6DYqY9bgX8mFqOj!^<Xy iu .4Aws%@dN(!=?)hm$5:k&rf#]oH' );
define( 'SECURE_AUTH_KEY',  'o[&LyFA>kj|Y18(X2Klwbnols}59M!>&Or>125Y_&CSt;&PNeDwate>2xIo!iRUZ' );
define( 'LOGGED_IN_KEY',    ',jWF952f}1^=#*zXY*,N!MF6Y`O9q[5TrKx?2Fsc+4BNpm+m{J+eBWL9`4?}r@P(' );
define( 'NONCE_KEY',        '0c>#u*5d)=Pj5vvZ[$d3F.` MvweI+k*10U|cTjAuf}KNl:8BZH^<Mf M^JK~dy=' );
define( 'AUTH_SALT',        '1-8DGC(f%%bW4kee6w`Us,A,dz%EZ Pt/Z1)J?T{3Jau`b+3=^A^S#`/xG~#7w;{' );
define( 'SECURE_AUTH_SALT', 'E]:8/yOzw^[WS$P>F~sX0VPfKTJC7N.`3nWy)o4{hi%ot+bpJ#HY@2o(ZHl0{MF.' );
define( 'LOGGED_IN_SALT',   '[<iN`0~!)W0R!*mkMZH2,`+lPi<4PJful:3(BF^gfebs/YO6h-+|@Y*: n(<md5~' );
define( 'NONCE_SALT',       'A*|j<-8y].iY0090/clC!E;9UY@5Kn>z3NE!`eeB?Jjw]olv>@1[{qjH7!oY:`&R' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
