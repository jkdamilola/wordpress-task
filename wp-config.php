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
define('DB_NAME', 'wordpress_task');

/** MySQL database username */
define('DB_USER', 'laravel');

/** MySQL database password */
define('DB_PASSWORD', 'damilola91');

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
define('AUTH_KEY',         ';HuBU )pu:L~0{qnkv(1>h4d.H^brG/_?%J;%PrYp`!a>QLQ!,Oq?Es7KYz;%v ~');
define('SECURE_AUTH_KEY',  '#cX/gd;tjLun6(}me^5%^40Sm_]bb,|:;AH#!/*vu_rxMC$WeJfhYZU]@Sf5Y!45');
define('LOGGED_IN_KEY',    'z3d|.b3&<EAs(Psa=UnDF<Hqil}F4xX|:qoH.Qx|hG6`lRR5ZjU19U-0Ff bw%#q');
define('NONCE_KEY',        'S/T^p-Koj83R[eP+4~Q|;+KW]U)2J(CO98{=.D8DS[`B}US),kDEMtr_}Npti>e%');
define('AUTH_SALT',        '^p/;Lz!?I{Uj7R?7Bl%lF&k(:tA`{YB$HTR: %9F<:XYxi1)W@?/OQ& Kq{Bb&M#');
define('SECURE_AUTH_SALT', '}P*>;rT.Y${TaId|bPaIK1r_mZ,oX8t$gMWnc}2^dnCkK SwJP(k1Pgb,>YC+Gab');
define('LOGGED_IN_SALT',   'Gkm/jeK>~hG?CK`]o hyCb ?5H^#?>g;83!D]UbAe*CtAV,5a=1DUTlVc$4~+uJ*');
define('NONCE_SALT',       'j;uk>$]IHoAC2MkEZQ]r(~#& R)&E=5bgtIiX3_BnwV4*6V)d/^cQ8Ppp_h_D?_W');

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
