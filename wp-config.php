<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '8.`<1$XZl2Kfk_T<XOEezrm%j8s^:oMbRK.XKA6C|&,$ufM#dt W.JN*,daE|/Gz');
define('SECURE_AUTH_KEY',  'rM.<n`CbQ6}j}%5EaDHT(85$Qj@CE0&B VZC*uA,uxvUT(n$d#SYv^g@8?z:W-4e');
define('LOGGED_IN_KEY',    'z*eYyfUe3X/5!2.V2w!G)G8/p=F~9_5Q%t{N/S]v(XXNaAQFtj(=B vql&ct %q2');
define('NONCE_KEY',        '$cf 4I&,F7z,|)z=U T|nQ#wQLedqlZ|*qAD*exfA;&VL)WWh EaYCp5yOiuBvLi');
define('AUTH_SALT',        'U}IV^<**6]W7%?i6..Rx(v-{WxJrkB46Jm5InwF9+}pcW.S7eiKp|QDIB3y+_h+p');
define('SECURE_AUTH_SALT', '~4P<||TQQZLqo)B6aq<Z+Uq+ZN<:30sY{2,_qdgeN-0_3b-QIitto1&D2+}z*]gm');
define('LOGGED_IN_SALT',   '6|,^/%~~T0:9t}25^pSTEE2O H}1isV6UK~$|axc-Q6/<,Q:@C YZ&i$$JMB&+u;');
define('NONCE_SALT',       'jFFLw]4+1R0-#z:~&<>tno@&l4-L6D+FfQZa|my`E_t^2a~0ve6L6I`Iz#q>uNW=');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
