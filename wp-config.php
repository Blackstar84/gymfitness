<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lT$+)7m4=?qrjr4&K5p[d/(JA|^|WkQMCLI[2dWx+/hd8I?unwBAMliW4~;MWBwm' );
define( 'SECURE_AUTH_KEY',  '-i;?Bh-geP$u];Kxe8/ZjzpBYgZ8|>1Qc^&]oC!kh-VUH} iF(]bB2G&5d=QV]]~' );
define( 'LOGGED_IN_KEY',    '3O/gw!;kGCEDpS,Zc1=A#)X$|2SXZD3LU}piIZTvUC5l<Q(~d3()plaNXcR<rr>G' );
define( 'NONCE_KEY',        '9N_wDz@9TU]B]e<U@kKU3z;yP4iOC}~!e(kfQL@xsVIt:kwB~TIj*;=W#`XtekNp' );
define( 'AUTH_SALT',        'k m w~`2:y{X9jZwrB_4sGX||0k`@$k<Jun?jApCiV->U1th9r2=1p/.R)S6Awx8' );
define( 'SECURE_AUTH_SALT', 'b_2JZ$MQ/A3EoT/A`A^h8CL^LSq9lz)1dnYG@ DT$;B8dP6@#N@qxm+{x12s8Ni7' );
define( 'LOGGED_IN_SALT',   '&Ch]Bz>t(+Z3,|~[v#t&o4tQ0hbdg=@EL Emr7c|yj;dGiY0/ cm>Xn;G0wwE-^]' );
define( 'NONCE_SALT',       '[u4B%pdJLG6-rL2ggsUoJPwlSi*R/!svJtj[[UuhrG_8ne@x{^r935M}$v;&i!>Y' );

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
