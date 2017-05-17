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
define('AUTH_KEY',         'YlrHX65rSDnW*J]fV5/sOQzC8E^ $-;KZ`~&{VX3h.N1ZxY&S(`gA4Ga>SC@230U');
define('SECURE_AUTH_KEY',  'hv-|~(!gObzzJ+Hl_9<{%8.;cMiHp``!*4ga#vgA$he1SSmF+puc73?,yemgPU:-');
define('LOGGED_IN_KEY',    'H#~[%)=J/Dt]w<nn.~Ha#F3IY|1ZZ_8MBmi5f5R0#n.]ZUKQ~|:{wXiOnS;y08}9');
define('NONCE_KEY',        '_I}veH2XU{D|(SI)^*qWMo5PSON5rO}>!KfYs =J{UM%U/8{3Y;hK?UEu=#/<u>J');
define('AUTH_SALT',        'gbv,jWR&p(I~f 3q`iu;]2%:d6F.I0nJ-<J`^w369C]0[^MU5dWW/#dfFeylY9P<');
define('SECURE_AUTH_SALT', 'Sp?Z$2rMrFueERFUr%Z7=h_xCzQ%--.Sre>DDBW}GCL1T2$tv{L.f%BiU7/HYU=@');
define('LOGGED_IN_SALT',   '/ytS)| x-fpahBw]1x,R*Eq<O>Gt<uTi?!3h9Ua {Q8{:ghC#X0*zp1>YdfMD@P!');
define('NONCE_SALT',       '7 xbyfbYdkRPZqXrh]A~C/dV3ivtCd^F<G(hL.G]D4n3Ab>cM %?6cmP!#!w0/1-');

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
