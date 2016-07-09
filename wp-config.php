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
define('DB_NAME', 'yws_william_portfolio');

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
define('AUTH_KEY',         'gjATo]icUV<?{2:CK,ZZ[*JUJr,#;3fce-2A}ewJ^|as+4!IU2a8s1|}Ge%.t;+-');
define('SECURE_AUTH_KEY',  'GVk6T&fz).F.JEu:dlivTga}_vS-mw#o,k;RS7i{}oh@+qoNsrjqcB+wNmp3ti,j');
define('LOGGED_IN_KEY',    '- 5D1 |C-/N5(`6fKce~GMYT)s^Oc-SL+hou~%&fT;Fm~uqA8ct NBX#-^[^J|N]');
define('NONCE_KEY',        'EizE=:IyA[+-p9b0c{86CupaAB+NG+O!dKDF7a+.ZUmq}8sShjkQsg|YM>@Ay+`T');
define('AUTH_SALT',        '8+Lf%C@wbpq@_[P(^sWt/Jg!Pu}$BCpqv|yqxX|;#Y|E6:t,HX-S!!,]/CukMT!e');
define('SECURE_AUTH_SALT', 'KLU|uK+n6VZA:0);x#{!f-/[+,B;F@b(FnKPaF$.882Xwz=?t~UkE{5s,*rwSL~~');
define('LOGGED_IN_SALT',   '1&||H^.M&j8snJ,qYX!Db-+`,9m{ujOP|5:xO4|X@P_AH#]6u^B47ZHTY+TL>lfR');
define('NONCE_SALT',       '|hE&Od&G~I5# lek~X)+hYBSd}+yC~*i,JyepRFk9O|@5-{9@:LSMZ=sUbaId]po');

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
