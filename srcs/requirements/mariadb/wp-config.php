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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define('AUTH_KEY',         'sm|+sTD-y1$xdugLJ }pVI2`Y]Ci)%7}z5fS#NbT^;[.Y9ZS[7,-!m-lu*B0(]%<');
define('SECURE_AUTH_KEY',  '6TrsLDooNshR_cWXK0u[9tc m2<S|+1V-jOda-R-5Cu^34a)#g2>58?43: Wi*!*');
define('LOGGED_IN_KEY',    '!M&D@w8}@[H;gyg|U5A%81Lsd#U0q9en-xZHqN4YJ-Vj`g0DrP7Ux|+9-6|7wH&<');
define('NONCE_KEY',        ']F}: ps~M-To8dqU!Xynypb=05heb9Hf.sB-LOQ!/@:;+fZN}f1w,PFPw?Wq3n(i');
define('AUTH_SALT',        'D%u+u.tM<ulOJU6:oxMwtL~t5|rM/nZG)b$Nq-LBR#aa|9.)+&]/Lc^XY *+:m.J');
define('SECURE_AUTH_SALT', ')6i+[t)a.NW7pUN%lZl88.|ncfZ+_t2Kd,&rMB34Z2Wr^54D+1~>VgVCz@C8#3w)');
define('LOGGED_IN_SALT',   '@`.-FLPWPI9P(}Xp7.<,A*~E:ul(W-$aut3K-ig69D=yS#u[|CA|;P<xpe0WH@82');
define('NONCE_SALT',       'a;c<SPQObIxLC%fxJ u$/el^~@g4C+-!o-R8Ps)a8q+gewt(Nm5@tlh#yb0Cs;q^');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
