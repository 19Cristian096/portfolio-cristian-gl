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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '3_K=FnFfW(NG,48Sv^U)wU+Ce&hg:F[he*IiLXBD#cs#JTX<J/U; ]<5:l]i{gP`' );
define( 'SECURE_AUTH_KEY',  'k;quSi%CRqCx|$q5Z$2y3[X!)V(c=?g8)=G:5S9)zp+G#*uBJONI2non9%!x- YZ' );
define( 'LOGGED_IN_KEY',    'cCU@5sh&K$$R2qH6.PkmA~gKQiFJG8JQNNq~<?^a,jG`cR-eovy?Y;pPfJ!1)k u' );
define( 'NONCE_KEY',        '6b12-6s[NRjbhB)=fT 4wK[OkZ^/2LvVG20=H`q&9i!8i{L*TL?Vg>7E<FX( OXT' );
define( 'AUTH_SALT',        '9_P]F0 PMrrUN5i4L#6LC;aQE]$Lwx[/sKbn`z1t`YSUP#S_v(8spcX=vFVNz.ej' );
define( 'SECURE_AUTH_SALT', '%2k,InS$tm1J|zbE!!y%]g(3hi[y{,#HCjmu^5E[<.6f/egbVng:;d%K#*DZvD=G' );
define( 'LOGGED_IN_SALT',   'b4ucnAbXI,(v>@9-uS>5R]J>g2)YC02(r3+u@t*umiGXA!2;_Od;0YZ9nne>?ux?' );
define( 'NONCE_SALT',       'NLQ7{qQ.{oQLLg};|HDeK4+yQ_fv/K8oj5ZN&LS>rIrX7%l,lKxl0=]`xbNx?/Ge' );

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
