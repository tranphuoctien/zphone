<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_zphone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-RR*r2UWf&H$S7Dc.JZ<?dEQhc;lI4`Jrf#7i&|+:w?`tN]PAS!-EQM3uHbT|8h&');
define('SECURE_AUTH_KEY',  'H=Sg:N07*|VPAKvCE6st|O1!p!f_m?r+k=Wu ?lL Sgw}Bh)w!f,6IUl-6EY+Z~`');
define('LOGGED_IN_KEY',    'y+A{d$5M)G|duLmChRXQd`|>);gm*4l`Db,4nn=voKg-Ag~3>(my:Lpu:K0J5T.[');
define('NONCE_KEY',        '=Dk)=H@4m0^DN$uo-FUptT57KR(_N--t~,-Df<yDB:Ce?I4G3inGZthd&?X:Y(h4');
define('AUTH_SALT',        'a}|S+)h/1/<[1Gp0e-2G[}B/>;Ywsi5UZJ^s7o<5!<_laBnyc+GC-AAp8G:n2@=7');
define('SECURE_AUTH_SALT', ',`v6JSo-mGQFn=yTL=!M1L37Cg?J5_.g{+Cq:*8Az9byRi+S(reL|[dGx<`]~#yC');
define('LOGGED_IN_SALT',   'Xu8eb5Q]aRe(/CD)8J}!1,]dmM?h:f#b-Elmz@|=53`!+2$DMQ`&:P]ed7*Ncb|1');
define('NONCE_SALT',       ')_ O1:{L})Zs^WI,7lp924hyI?w^4)c_y)2Zyw8Z@Q3L=NU)rHas|0gs-Ct+R7uq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
