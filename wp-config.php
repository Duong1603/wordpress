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
define( 'AUTH_KEY',         'HQL5c%oJk&bv6@~4rowp.s|(MOT:@)u_;Dhg?h!v`4vRGL.g-WO2`,@hf]^[`Dj(' );
define( 'SECURE_AUTH_KEY',  'VHmTWV`63g-RNrX/L$$d!dteG}#w+T0$T47l_GmdY&:h&Rg&-h)L&m)UyNl&#e{K' );
define( 'LOGGED_IN_KEY',    'VEFgK0qHd.sTlQ0[+(;SB9[,(/?.,HnOB3 CDg{@Tj4Vx[GH6yHP;w:;-WHqf1~_' );
define( 'NONCE_KEY',        '5Nt]5;^p aRP9!ro1]LH&Oam/0{3?)5<e.uTvnE]R}|;jt4HYcI7]+m58bbFIJ;j' );
define( 'AUTH_SALT',        'Y1jk]T:b!kagBCOG*_P3YL+BIH2Z-=Q/Jr$<;0Nh0S*Rh6Mf^%?@)UZ#t3!pKiQM' );
define( 'SECURE_AUTH_SALT', 'KvL?h|*slKc-qtroqJ#S=zQMuR+s-=zv|+L4v6]0<2=KO-gpAUjS&Jn*Dk*PF;p>' );
define( 'LOGGED_IN_SALT',   'mX<aE!beca&dbAHE1t%a@d@7^)hRu-5bO,?k~Kgj;G_@#@SuPmK+$xU13@|WDj>p' );
define( 'NONCE_SALT',       'i*Jv|qv,W6l:cEbVG/)6?TN5YB_)sIOL2HqyyWaT{j^,6&ZJo&6A#_(lZSvGb!-p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
