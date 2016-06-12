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
define('DB_NAME', 'mpala');

/** MySQL database username */
define('DB_USER', 'mpala');

/** MySQL database password */
define('DB_PASSWORD', 'R3dgu@rd!');

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
define('AUTH_KEY',         '-+nRTV{k_wmO l-`X4_LzU-@jP&U7{;T!l#GoGJNTZurKL%alltEACd_DDx0AiXF');
define('SECURE_AUTH_KEY',  'aXy*!$|s${nyoftqlh.KOOux5jmVGuYYe$h2O9V^[8Kf*,=Ul $-9Cq|nw/#t-@K');
define('LOGGED_IN_KEY',    '+?E-479A4{b+52-B.+7qK+GK>1*-z`XtfVdH|T|%B|~n({BSFy%Z]4+nu@HM|*Q ');
define('NONCE_KEY',        'DO|]Mq|?fT-z|PSa&+/hoy@I9$CKA4a1CEPQ+zxtqjVISTD6t4g(+2j=QH}vJ,/t');
define('AUTH_SALT',        'Lu*CANr9vi8:#ur/ubBm/_ y{8sT+6^(=Bo2DX`r[LHq#u:UrtZcF L&VS{RY*B;');
define('SECURE_AUTH_SALT', 'FD^4+gWg(#c[7B/a|^,+>Y[rp=/,W2z0eelQE:Do@(C;={KM&,zX$Y0m2h (?v;_');
define('LOGGED_IN_SALT',   '%DjtORMLX~;C[<ajZk8HQ|mu,m~1~x|Pi|zW$4i!%p//`OOq895ULLq+?l]/KA18');
define('NONCE_SALT',       '4Q1W=9WL/F4P+dHk`Yi%S>t{itb(+?Tfk(U9US6zc|0V0=6%_Gop0j0k|^W(`ZR~');


/*
define('AUTH_KEY',         '*IZE%?k|8eI%Pp]={x0@}IwY6i~h^%mSS`KfkjD;x{ea} jHy Hy=$aJ^_GngS?W');
define('SECURE_AUTH_KEY',  ' %Q&&ue-gSmr0+:zuL35#T2-;Coy+d8+4N5F5Y##OYxI|d:=1g--UQpTO4&gtRMW');
define('LOGGED_IN_KEY',    'bAkH@+oB;F1[N2$V@TD-Ylq+E,ULsor{1Wew1Ss_v7Gqyi!<d+iHE<XmYq{[>Xk`');
define('NONCE_KEY',        'N-?Y6(^P|6nTi||I$+0(949~wW?`O5vN+oXS_N|MPlbP3eS==UJ`1UB>!A^%Fg14');
define('AUTH_SALT',        'r^rRG;Z^&Z|ql$d])@$4 ht:|UMb0<$TKil&N+vM_+l7U#ug;MJwjx|bRx3b4@^ ');
define('SECURE_AUTH_SALT', 'D%7s/Gs{*<My? }C=VVMLvZFm@CSX`47Bxo}&OWK485/hi<Ah;i4++oT:FaR,|0I');
define('LOGGED_IN_SALT',   '|wt9R_n{,}A7P[X&h#Hh~&j{N9+3!WR4+*;oE$^|^ J7NCpi/q{TI+k=+f0qr$WL');
define('NONCE_SALT',       'u0P yRj875Bc;tBR~*).Yh5vR,4bIyW|N?Um|EA.xEx|ph8T>|Yk8x4gmn)g&K%3');
*/

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
