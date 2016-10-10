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
define('DB_NAME', 'aroma');

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
define('AUTH_KEY',         'hr@jPUMvLX+v>{=i1Aq_*8T:3[2$X2N cu9^pr@9!<h$DY}7Wml7&A>Y@(qg-.{=');
define('SECURE_AUTH_KEY',  'N$UUGf7zR(iT*)<Y<`|b6:G8+[uWh-g86ds2/jV(^_=-Q?uYbc3eZW)jE=BXW2NE');
define('LOGGED_IN_KEY',    ':S xu`h,pvcZq&[~wR-;SX_DB8KMZJbDpm+H|ms>{3O{-kMr!C(=*78[b4 +F;R+');
define('NONCE_KEY',        'gZ [m]u+XS:A,KM~8w7H]uZLH%v-v$xV#sIL]E^HqC_UnOq1F%bnqoUu+4fngXKr');
define('AUTH_SALT',        '9R3W90G{TZCMpY-% =!<_uLn3@Z2HT5_sq#31(])1Tm-}WL.p#d6fC+kC+H>@/a}');
define('SECURE_AUTH_SALT', 'v;MrX}2T.}lkH!`KD}L;+mZ*&ia*-dv3.U7376@o_7ft0T*5nquu=z]~ADaVIS+M');
define('LOGGED_IN_SALT',   'u!~KL[HCWtalx8oBg7{+W2zJlq1KZ^zGF2R]vx]kEbH0BAt->|F94l(6&kn>1u*-');
define('NONCE_SALT',       '7DO6P2gs2*ygA8qV}7Z*!6K<e7`}8W6yo,M0trHW$E(0cxvyrjx-d sH4lS#=SAd');

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
