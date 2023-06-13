<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u955874721_mqkGe' );

/** Database username */
define( 'DB_USER', 'u955874721_ARHBH' );

/** Database password */
define( 'DB_PASSWORD', 'W888ibom5l' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'wt4Js&k_shUy[r9$cX$YhD|y>?)6X83j~@!BHqB!LXME&#o#IoE_S?(g[J|**g=y' );
define( 'SECURE_AUTH_KEY',   'B~FNEcEUv7K`l~ou*n:!!~gmxnI@w03 gtTV.bX*m(z8*q-,oJt;UgxH#c U~4{!' );
define( 'LOGGED_IN_KEY',     'Y<i*ajBsTcTh_G@hE; c7}w<]HYZ,)/~T:ygm{uJcl<<i5huCPmI}r&>+j]l}T~?' );
define( 'NONCE_KEY',         'FO@z ZOM*}#hKzfZAD*R.dP]l075`Unc7VTu#2LV_,if@l5Jt!v~mDa`ul?=iA7?' );
define( 'AUTH_SALT',         'dPVxo.XI!kkccVQwE<aDT<zdYP<b:%:2| H%R}+/X?j;U8~.*+^q3 1F98~IZIkT' );
define( 'SECURE_AUTH_SALT',  'Tqwmavi{30QzjUz%w|LT:)]pb+Lk5yVAMj1{S/{.Ah!t4]% P_B{3+C,e;0u?57V' );
define( 'LOGGED_IN_SALT',    '0uQli%!$d@IENPs|}4m3b4U@A-s*:moIF`K*H[&,3?$ly&dh6BEDmd%F/Jc/BY++' );
define( 'NONCE_SALT',        'T1fLBUNF_g``yQpO2z^2jj`hYOmupSa]n ,g#4h!KR*uB7@-.=$$w5Vl/QhT3d$k' );
define( 'WP_CACHE_KEY_SALT', ')e647MH,aT8L/+5&$%0#]uy;H;g#JK|]3LQi$zo:@-nSz,O%jRup~(>?im[e{E^?' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
