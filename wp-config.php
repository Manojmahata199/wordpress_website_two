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
define( 'DB_NAME', 'san_ent' );

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
define( 'AUTH_KEY',         'rtRwZ)Eqv3`8~2j(kX# *|7}}0I36%c&!S8L>S_ARS]*-E#C4Ag*}~fr`f/*J?r|' );
define( 'SECURE_AUTH_KEY',  'Td-b:uCm?7M>9jg^N]+B!z38~T.W@[(VczV/|zxEB0tT4iAgMA~byag_`z1la/AK' );
define( 'LOGGED_IN_KEY',    'IcR2),h=>9q=~om_>y63F{K(i?LHPxw2TzbkZk@]Ef$c-5Z<sKUFlD*&M&(P:m.]' );
define( 'NONCE_KEY',        '`[Gkr:=Igg|k*aS9-B~Z21?%4n&(Fpm])cisqDB*X%<@Q.?3q>_n{h_Bp5o7$-P~' );
define( 'AUTH_SALT',        'Lyiy[L+A,~0ap_D3;BAK*jY#T}N/>/-AHhDcvB$YKk>LKG>]2<h.R9U7bvjWu}Q$' );
define( 'SECURE_AUTH_SALT', '9SYYtf&*PKqAEykt@u*rs=&)Q3avAq){IxBKDSbJI[]>o7YfSwNpJ16^cv;n?%mE' );
define( 'LOGGED_IN_SALT',   'WCu%_%e&/%HKvrZFV7**:4B;&MDet;ZHk8`hG }/xd2WVa?{xFLhmOfq2[mBX?MY' );
define( 'NONCE_SALT',       'RviJwCbh?qx9mG|1pyW`%yzAG*,{-{w>tT3nHf1@-Z(BPbo6pR&%8QX{hHm[~=C9' );

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
