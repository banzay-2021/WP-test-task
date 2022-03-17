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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstest' );

/** Database username */
define( 'DB_USER', 'wordpresstestuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'iGfo%L*1[WDj]]H5|`6CJ--*7tKfygTsx]~/*`1(oz+)+&d@?URs4cY-#+>Vp_d/');
define('SECURE_AUTH_KEY',  ';=@(3$Hb0}LUYI_KOHb90=yR*tAsl{kC##I)TLukK[Butp61@ZQ>y2&+Xl[[UCQ0');
define('LOGGED_IN_KEY',    '>VGIPzmmVi!,RAL{U^kbeRQCh}8!RHviDQbl6iJ-`=%Cl^qq,#ptXE,.3%DcF>]J');
define('NONCE_KEY',        '52W0QRTV] si$5x%Q[P[~}/m. [~ ,d `or93[_,Ay,R7D^>}Uck|2$go+HDg~~%');
define('AUTH_SALT',        'Elo<ON)HuE*oEP5H=$r&28^L.}J&-Ygk+#,xd(CA:%{6eFNo!,82FeMk+8$k>5*B');
define('SECURE_AUTH_SALT', 'Yz1K%/7,95vy`~H3b%{Nw gvJKe&Vr]I*BVAnj|&OJ?GER8PmQI1U.=/Y,a4dR{6');
define('LOGGED_IN_SALT',   '+Qn<EaE~|(F$`#/?[l#r<9M+y<%bZ/!||Z=eq+)w6Q7tX{jICS(4mDVR41C$@sns');
define('NONCE_SALT',       'P`;uXEWo+4=E[XewEHM~}3-inIX7/#L-IKxL]t.H!35~Jy,pZT e%(1IDCAZ5D}U');

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');