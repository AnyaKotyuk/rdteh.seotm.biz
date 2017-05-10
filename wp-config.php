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
define('DB_NAME', 'rdteh');

/** MySQL database username */
define('DB_USER', 'rdteh');

/** MySQL database password */
define('DB_PASSWORD', 'rdteh2017');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}4r$3z}kXYWu_C0qqBPr%+;H/tf@y{rJIREK*O.dM!H,0yYYK*Gf});&D=*1=/1C');
define('SECURE_AUTH_KEY',  't^?*qw iu /_61UfL<FofWbK7[Fbxokx,* <u8qdRyzk}qe6M>mHC<U?Y,(](YVB');
define('LOGGED_IN_KEY',    '}h1 B34{cg-FLI_>shScZIl@)<I7Up5&P adP!Tm!GE`SUO;@mq2)4I.P*#IYmU.');
define('NONCE_KEY',        'A/ND3Y`cE!-{_Ne Adz0i_h,%9^<7*^ybx7XO@P?*1xUZYJ>PGwH[}B~k,Q=DYfh');
define('AUTH_SALT',        'd,5bB$1zrjU](!M4@4f!=_&:<8^MBIjNQ${X%Fb>-<9;dq~XH09&/8-B5fHSn}i-');
define('SECURE_AUTH_SALT', 'GoswO=K!RG:/As.Tji5u=R9^l}XLlUB=i|P<a69I-MX8!T$<.VxEi5AtGG{24|7(');
define('LOGGED_IN_SALT',   'ZgWPX|lf~GiNx^uy3_TdUa-Z=pOf326T*rNDe3l|6$kS^{@LG+=G/]$;uc`Mq{4s');
define('NONCE_SALT',       '::(yG}g9)Jr~e@U&-gu4-RBB90]5P<]iB86_L%5:H~IjcR!:1XP.pMCdq`EE^bE4');

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
