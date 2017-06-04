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
define('AUTH_KEY',         'I%MHyH%3njpy`t,FScf1tpy~=1_:jR+G,5D^s}bdo >g=BeX`:hh57qQ+1+*Ji*6');
define('SECURE_AUTH_KEY',  'IbxhKj]dG0edz9 V:E>YzP&w/9A9~b#s?>ZhS.,U4f$vLCeSAL5Bt!,FlxHjuhS9');
define('LOGGED_IN_KEY',    '4j|%>39LG&t):O!&>MF,#Yj5l o@(*z{kwE;RL6= wryYZE<4uK6PSi-&e1,w#/6');
define('NONCE_KEY',        '>=DTpyG(M/o-#2Is8DD!$j+LSbM=fmVyE5(H5.!!zC*[rjth.MI-gCTD|5#8/F,}');
define('AUTH_SALT',        'K^It1GAQah0)0!E=F.F:24,VP,GQWFs(NX?WH}~[d]n)M*v=dCx z]aL_$*7|1dr');
define('SECURE_AUTH_SALT', 'ciGoHAO*RT;X$!!ThfeGjoz/9?Q}.*e]]*mqx:r/CK&2?t<LXa9@&xDxUe4#yo!l');
define('LOGGED_IN_SALT',   'Do|w0n]!vu;fU[hm%OI)4I$P(!)<]fSh9.J*hD,QVvOKFGe:n|$[>?GB7Cbq.]>E');
define('NONCE_SALT',       '2J&.HI1s$n&p5Hv)Cc_CCdE#crVb,N{~e0 Hvu7xA3Cu&aLCHT L*>{/qgp=.cR9');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
