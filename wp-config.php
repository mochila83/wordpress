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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'CoU<)%x-Dx@Aqlze^FG$?JSQZ2#&L)C.2m~Kfj+iK$CY[:9i_ |9ef{7`_k,L:|S');
define('SECURE_AUTH_KEY',  'd<_s9}n#~Cqv*c*[pe+:M_,eIwb_ib{|wu 3?rhNva:4k=N`i[y(e4I0B8FW:_-|');
define('LOGGED_IN_KEY',    'x|aHR3/{^ :+,h!N[]Wc~/>4aCZ@E?NJc?qw$U+8IJt{|u.>6Rq%`gbrqUB#G|12');
define('NONCE_KEY',        'VCK]nXyH#LCF4p4>gst+5D=!I()e@x9[|^kqcc/v)vXRyL4*oHkMRXMA5-`dakE[');
define('AUTH_SALT',        '#(mDUS=tB3NLqvv]R&!)}Rq~a1m-98-6e7u;uxHtZIJP6CD!^_VQbOkf_F=g1T}:');
define('SECURE_AUTH_SALT', '<J%TlKd):Ug<dQYeb@pIo^#B _BoMvJ?|%3qxr>Xp_$k9 %ZA3~cIGeAaL07TjxZ');
define('LOGGED_IN_SALT',   '&D9*lWjwX@$igGPW0St z8T3KKSXIjhx{+ulbPtF5bu,,p%)3Ct0F+]AP;.YYa`u');
define('NONCE_SALT',       '?Ek&rN7Ha{xf<v 7O}-8Uz&e{UAdW626!T6y2Ygqco}sAh*qfH>z+#vO2oeukx|;');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
