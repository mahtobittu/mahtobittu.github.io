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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inspnet' );



/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '}oS_fT!rFv|!=6fO=VvrkXS.R$YH} J4=[ZV%UYa[xVPvm7eLMTxoe`%0.x6r6gz' );
define( 'SECURE_AUTH_KEY',  '{#NqHhFdU:Fqy ,Z/I|Kvf_6GdiN^BKs4^Zm UP>i(@Tf1k!2hUYDI $*jx8@8qK' );
define( 'LOGGED_IN_KEY',    '4f0gg}Q(3R)fO0$F>mM_(Mi5c0%>*GFh[6?Z}228l3TKr>]1>>Axi.%Q]b5*)`Z]' );
define( 'NONCE_KEY',        'GGI2If;!tWErY]m>-pM~JYKK#;Hft$T>NY7Xo`qv8<bQQ4<sR9q<XFa#(S{UOhtu' );
define( 'AUTH_SALT',        '0$.+AY#/so#v]hkrUk}8UO|-$dA],~?yvd~5KIl}4?9US~(Cd;jD]1B+amze4g}4' );
define( 'SECURE_AUTH_SALT', ')F4757>o/g?%d=kVu@_$tW3{C+*AnjtgQ4st,doEw^:}!eNn!A8J@ClKEi)w98N|' );
define( 'LOGGED_IN_SALT',   'f].YtAv^0[,?i  O4QV$&H2c8!|u KKs.nNP5,GPO{H>~l%#3KEJ_(oU( HcqX3~' );
define( 'NONCE_SALT',       '(9cKm*Y[+/m4Xy?CSd;5tg1On.r5ks;(PD}D.okD[_ZddK?aP|K9*_Jw19980&Ya' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );