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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';5$wJ&hgi#>{tZI/:clLHSY9j*eS;$.^Sgh?Azjn:Qv/:|mCY!_zzZ6cgV<jf&Qb');
define('SECURE_AUTH_KEY',  '[?Z{-p{#|KH>ec&@o2c(fTvA<]yi>Y.<H!^Pul>tYk#%_~n|^+hP$i}e+lrEAtlL');
define('LOGGED_IN_KEY',    'FxE}/!xsR,#G$OM4g@ 2SPq<:IBpi:w,UEs)EbrMUm[Ud@z)mOI{f9AX{<~jPuGq');
define('NONCE_KEY',        'MP0Hr]J1^y$/?W>v?YHngh?@z^#9`8XSExMb:II9E$` @b_aml_&kvG>ydjz{`|t');
define('AUTH_SALT',        'PGi4?L6n9iC-Yb.Z?II9QeN18Z}ByYD^1=#0B$:6+Fo>$.^K%RIf*?]Ezg$o5dW_');
define('SECURE_AUTH_SALT', 'QNA6FxrN<2!?}#Q)mHpUYBEGPB(ox$w8wEn[Pvv*+mqm[5an-fS5B9@!!`-[Cu-k');
define('LOGGED_IN_SALT',   '0L#$56L+W&5j]j/ZzEUlg3t4G^N1O3]jz#B+%YYj]Z^B|%v2frNXKZ2c4m6jvDb-');
define('NONCE_SALT',       '8,IRpr@p5GpO!=l!^caQS)LP)h37X?(nq+8]Uwn@yH*?Pvaw`Mo)ddB&4]ibc(A_');

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
