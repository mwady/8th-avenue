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
define('DB_NAME', '8thavenue');

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
define('AUTH_KEY',         'LKnf4pkv6_BNyfYG!&#fLkv[{TB1&l{h1j|epov@(CIk/^Yeo E YckR?bOb=sip');
define('SECURE_AUTH_KEY',  'qj34wcHtDkJcVVS=gRPYS([/f7+5ePL[g]=6S*9I2}GE]jV*sxp,K6gx&T*|]-J]');
define('LOGGED_IN_KEY',    'Gp:G:fdb;yVg!$gNtN>qO^,kMcr$,i9%Ci.p!7HdcjLU_FU;qeoX!@;Y!YDv.w_1');
define('NONCE_KEY',        '>NS-H;,tQOh(^]M(P_5%0`jYoS}Y,nkX9-CC4{%)jEt<b;x%|R+;QXEN_,5&f4_r');
define('AUTH_SALT',        '%ZDk8#f*<+yAO6faC22l}z4=d[; xn1H7ms]]R?b|M@GA]+kp:%IpK^c./EgCy<+');
define('SECURE_AUTH_SALT', 'KH!0Lc5M6X4[)h6{3:eq)aF}NGi[<mbIT3ROK^mOtoYp}X1hv}3I4,t^%`GI8B*`');
define('LOGGED_IN_SALT',   'L5CO {djV%~[4[CU1#`jxS:Pufk0?kyh*TKmva~`-I0f- I_XVlJL~]t4b1M41EQ');
define('NONCE_SALT',       'V_a7gMHRz;xy5jqeRP$#in,9W8=B/C*0W2]83#l}=>p^_7revyvCR>6,b}2/ox(%');

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
