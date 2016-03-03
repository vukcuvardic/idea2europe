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
define('DB_NAME', 'idea2europe');

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
define('AUTH_KEY',         'N[|S[y_G k^PjrCbEjt>NM[~VQAbbA]cpEy;f%D1MO-nv&:<D|dm}Dea|Jkv#Tk,');
define('SECURE_AUTH_KEY',  'XE7sliM !JpJ~ey+_e8o}ajLWG!iL.{7qvBb+_PDu#(TxVdv=F5k2_B|MVNfoxSo');
define('LOGGED_IN_KEY',    'BiSZ=N+Mu+@f6Qm{/_?b)~cfY2vR[d(g+^^18iYqA!5PTkaR(*MO_)x0*i)R3b;`');
define('NONCE_KEY',        'X.7y/`f:hW4*8C]qK|U-l b%+i.l+$w|j3G)t`$j3@rc,cb0+ENQ9cD9F=vD5.=t');
define('AUTH_SALT',        'L<}>/VtxR!_Mx_zQfLE`}H%@@Qo#Nb||3yI-Xv&>Q2fTIL@6jsf~l3hu8o)GP<+I');
define('SECURE_AUTH_SALT', '{$00vWo+!UL1-}:f$AJR vvp*&}gwJ4ruuLqhT:7,rxQmvU.I;//Ee^eXaJ#H6uS');
define('LOGGED_IN_SALT',   '.Di({;fQZ+Qhc25TJ/)3oH@)L<@aX=9<sbxmI5+t7w?itB@6Fd[`1h9R4$KHghkC');
define('NONCE_SALT',       '4l,GL/QdU<H<E]-aUj$jdE?-E-m@%M*-ah/G%HM0C ?bPK^mMvSyqf.?|S-%WK&8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ws_';

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
