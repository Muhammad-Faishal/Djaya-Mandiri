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
define( 'AUTH_KEY',         '|Aq-(13kgsM5!wkevYmp7?pLawL|*#lnUm)[rJId?FVRGw;$ %f*?LNggjU6!i?l' );
define( 'SECURE_AUTH_KEY',  'QVmato:~7-Qo{t%`5&$t-A5b!],nBe.o4h.fX$M[-#ujeq%anKrdz(THp&msMhpj' );
define( 'LOGGED_IN_KEY',    'R7{FF}D8|TuJ%i@!uD3Q$ZdmoPb_gvI<(>_tVgP`xTAM?7|wh|J~h4]oJOJ@Y>_1' );
define( 'NONCE_KEY',        '})s=K1SwO}if+RDMalKqjI:S5I[ s*&I$C|iGMg(Q}hC~qQ@EL4-(66C+`gGs:*b' );
define( 'AUTH_SALT',        '2rE9:RcW6U}byk.(HfEyb4r_u6H+}&0(gCssS<VJ`f2i6dEZoTgPxci6/f701H^n' );
define( 'SECURE_AUTH_SALT', 'r7%O(%;a=G[*z*`cS2N&0?14-HT9T+>%u4Yz fWTExCF >rAM0[l4?(WG(!s73^E' );
define( 'LOGGED_IN_SALT',   '%]Qs1^8v D2)0D8i)p6ODprn**&}w]Kz/qmBk$@Jt sS]gE+3DA:Q//Bs0K2!vhf' );
define( 'NONCE_SALT',       'bz$-uDtT1#Pw*@]KUQku0:d&5p|)9XtU^gdr8Rg_IXz#H5f_-QI=>Y({kN0QjNe0' );

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
