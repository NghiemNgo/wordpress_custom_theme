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
define('DB_NAME', 'wordpress_example');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'phpmy.dev');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H%Iyzexa5.cH&tA:xV,L-sZiY|dH;@[5I$L-n8Q&<tyxMH32dA=^:,<M0:rzRzRE');
define('SECURE_AUTH_KEY',  '@g&;TYPoE~mJB8mI7]?B:6h*Dds5&vI311~~^d_2@lT_h#=f:<z?Z%s%lnb>}8dr');
define('LOGGED_IN_KEY',    'fR zv-KM5Bqf4%C fl)M5X1x* ]sdf7Xj:Z!HTd=`Oa[Vq&Qz`qrBTdl[ |@jlBn');
define('NONCE_KEY',        '{i&*>^+G6%nt=,8+xJ&uWg[0`-8;w-6,z^f&Eue ;Gdvr7+7aX[KLr,E#JGf!EUO');
define('AUTH_SALT',        'CdCB ?==;Mto~&.VL-Enxs`JfX9b/Lr{N[,SC!liB+M/</62ra#7n8Bs6;97cB=E');
define('SECURE_AUTH_SALT', ';IB}}/%-i6=^)/2.PC A{9r<6i3]B-MTb*W+Hh^fQ<4/Q)+rQmP3EzQ0j[0|j3}~');
define('LOGGED_IN_SALT',   'N2!Z[?{j)o?RgrG0T0>+82{873GMAYfvP[+HUQN}f8U6,j;%~u#&>Y]]fQ5@MGr1');
define('NONCE_SALT',       ')f?z|f-f+JO)#RrW+%BA,|kEYC7P~w-H2fg<[:oF>Y&)i#,jjn0+E+ Iu_=I16+M');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
