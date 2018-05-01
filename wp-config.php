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
define('DB_NAME', 'essential');

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
define('AUTH_KEY',         'fl/e?d#yv?G eg_P-S;FNt78k9t=#|55:oZ0Ra}L63_#hr5k@`7Fhjv%A2#WQczK');
define('SECURE_AUTH_KEY',  'k.0QHV ]toLwMg.6O?:I{/$4G8Q5I::!agM?@8*lhNe){FEMN{MOA~pyE@d^xTy4');
define('LOGGED_IN_KEY',    'yJapK=ah]L=E,@o&Myf#HeK>$QST?n0$ u!f9zAv^wEM~}p0+%`*_!z0I r$Z#OJ');
define('NONCE_KEY',        '*CQAn+oW[:rgp3v`_zDcX%Pz|uI^dBP@ki^gW^}s89c)NTs:u2qZ(n3Z.~E3wmOl');
define('AUTH_SALT',        'W`H?7VZ .Fp7&L,#WLv5CRod/LFl*zSjFX+U<L>c{k]$|GdM;+s8|d2`or9ED/8r');
define('SECURE_AUTH_SALT', 'ub@Op9OD(kL.Rzoo:9ULjvp5jPox~0] `-:tLOWs6a0(&sC|gh$s@1iJ>y{qnm*/');
define('LOGGED_IN_SALT',   'UKh33iABQ}w@TS%7%8/ar|`Hr$p*kG,C?mwYNrwdn&^KZ3JeC)ZwtmK=Sezfu[u*');
define('NONCE_SALT',       'CS6wwAM4Ea]w)J[,rk,yx$tTn.RvW31Bit[PwOEZRAqp)C`<o9VDQQs~Sau_cipR');

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
