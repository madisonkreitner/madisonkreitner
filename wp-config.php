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
define( 'DB_NAME', 'madisonkreitner' );

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
define( 'AUTH_KEY',         'h[O$-d3S-pa1,SKQ>Gb;b*D4bKnk<w(hllIgJa@6`&+vk$jVq)r q{K[>k_^fqcC' );
define( 'SECURE_AUTH_KEY',  '`6A_HOhkPENL3HC;V#lv<P#j`=E;nM>+89HRa$%6E4^7_+juE{<F]6og:sR{+HB,' );
define( 'LOGGED_IN_KEY',    'r7_ij7B_u`i}CX@q>/bceE_0:PbJeu8=NE:#p:1s>DFB`a|}S2wW)s+Wq}kK4S@R' );
define( 'NONCE_KEY',        ')f.(fl0UjU}|z_+m$q0RAzs)G#@O@)mwx:Zwg!*I2A!#.- ;-@:_]SgIoZ|O^mL-' );
define( 'AUTH_SALT',        'u@X]*4tnr%akk6tiQR%aM,/Joxfd?@MP/KFHQsjE-d:7 .oBUEa3>K|h%iz+NY6<' );
define( 'SECURE_AUTH_SALT', 'fCm9N>`cue$|BlO~`hY4qsB#`3D(M6?gD3M]Y0Hzj4M]t:-5`L-XJ&6Q V;&Ih#H' );
define( 'LOGGED_IN_SALT',   'jo3Rf,yGig-sap>j3/E>&)&dBo.y9D+;K,s[mXvyF}KJy#K,l7{fn%|j!eO;4:g>' );
define( 'NONCE_SALT',       'HxlNyRLu!L.[#2K/-P@yyKF!jY0<O7mFDWw&~H+Xgx7X%~Ky0hHgByfc L{4vB5H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mk_';

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
