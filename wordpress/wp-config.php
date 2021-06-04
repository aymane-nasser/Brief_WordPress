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
define( 'DB_NAME', 'aymane' );

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
define( 'AUTH_KEY',         'VL]$Z?#](I7TOy/MB?4 /9DHT^!lP[x$PzDX8^}I1 bw0|7I^5T-z2?.ec-.{1 t' );
define( 'SECURE_AUTH_KEY',  'LVW8zN+l?D*t$7Q+J97/m.?w|1ZK$CT8cP1piW9KfYBeC&2:WNW[RbTyq[m+RH!L' );
define( 'LOGGED_IN_KEY',    '!HR}v;O?OWJr$Vz7[axU,z3X@m(Xds{I1!wrG53}]w`Zx,9i /Hm!*}[6{Mwe$$%' );
define( 'NONCE_KEY',        'Sq^5X*!gsp:8r}VT.q7J4Hf 4EHC?Cl!<$*MDiGN]c6bZA<8h(=1&SO9~/e-Y_Qd' );
define( 'AUTH_SALT',        'nmU7.gh$e|k+O[96dbp2`RZc4a8*GMn_=)&wGQR<qBr%$#@363rmpU6|%kZCIb,m' );
define( 'SECURE_AUTH_SALT', '}~ ]]o[e}e-=SLRAL|P4>:&PCXDVOuVcU!6(n3X)GK0Jzq:].O[E8L)6mvQsZD0-' );
define( 'LOGGED_IN_SALT',   'rQNHFJ~moopW9a,2[_%&Lpk4iKro*(}*ZD|M1%(q:gfZ-!A2{Ua<|Cp/jrF_-L}Y' );
define( 'NONCE_SALT',       'P]vhhL7P**)d]=Ev@J*YhoUi%Kwrc`AA6.=bcY0$!#+&GEk7Cl6QQTSoT*Z]HdZo' );

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
