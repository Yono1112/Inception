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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );
// define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress' );
// define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );
// define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wordpress' );
// define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );
// define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wordpress' );
// define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );
// define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db:3306' );
// define( 'DB_HOST', 'db:3306' );

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
define('AUTH_KEY',         '6~eSDz2YwK 532L~=.)m[/E!7*t%O2n@]$hG*9h]2uCS+? cCF=KiD?uWy;k-t|<');
define('SECURE_AUTH_KEY',  'yJPp>+t]e$Y|t2x/_I|Y(.Nl$GvkkI=|ucK=+q+RR!9jxs-P|gq]{sXMhjR+2Fh|');
define('LOGGED_IN_KEY',    '7?w|ya~b-pU6C-7IU=bLlf08s0XiNS]-Y|xE^l+fu}?+{{90hVTJAhA!;3n<tkBo');
define('NONCE_KEY',        'l|;ur;%a3N)1HT#XDh>o3|=RXVm2|D+W$.)vXgXr`KV_9xAn%t5]L=9D;{9SoXuZ');
define('AUTH_SALT',        '_-rtd1s@v6!2_y6/ g-}s^@~`Qi=|koW!(k,lSAC$V6rEbqABO`{leMx/$K!I3%(');
define('SECURE_AUTH_SALT', 'gKuvEWeX:H|(AK-xJBteB1|+H-^RdpzKY=9D57VqX8Yd]7R+-&cNh0,#/h`{^S0e');
define('LOGGED_IN_SALT',   'oMAGB&N|&J$:wh+g3_R2;M|mco>q+xeE _OywGcS~ZRaM`>ug.%nNb%:>Vc-RQE;');
define('NONCE_SALT',       'L`-3^V4wERtBT<sPJ{|+:D8z@e[,p)J}Zw&<hO|7C}fHV-WUwvP{i+*r,xfc-yn%');

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
