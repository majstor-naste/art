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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'qB/,lL#BCi|g`pzHa8pR%_9IPX(hcaJh0NuC7K13Q|bH_(}.nylPS54KB/gQ1rMw' );
define( 'SECURE_AUTH_KEY',  'c%ctbTpD|:$hRY75?WWFpY_PrBRl[y`o6k:SLRw,xm(UYy5%>|Ni&Qi_7<M.+RM2' );
define( 'LOGGED_IN_KEY',    'A7pJd[,`Xb6b7r[|6]&1f;ooQf};fkviL!DY%^6D7nBtM ($::c,X/Do7{]Q&vW.' );
define( 'NONCE_KEY',        '(|UrX0mv.aV;;=.%+sZi{+myZt#6;C@$(sXX:y=vdr]a+IcsK!+#%BD$HnA06EKw' );
define( 'AUTH_SALT',        '}0jD=fzr]SOsA> 4sWcki4_&V#kEd_VPB%nftPxf!Dj1Y`IlUh!fAodSl?AEBYqO' );
define( 'SECURE_AUTH_SALT', '(JjD1^i>bS%fDDzV2~:%9>H/~57WcBGhtLCP}R!:PxxdDf#6dHwK$om`-,Cbcbu{' );
define( 'LOGGED_IN_SALT',   'zKVw@ZxLWsz9C/wCl[fu5i0Ja*qamKI;kwLgIp+>&ohH&QSPd(8%[ n[um}x>$]H' );
define( 'NONCE_SALT',       'D^AYzHj.W*[VNE?;d#1|?Gl+x]i0gD]6z[Y8c]P6ICLw;R^<>xOjhW6e@*|orGlE' );

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
