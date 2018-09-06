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
define('DB_NAME', 'inheresite');

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
define('AUTH_KEY',         'KXd5LOVJLw]]9>_(,+U?$|MJ?h(GpU>)Q6.,n)>4t&`i>mmD1#LUuSbtFWG5$0@U');
define('SECURE_AUTH_KEY',  'iPdF7ZZUtVI$h*1GX$Ln&V>Uy2 <fc`5M0C:JF:UmE6XCKB .&%9qK(wG`+gu&M$');
define('LOGGED_IN_KEY',    't5hVHX.FS`7+$6K1{ya+YN0C%RN0|YwAG?5wQ%r5BAHL?gE&IG`s|&3<!^j;Ls.H');
define('NONCE_KEY',        '*1uhx02hC}W?kl18$$@)NrD>OH*b)l0LLU>;#8KjdJ`.ZE1,?ZAtw|z&?iaxfjlf');
define('AUTH_SALT',        '5k[GBpT0u(i&OfstI0hy&TVf[4YyUg54sJiUcA2`tYmmUp35InL@2F!bj*w+Q0wp');
define('SECURE_AUTH_SALT', '0_d,+Wgtf1uT/Dauy@*S$2rrfHo))9-_z!$,P@S+55?+/8+M4lQJFO_[r*N@Mq0z');
define('LOGGED_IN_SALT',   'qOH:@O<d_^?PbC-kIb%IPBX4QM(5Fa M1&keI&fRX7o dU#S2)j@}sQrs`^J)om1');
define('NONCE_SALT',       'wh}:?j9`x>/S4<l(|( 07saLllo(8a1m_dvFBCf:V8S4Ck7R<$z]#@ l@,,h-Rj1');

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
