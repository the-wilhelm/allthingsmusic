<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'allthingsmusic_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z_M.AX<7TGJ]_,].q;=p5, Z,y5-+`vbv7RFDKtfqh9}X]{#%Coj}dzZT>r(po,y');
define('SECURE_AUTH_KEY',  'LTpG6O[A&`q8$H[uU[U!fQButk-YI,CR+`BLq:0+pW:55F~]t^s20U?]sx|Y~n>P');
define('LOGGED_IN_KEY',    '&T#C};/!R!qo%VRW#{]|;_}m!}PsLUc1FkhQHS)%61BLF<$O+)F5<J<fb 6#O%,l');
define('NONCE_KEY',        'vZ6aEHP{h|p-s#o@W:CM0q,.]2|LxM)}g7tr>~A!ry!v1X/>S{| +hV-nLiHLkMA');
define('AUTH_SALT',        'A>8K]ef8svTjKr Mp*$!n`icQi9CBK!x)Vf}j[JO|l5h#hg=+Wmr}jF~cO&Q2NF7');
define('SECURE_AUTH_SALT', '.7xD)D7QEh?T^$O[yE`;B}t#TlTQLS<$7du$k({.<x=>$ztPxS6!k @c;oNVn>!Z');
define('LOGGED_IN_SALT',   'y P9gv9|LW,bX<uLu@jnwVwl D*-/I{OOv.x,t#D(?Zx0dKaz}`aq7,FLnw(c7^b');
define('NONCE_SALT',       'O*8GaWlu-UPNy1y4yH$mQu2`-$_#M#$}6#7ml8R~INATiUF7c[zrQ]L^vUyt+GN/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
