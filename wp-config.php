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
define( 'DB_NAME', 'belajarsaja25' );

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
define( 'AUTH_KEY',         'Z##J$@o!Qn*mwXJcOo`]!+#y@9rl}Tg:daNgO[!^rOZ(yyV%^_[&k3Fn^DY^fjDK' );
define( 'SECURE_AUTH_KEY',  'z_BQnw2_&!u!(6?PUNyaI1TutS75f|D4,upJjCy(UPrUi1S&}*H<%*c7FWh@+FIq' );
define( 'LOGGED_IN_KEY',    '[BZLRf1:bZ w@$u++?jF%Zp}]]S8P.{wzdQv9cWR3-7r+n5t3nfOxXWZs4N6D!F7' );
define( 'NONCE_KEY',        '8KIbBf]qi8n[}PHCH?-VOP,B2~tw/fDL@^IuE6FqM@1Z@{_EADb<N+x_6oUzH.>*' );
define( 'AUTH_SALT',        '>jF*{HV4L3iJtw)nXh$[J<cUjCi@4{rn0GK6*$=pW^7JfaimdKNZOZfgM>0)}3}%' );
define( 'SECURE_AUTH_SALT', '3#].vW]}vdGI%iSq*jK3=-gFO*!#oXCF2t3,OZYw1EG>lZjzNNi(oFOT8^O[;=P&' );
define( 'LOGGED_IN_SALT',   '?4lPVO`DPRV~xEv;V3z`Yb,9s;#EG>F8L#b?r`&5>3vR 9YXuycT`u7rqO.yWvT~' );
define( 'NONCE_SALT',       '&$ByHUFwJVvnq~5-qVU,ZRr]_e/B5k(`dpZ$yl<9alRzLdIYlBapc50zS5@vFEv{' );

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
