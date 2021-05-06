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
define( 'DB_NAME', 'localdb' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
/*define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
*/
define('AUTH_KEY',         'h)4 *kJThK|7iOm8/[}#(rL&:Y[^iJoD9hH[h|%~,|Kr|sUB7Y??(bm4r.8~~~OX');
define('SECURE_AUTH_KEY',  'f*p!v3)X$r6<>%WX|P$=Go%tF^|ZcX`@1 L!(@AuSYNKg181V}MEH@j|/,(K)!&d');
define('LOGGED_IN_KEY',    'v{ l97n0+YtrbznCzLP4Fvxy8+o-I-#_hT]cR;6k<D:bL6Q<}it|=zzf&pxESF|u');
define('NONCE_KEY',        'v1GP;W](=+bXPdUwCPPBq,%CC+,5.fH7mGJ-=5E3G2DLPO<->io!<~_H=VEQ[|lx');
define('AUTH_SALT',        'oUr#ihk!WEO{|g^]#:$mf-H<ZSk=E:$1APs1ENITO3v7(4) uJ[J;{R[c<cV~5=4');
define('SECURE_AUTH_SALT', ' 6W6)NLyqgF(g9:r;]FT54gn[O(NKLGyqv~2$w~I%~2<PSilep47}Ck9qO@RZ(*`');
define('LOGGED_IN_SALT',   '^A1#Y]^l}pqP}9y}I&-^03+il]V,7*w]mqji5KWfhes.fKHvfpx`TCbo4H=O&nY9');
define('NONCE_SALT',       'QS#B00IV{n6RHFhBCw+7y>x31>%W$^LLcm<;)u}rwlJrg4H_2t>BAZ2y||xTy_P{');
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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

