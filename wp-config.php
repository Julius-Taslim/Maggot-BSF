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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'julius_wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'julnav4545' );

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
define( 'AUTH_KEY',         '&L$E,hNHER!/JykGj0r~g$J qGS|TQjg<ia/d{Z?z4[B99&p.PK4W[3>YQ.5gD?v' );
define( 'SECURE_AUTH_KEY',  '6Ii<,e+Kvm,O|+v?_DT9l!xIy2T8Ftxyfxim3oB{!hqRFq,6lVF& oive,3Zqu`!' );
define( 'LOGGED_IN_KEY',    '~jkDgo~f?<un=gJA cK<(Xvhk%}_{Pu92m%3n.eA9j/ZAw9vjpj`(mIYeHfkGZGU' );
define( 'NONCE_KEY',        '-|nK<G{K8P^?=H)kMWUZBFBRzoq:f}M^34)QBh$NU@K.R7v/JfklNe7kDmo[w{yJ' );
define( 'AUTH_SALT',        'H]z5 .r#f-HGjqfb5P8sQXLcWw @<#n21,Rg0|g;v}0%,%WB8SU;p:$?4?7 RW7H' );
define( 'SECURE_AUTH_SALT', 'bbeBLTa_9kOBoJX]N`J[+xr8a:g%]6qmt=Hxd{ce[,`@czgD KS%OVB@&&UnQlcm' );
define( 'LOGGED_IN_SALT',   ' DJ6py3D.+T+}>O%m]<+(;_0ec1H8T!p0B*HM!yT1SNzi0}5)^rX@h+OR4Vv!0X:' );
define( 'NONCE_SALT',       ']6:}[[mM)1.+(DdShnK)#p/m9AobNOvGU<A**%QMpXbQ1,:{0]? 3dgSf??*%?&Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
