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
define('DB_PASSWORD', 'Alonso93');

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
define('AUTH_KEY',         'bjFX{HPfG0n!Pb,6}N$H>VONT9BVR{5nH94):-)fE,bVt_P+KSl;O>K|-^zwpoiE');
define('SECURE_AUTH_KEY',  '(9_f_[Fj:9W#|%6SMCpWTET)Oa[4-@W^BX>1z6::jc_/~DVsb-7nRl|29$w1l~8y');
define('LOGGED_IN_KEY',    '&}r<B+vx5LVl%^*B,Tg$Q|otCq]JTo.[%jg(-$Fg.+ 2n0p=>-wTOOA0J=3Qb#WK');
define('NONCE_KEY',        'r;2nS?D*+,L]VKZ $Yh^! v][;[RE4htd;4RNHBZJe`GNS>EK(YYR@XU^J=SJ_x#');
define('AUTH_SALT',        'JmE6OB[xpPz!hUcd{E.PcSbr+7%B[JhG)Z@1!9D6& o .6o&i0Q%evh$l D{8.1q');
define('SECURE_AUTH_SALT', '[O+nvX[BZ0f?XguKt]b}a&#b[@s7k8L`;`hPYtDd!|m0jbEa<QE)FamQcx%fcgc{');
define('LOGGED_IN_SALT',   'SM_!!zl `Atp7()qBjvc;=O-9tC!{H]k?e-7D|!9e>{:w%V5n]h-i.P|H=HGxjcD');
define('NONCE_SALT',       '*uk8g/XgO%Pa0L^`p8ixIZ.O])cLVqYQWK;0#dL6Oqq+W=L[d_q&bK5Qmc6gDqg:');

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

define('FS_METHOD','direct');
