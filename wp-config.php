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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress-1.cluster-ct3aqqij2ijm.ap-south-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'DoZ3?(3QJeet.BYMA^s-TYT<0S=LWD%ZtDyDuhTpy9gZ<Y%iJtOtkqTZ#I$bW.DB');
define('SECURE_AUTH_KEY',  '-z.FkREnN0{iwK<sFz$s.ivH|=+Tx{d3/Jb_k$h{mG|,=7u.q9/Ecg5K,*O8b&po');
define('LOGGED_IN_KEY',    'F4Yo7t0Lu8..QTWJ_/e.Va+-rleGoJ3_X~Bn5i[67k5-Q_`1ExBHNSg+Bp2B[:?q');
define('NONCE_KEY',        '?g>pT|GAbZ(gCa}yLk48Bk4&$(M+ $}rq5/+lf|ip;H6I3r=5>RvVhMh3O<Q+rKc');
define('AUTH_SALT',        'vVpAVhw??k5{O?uC%C>6n,~#9#t>tJ<<u%`&^ns;-Ybo(lDAg,8|dD&la5/))0O?');
define('SECURE_AUTH_SALT', '/;y1{j&gn[<6/Sn[-!Oww>AHC-(A^/2tB$A2bv9)u|s]9|wVfEr!4P4tWU96Oi(9');
define('LOGGED_IN_SALT',   '$@?FhCD-POz,,P)x@9F{,CY]b6(R5^qF6^Ip1/q$[b-,+:fy-gnVX$CQ`S.4+E+`');
define('NONCE_SALT',       'bw%w5a,D~_o;TsE&=+x/Icg+b;-994`0&uRbgR&+gUTfXN?Z!rI^WI(+P1<Gs=:^');

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

