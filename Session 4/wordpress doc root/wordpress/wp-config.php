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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         'TI>|tuq@JW4uO$Ec7cgyVdio@LdAptyX4#%RjUHj$UP{Q!0W+1#_Ytr$U|)Ud]Z#');
define('SECURE_AUTH_KEY',  '>`Tkj(orweGpk9jX3T9V-8T0UEwh]DFa2WR$uKTp^!:,3u;qTNOd%e}t{FTufBB+');
define('LOGGED_IN_KEY',    't0Hb~=|yvBIgzK`lH}Pg@#M5+tX^4F,E|D6=JHTq.Qi[_$O{r|=<Cy6onU`}?1xv');
define('NONCE_KEY',        'TP{=q_M!q)?>Ld( %fn#C>:]i8Kr[O~Pw{Z&*pCWR9Wtj:GGKaWuG(-!~N< SfIG');
define('AUTH_SALT',        '$.iE+&mcomAljd_ZOYGcbkp&G#/_!X9sH]6x?8r(BT*Vw}S=my+_c.XW^[n]I~8)');
define('SECURE_AUTH_SALT', ']BR8h=xCYcd_v#M8pg|q7a7Ie{g#K%<b6Dw;ip4ZZ2ot{`jef%!*oWNk3/uS5bWs');
define('LOGGED_IN_SALT',   '3y]E,l<rbD:DW6^?PY#9#d(>C40Ft0ph7@R}yBTUvLu)X#jVT:|PEULKBfA6eW{l');
define('NONCE_SALT',       'FwhY~RRn.HM743:W*=P(4CV:CD.G(`ZDGm]_z%wUi;($0bG41L2b;+V&T-1?aY6r');

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
