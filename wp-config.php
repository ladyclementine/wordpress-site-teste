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
define('DB_NAME', 'wpteste');

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
define('AUTH_KEY',         'N%5(Xr^FX`0^p5pp`;Hu6%=|cL#pdb#?b_gC-b|V7^I~5z%yeLBY{H1*|h8l$szI');
define('SECURE_AUTH_KEY',  'UY1;8g9smbzh*Z%GVf+f?)C!^4EMk3f^G%rg!&/XV6UO~rKrMTdf;7*V]DavTP!Y');
define('LOGGED_IN_KEY',    'm;o+U4M]W.P=lY5k+cE{gjO%YO(N~Iyl8b/|;b;pa+0ODYyZ}t).;hik#ms*;Qjq');
define('NONCE_KEY',        'Mh[dM4K^8ee86&d+N*mrT3yVYf_4WpRT&9hIo?aSu#u3Ist^a>f,>nyE9*?jvXak');
define('AUTH_SALT',        'mRb86`Y3$vr7kAUnGDazNw2]bdTcI9oG#pS5#Xoz99na#7sSnR2J+5P!`h$>!u8^');
define('SECURE_AUTH_SALT', '?X{F+Y]5}X%v<,Y5U2p;s+!i6W*Y[vx]xF*|U2}BvAnv30wJ!Sj^GfHLF6P8Q9l_');
define('LOGGED_IN_SALT',   'e-6>:(+S7des$XJxbHo;,cCcAHC>TL^&NvTsL41Z&}-^DygH^~k.y[>Rnyaz=!sS');
define('NONCE_SALT',       'Kq,rJLUWh@ |zwPQMZ&f#f$r<uY[0QS7*{|#o!PcFhuyKtb% DhZS0-ayLkG}2#=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpteste_';

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
