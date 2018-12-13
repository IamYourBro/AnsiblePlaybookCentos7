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
define('DB_NAME', '{{ db_name }}');
/** MySQL database username */
define('DB_USER', '{{ db_user }}');
/** MySQL database password */
define('DB_PASSWORD', '{{ db_password }}');
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
define('AUTH_KEY',         'lfGA5AWN:m-3*]$E15N1gbP&Xsa| lF;:^uB+J3t3~O>-ZAHxD`!uhgoe*~jp[Tl');
define('SECURE_AUTH_KEY',  'qWE;2Ch$6##?IT1U_+>,frrw8BR`-RL}&jDn6IuG+;w;q_[RM>e<XFU0|VYoZ0@|');
define('LOGGED_IN_KEY',    'RseC9V4JeZSu-hNXL*w<4gNpR+8*|Q95*YXq+91Ec?fq^#v<}fG)~b`/tMrn?9k9');
define('NONCE_KEY',        'a%Cb=BP{-5HVfVJ(?y.mZPt|_qA3]xheaKsJzqVU$zZ{A}[2|>2{_|5{|JXXPr- ');
define('AUTH_SALT',        '84IQ+4$*-3E~|ss)?hbLpW0?8pl1~<bbc&vSB|phlE#Uzj>jFX+mqKk<+Eeix@9R');
define('SECURE_AUTH_SALT', ',,g+iT>t0^y/LQ?79-V#=[P;H7~~p)R7<e-TB-/JxV=*-qnIP~~M%zEA0gr%-!g@');
define('LOGGED_IN_SALT',   '%l. f+&oW8L,v65ke3#&Q@%-[XYwRVNH3# m#ue8P%7PdG~Vrf U*Vqq5y<(R~[-');
define('NONCE_SALT',       'Wdup#{N>!OA7ZM+CHnNmR;=|zaA8r_>;c:[,Y[v$Y3aurdFpC-K<Xk$c(QnyV6LL');
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
