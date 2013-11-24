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
define('DB_NAME', 'fithealthin_20131124');

/** MySQL database username */
define('DB_USER', 'webWorker');

/** MySQL database password */
define('DB_PASSWORD', 'atox-d1109');

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
define('AUTH_KEY',         'tR4HXw8d[$cn ic0^xK+KyS;0)gjeJQBu+b[w7Tvyy+Da||&-(/yMqxTw~>qY4C=');
define('SECURE_AUTH_KEY',  'B3Y2(7a&bqwMntcPY`aEox*54W5Z-/<SA$-#NP8h6-CC +60WvcBI&1B4GnvK5-s');
define('LOGGED_IN_KEY',    ']J)7<]ce)d`8x8~=NEg>WT$Q@NU@@O+Uh+`rWiPfb[|[~yR3[|?a24X;6:hhm<<1');
define('NONCE_KEY',        '<?Ed_t)g=Vp.0}HG@z|Bd)(S6I~EYxE|`ol%DeSBT$&]{$9G4}[xS eH`87flR&r');
define('AUTH_SALT',        ',x|m7/4yU/yaQ7, Z{ImTyr(e|1{m&+dB r0^s!e|bA2;bSXpr#[!A+Z`YKaj77A');
define('SECURE_AUTH_SALT', '_}S-jRK(F$`~&Cm033].t$TT}{}2]@R[l|1d&y^JxI*jW;yJ6SREc*Z+w3<HZ-q3');
define('LOGGED_IN_SALT',   '.zU4F9tHAX0q~<br+wn003^<Xe=?SeMv2;T%/ns}t_+Gx&]t!|F-S9=_>EocD,hN');
define('NONCE_SALT',       'A@o]|M$H_~2kU/QJE]3OZ-d4W`wggbu!4DZMpF|$685Xl1TwDo%SscO2R!`e&~<A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fhiwp_';

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
