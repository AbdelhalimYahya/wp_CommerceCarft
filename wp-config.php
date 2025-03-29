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
define( 'DB_NAME', 'ecomm' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '_SsLMLD]@N=)CHv/n>~hI`l#0`C9l4mmbV3BI8:-b=2rxQ L=B^^fMzm^+#p;]74' );
define( 'SECURE_AUTH_KEY',  '1^6ps=4ag`gsrj56</OK<&-GM9YOA ]aO}sOqPMxoq4!b[t+_a,p;J:<gT%!J6uW' );
define( 'LOGGED_IN_KEY',    'u]F8Tz_wT2+u3a~DdwOSRqu}`e[1g5oSjw ?ADwL%+]jXa<_kREKK6JJ7ePtvD2n' );
define( 'NONCE_KEY',        'N(}h^V<(=nmJH0/Bd:C J,A7=l$s{bo|b3U|r Z_h8jYX!U TzGu?D)C*1Mx:c }' );
define( 'AUTH_SALT',        'UAO#JVT;Bj*T{H|)IbNvUIBpS,<F6uYp[H=9o=+Rh.uv^5`ax~6W{}XI!Kwrcj[L' );
define( 'SECURE_AUTH_SALT', 'pL2@7,]MV>|}{Oe$wD=P=GX55+>YK3^kzZuuzi`.c%&^OKZv^8vNLyUpcBEn1B|m' );
define( 'LOGGED_IN_SALT',   'mj}[Lub?/goD!.jj*.o&{P$HlH,h.!PL(J_jXAN>HA6*e^tL;E%h@szt//-GwR]L' );
define( 'NONCE_SALT',       'NVS]GH5|~A3EZK#z/sFC#eqefB&^4+}vS!Oc|JB0uu{5xYDj<EsEKYVo,;p$%xvS' );

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



define('WPFC_CLEAR_CACHE_AFTER_THEME_UPDATE', true);
define('WP_MEMORY_LIMIT', '768M');
define('WP_MAX_MEMORY_LIMIT', '768M');

define('WPFC_CLEAR_CACHE_AFTER_PLUGIN_UPDATE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
