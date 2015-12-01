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
define('DB_NAME', 'limmudto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'akoT0TGbV_(M#16Z1-DH+V8VqEbir5z_g+`B~k-`|[PhK#bu=MAqhU[Z|B_uKIfx');
define('SECURE_AUTH_KEY',  'fx[r6*J/_:e4;rA,ZBJ|X0!Um{7/ss9+BCorTyz3XO33mJm%YGwbce|BP.,zl.!|');
define('LOGGED_IN_KEY',    'y8J#G?sd}d$3Y_Rse>/.BOp/Rii/Eo Qyh}Kx+zct#g0IVgevgHy8U^3GL4Zc4!B');
define('NONCE_KEY',        '+MAf^a/|gpc}5S^W4){h;gT=q|h]{<dP}DZ[_Rc#@q6,*!b%=<i?.+.hXHr%WCT2');
define('AUTH_SALT',        '3Y}/|hc^)?#48S}2>Y.Y%?+fmN=;abuMA=;2@>#ZjA+`]k~U%!-+yV;p*CLOxDfg');
define('SECURE_AUTH_SALT', '|}yQystgOK vni 7m/.wvQAP!SLFtJ^55v&1oqDI={q^7iI2xYp-;v|5|wV+{=CZ');
define('LOGGED_IN_SALT',   '&u%Fm@XsJfv)E5#-eRsGN$:BS[?-|V@u35y8eUmzz`|71MN1A-#Z,@zW@A}tyk%e');
define('NONCE_SALT',       'C-.8k[T $3Q1?o}E;2rSfbMGvSh(u+3Z?}#K)C-l]H0`C,PI5xh%/K<JJYnP>f0b');

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
Meetup