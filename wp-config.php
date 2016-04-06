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
define('DB_NAME', 'onboard');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '16cj1CKNkj2r1');

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
define('AUTH_KEY',         '~_le-D4cCUpX*[NAPrD*)(Xl&X.NKemiyqXSRFjWYszJt%}/T.@C?!q/L$w~VeG3');
define('SECURE_AUTH_KEY',  '+&Xaezh`.j39-1+w>Q/,u<{+qNxA3FqTeqYQleNK&Hq`>QsYT9q`G$/gOr%F0+Bp');
define('LOGGED_IN_KEY',    'ZlCL-}$Sp{$Vy~wB#dI+-%1tDsU0]a{7uQnCn)g-E`-< ^*h*^ii,pNzqdsUNL/!');
define('NONCE_KEY',        ';-])ew oxpYP+(]&<riy%6yU@2NBj.MNPdCY!cC,P&*Rm?(=!T?gMg|>D`!Dyomh');
define('AUTH_SALT',        'VP9 /W,Z:xYf%Am_`jN?y:C_!l@;%-qtM^g*>2}1L|?U!PG(XME>`GxS}`|$h7Sl');
define('SECURE_AUTH_SALT', '|DE~C9?#H*k+UQ=i(]e9:NCrcIZ/pu8gbXwR%Z`FveAl &d2gKS]/MVK{d!&)&Z~');
define('LOGGED_IN_SALT',   '9vBY|?F;oRl3 IdrmMG?:!+RTzEDXd) kv~OZ;2-EbfJqnt*RkK&?5,)c1=}eun#');
define('NONCE_SALT',       'TnAjju9[wfb-U[?<$-eCN:Jps+nl#=J`(M_k3zRI}FQRE?Yy[KG&;&+2KMo{+Po#');

/**#@-*/

define( 'WP_MEMORY_LIMIT', '256M' );

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


