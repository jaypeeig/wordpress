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
define('AUTH_KEY',         ':9:XRtm+Ga,pU](qQA]N!3(.=PXu^J]aS(v|H,q9sc1p=7?*}dQ=2@D|LXA?7EL}');
define('SECURE_AUTH_KEY',  'dki$.VA{a)n,7+oZ)dhn4xB$N][o[q>n:M%Wxm9vTv&`2)ZeA+9x&qWRBu%!P/R!');
define('LOGGED_IN_KEY',    '5vF*poFG}M*P{YU9O7Kc#t)M 0Vc zi!D{.)LM+XF+2ul3GI}%?b>=NWwVpJm[P6');
define('NONCE_KEY',        '_1Q}PxQT|$&o_<aw_E}H$3Z;DE;7X|y/$ZE(<*]+>))2 ?_2Ys9bk(5(9K<.G~6E');
define('AUTH_SALT',        ')Kb;R-+s*<@.PIy/vFtR F}P4,NUvn(Zid~?TJH^`d2;b#yH~E=qz8 |+Z%fU9.7');
define('SECURE_AUTH_SALT', 'P[FUJqtjr/|@jCydDL<kmzxsE% 8!p$m{15AzzW<tZ$J(K=1_{PO3t#;}t_cj#Hj');
define('LOGGED_IN_SALT',   'E5.]qkYNE><Ly-Xlx39$pAXt1sYonrmAb`I]5u]JYxj&B%hH8+REE*;T~`YzcHaS');
define('NONCE_SALT',       'l6.0pUz}2ZE0<+{A7[PQOLua[|m?L4l+]k;/!;p0uEf~a>:ep2@1w6G`Is*XfYxw');

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
