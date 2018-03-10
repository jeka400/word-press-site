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
define('DB_NAME', 'novi');

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
define('AUTH_KEY',         '6,|x]-=LzDc9NF$ai}A~$>S=n:`un5_t^FZBV9009Eylv2%!lqAZloE%@HuPH;:w');
define('SECURE_AUTH_KEY',  'u`kFH6b+`@@/-*>YX-|&9Y#<Y M{VY&Y;rcf0Dv86tsN#]h3HFM`9XQqL>#dVW7%');
define('LOGGED_IN_KEY',    'fYz*#WI`yR3/ldfkvvYgeYFPhQwo?S2tCjoR4hOj23n$,e#@L~rQSXb|cFs L^]c');
define('NONCE_KEY',        'JlWpE0I>X&/$k=H5Mu>]^;K#QGA;MD^=8H,0=36>1daSWTJk~4HP013@F),w.=c.');
define('AUTH_SALT',        'U.5 %T/D@ji$`)|h1+lW_n-1{)n%Yw99tY5kI5&2{5FQ^hIc^]+@6,wB8^=`1WKa');
define('SECURE_AUTH_SALT', 'y>m[GAcZAMkH`f18)u3)Z#OJ>MO{cq[X.y`3~8}2.PVlVM|b[)6 9@2]G>u:p51]');
define('LOGGED_IN_SALT',   'TE~GQC*_@cwL}GCiFxWv/q0/Jw%2!%=OX<d+-: QP+y`YTTyJKjKtLY<KJ{o4JV^');
define('NONCE_SALT',       '6SU.O.D^s8 j^EyzyP2du;`n1^dsqERmP7|DYx8lh&~F5MeZWfa38S.aDXg`Isj{');

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
