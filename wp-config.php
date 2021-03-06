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
define('DB_NAME', 'ducking-computing-machine');

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
define('AUTH_KEY',         'v?|Z<> p,?b-~VAuFs9geiTB+fT{4qDvGN?G:)u*=9u}^Mnu!}jgx=2Ocrti_W2e');
define('SECURE_AUTH_KEY',  'q)!&1.#zy-FX^EzFBy[o3u.-OW37l!,]{`CS{ih#`#x;aB+Q$Ms2@YNhQ1=z`Fei');
define('LOGGED_IN_KEY',    '}TOr@Gpzw}u&7-.L{swHdj^|[ /l{|ATfkdS;PDT+pD+nLHMJt+?HeV+@UXmggYC');
define('NONCE_KEY',        'Si-PbH-jAc{Kv6r@9lc #1].a[L+10 Uw8yPL3V^Y<c|!z(bLwZL42`%.A#7X|/y');
define('AUTH_SALT',        'BOf@_Fo%W@Rw,C4lirS(hU;s1!bXi6h!wh8?;tdb/y:xRP!{}.-SX<GB9gmcr8}I');
define('SECURE_AUTH_SALT', 'LpotfJxyEq@:`8`hGL~XG~45l$Yj}%kF(dawZ![0+xNV)F]w=*^^7;RH_&k!3[4,');
define('LOGGED_IN_SALT',   '+lo+LWG{#iGlS&#+QbH8J7}#x>4R}x]SnUa9Q-B3:3(5M<3Cw]]er1Af?eFtw6O@');
define('NONCE_SALT',       '8]NpF5p6r2 l.ggNP(J7~4HFYYL-qG9}x<k5,#9aDGy_9&P*F*2$Dt;}<NRP2os_');

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
