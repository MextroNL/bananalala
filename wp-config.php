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
define('DB_NAME', 'bananalala');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'MWpfO-?vYTk:?cw$g^;/z=r}-2kTmba%LQcMEP-Xdg3tg]zbaW^*^gOV^`qI J4N');
define('SECURE_AUTH_KEY',  '=^NL)F:c@ABJ&K;U4K,;JzOCc9.g$_`-Ekw:cJ6(@T{cLxMXPp6 ngq1y2R*YuQ,');
define('LOGGED_IN_KEY',    ' #TWgXK$FOd5`tG=Wkn0+<Sc]lF#skf;n8J2R0d*Yn ?t#sl^a.x_d|_>.;5]GLx');
define('NONCE_KEY',        '2R.xp}qdq9pq[(`-N2PFU7w)D14fI36+z2B0}9v*x$)[CK;j}u}%Np_gpF@(M,U=');
define('AUTH_SALT',        '!bdGP~E#T1yDyKa^Ev,kfznh4unM3[{u!URpRG^6[7C:JAbNRly9#O+E@)KIB~Ln');
define('SECURE_AUTH_SALT', 'e$<u+XrVMP#-s:]~4Gq_.5A-mMKPf]F6jdeW]P:y0(y3I&1q-H_t~npyN-D=}-O{');
define('LOGGED_IN_SALT',   'qAr194T~]S2isqg{^: =H|_i3`OyCydyGFVfS@[fK08W_$m11F.~co;%5S:rT,W!');
define('NONCE_SALT',       '0aK3]D@l/,Bl$ddrT6?RU.j!L#{l*%`ZM]TZ.7$Nf_xeA$P;Tkfwag9)Vg%6j>@n');

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
