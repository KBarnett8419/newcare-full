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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newcare-full');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8Bx/m8o~q~>X7viSI THSBPfMYB^,.]Su9Xf&]OBaEc<y.6% W W!o6}SGA>srG[');
define('SECURE_AUTH_KEY',  '6?Ra_L[;xf)R1raOl)SwKR{yhXUqOG`mwg; 9la4YOy~RHRvA:aPQ_<d&5s4sGpS');
define('LOGGED_IN_KEY',    'cK1Q`[>4`Adjq-.EfCf^4kK}rhe7i6t1utwr|$kK]V?L(6nW!V>W25#BiapI[d.d');
define('NONCE_KEY',        '-7O[ch4`f8AJjr[-?=:<_7r{A<=yOKD5v2xr&?t*3Ttcm,q_[:@rlz&|947VVmB1');
define('AUTH_SALT',        'x4]M@y,5r_9K<O9:}w1bJBl!,j$J} QkkcJrV:K_iIuYgB&zTiE? 34_2g*WNC.z');
define('SECURE_AUTH_SALT', ':X5HAAlvmO@d+JhB@_,C/k;3}lPgcA0WV7-G{Y4nXc9rN/|ieiy^7(@z$uw1Z8[9');
define('LOGGED_IN_SALT',   'D;pzF|DAQ|l^a}.WhQhUX{Hkdsl@?]*-*Spp}8ePKHt!2@y}]b5?@A-*sKuHQ8Yf');
define('NONCE_SALT',       '@LS5ik|>VC8<Ap`O5}I/N){/xX^U$l=.O.^qL=L,JDZ~+m*dh0 T2?w9qqBHp[rT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
