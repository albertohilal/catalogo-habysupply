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
define( 'DB_NAME', 'iunaorg_bares' );

/** Database username */
define( 'DB_USER', 'iunaorg_b3toh' );

/** Database password */
define( 'DB_PASSWORD', 'elgeneral2018' );

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
define( 'AUTH_KEY',         ']a.yr?9n3Mt%VT!(nFVp k_GWTK:o%JRV8 `rR9ADaYqPpPk*8sozk~FJ3}]5!|!' );
define( 'SECURE_AUTH_KEY',  '{;7/Q+J#xNtn7lT<uW?&dlS$d3m1yUbm>;1ezpHS qMRr|Q^4!PEVO?,w,%25y>m' );
define( 'LOGGED_IN_KEY',    '3k4X1;J-n!FxM^x)Qg)qA^_4uF@y_VKmPHT6.V@WzGR?u>hV],tr=gvb6kEFe$ii' );
define( 'NONCE_KEY',        '%Yd7`D)r-&D6)&S9+tSE9[qzsWuY~@_.:?7EXZyo^lw{<e!ZF`#R]{AT0b>N}o?_' );
define( 'AUTH_SALT',        'MDP#,AnV&oec,:HXofB0RH0&J<gUS|rQ+ _Q+%dl!]C?B`=%*}wp/=NjZ1/H~*qV' );
define( 'SECURE_AUTH_SALT', '`.xn}j9a]]DbA;J26.:J2Jeg8!_CYdn=AJd:}&q8,FT^..OUxs,&,px]<#%`>?D~' );
define( 'LOGGED_IN_SALT',   '->YKq[j{MYdja@8#/!um6,3<`DbUATrL A:~(I-rhmo_!=#3JXa7qHp)Y3Jjp&N6' );
define( 'NONCE_SALT',       '22<.p]10kJ`$6x8LFs%6$tf--L0x;$AA1`Q nPH[yf4Rq>,~Rh>C0c[lftYc@dvq' );

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
