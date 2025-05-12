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
define( 'DB_NAME', 'wordpress2db' );

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
define( 'AUTH_KEY',         '0]V2S ]}<M.YS_)SE% 6J%WxK1W.]ypj,`^XnU*/O5o.%eY2S(mPcHV3uN?B#grS' );
define( 'SECURE_AUTH_KEY',  'Vt/O[0_ENj?o*+I4H:WOx^tfq9K 37}D)UmpXNwqwNc4>7Dh%60KFwk;OIk;|)1f' );
define( 'LOGGED_IN_KEY',    ';E?tN*HMFgP0:DO./V-xn4i_~[_#`i1q^WA`1rmsbRQWp}CXUfbb1G,!.=M/ktw_' );
define( 'NONCE_KEY',        'f|{7UK<9Wo$0yeRhNPtPt=1/_@;b`w|MJ7)wwLtKIH9w:Ls:Rz6LB11wqN})fM%&' );
define( 'AUTH_SALT',        'TxPCzU_QBa{HLa%qBL[B,xn(1dkP]w6A#C :k]8(S%x|J((|7;<e@izqQS6pz1W5' );
define( 'SECURE_AUTH_SALT', 'HM4!vw`WklYu@F00]$DWg58|MV Tp[}3r8^HOtde87g>2l%Z8;Ux>,U~#@}01X07' );
define( 'LOGGED_IN_SALT',   ';0QCNm6p+EzgDM[qWswFNGLGr)Fw@MS=to^w=5SfehD k2atN+Tpr8&6LJWx+&BK' );
define( 'NONCE_SALT',       '2NnzZV/`[^5QRW}bCKDuD~=vAi2T>m8sN465 066d[}4.mbsyRc0!o%g$+-7_Qjx' );

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
