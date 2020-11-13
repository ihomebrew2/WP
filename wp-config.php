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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         '$WIrYX!CmUDWv81L9d:V_Cw7kT)ZqrFf~%ZA|7s0},:B,4suJXZ)G+$f5L6]Xj8R' );
define( 'SECURE_AUTH_KEY',  'r?MnjTZ@P|}!ET.N?hl|=XRL{:]4;0<QwZ~w7^&n[esnnBYjhIhJgX2fZ+ujqicD' );
define( 'LOGGED_IN_KEY',    'M3[y~JS-!>lA)L}KKq6jd)pqMKya 5d`(I@vnPI[yd^|V,3Zkkf>y2$55CF/)ev^' );
define( 'NONCE_KEY',        '_<U:L;b:wv9t>X{El8RF,Q4#30G}EXQh@ c~n]PFtgaF@P4Si&MumiKRo#Q*&]6f' );
define( 'AUTH_SALT',        'KP<QeKkS)#@>d2v[{Pbgk@GmYxlyI}Bs}k!G:Y?RA!#&?^:JOXpd@[qVNT+>0F6v' );
define( 'SECURE_AUTH_SALT', '4*k+wK$+IJFQr/DJl;(^G@xGO(Hr,v@E)zB,:$ON,LVis*4O^,J#uZ]:@k]fL?9I' );
define( 'LOGGED_IN_SALT',   '.7oMp4NFM{-18cLN,( V.$bw[2Ium+5[e<5V~WiSO8n^)0QTgW<5LoF4i+Ke24{b' );
define( 'NONCE_SALT',       'GO7<p~+nSH@z,wI);JM@]cz2*i#wHdROpg;+YPkD;Oqgj6~iD)hp277;jE4#q&3=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
