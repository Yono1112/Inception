<?php
/**
 * The base configuration for WordPress
 */

/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 */
define('AUTH_KEY',         '6~eSDz2YwK 532L~=.)m[/E!7*t%O2n@]$hG*9h]2uCS+? cCF=KiD?uWy;k-t|<');
define('SECURE_AUTH_KEY',  'yJPp>+t]e$Y|t2x/_I|Y(.Nl$GvkkI=|ucK=+q+RR!9jxs-P|gq]{sXMhjR+2Fh|');
define('LOGGED_IN_KEY',    '7?w|ya~b-pU6C-7IU=bLlf08s0XiNS]-Y|xE^l+fu}?+{{90hVTJAhA!;3n<tkBo');
define('NONCE_KEY',        'l|;ur;%a3N)1HT#XDh>o3|=RXVm2|D+W$.)vXgXr`KV_9xAn%t5]L=9D;{9SoXuZ');
define('AUTH_SALT',        '_-rtd1s@v6!2_y6/ g-}s^@~`Qi=|koW!(k,lSAC$V6rEbqABO`{leMx/$K!I3%(');
define('SECURE_AUTH_SALT', 'gKuvEWeX:H|(AK-xJBteB1|+H-^RdpzKY=9D57VqX8Yd]7R+-&cNh0,#/h`{^S0e');
define('LOGGED_IN_SALT',   'oMAGB&N|&J$:wh+g3_R2;M|mco>q+xeE _OywGcS~ZRaM`>ug.%nNb%:>Vc-RQE;');
define('NONCE_SALT',       'L`-3^V4wERtBT<sPJ{|+:D8z@e[,p)J}Zw&<hO|7C}fHV-WUwvP{i+*r,xfc-yn%');

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';