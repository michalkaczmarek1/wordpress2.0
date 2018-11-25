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
define('DB_NAME', 'pp42877_wp');

/** MySQL database username */
define('DB_USER', 'pp42877_mk');

/** MySQL database password */
define('DB_PASSWORD', 'Kacity!');

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
define('AUTH_KEY',         '}^-(#j)8+nF]b~Gr{g[ ewTb] !Cz56n?hFv8,]/9~P>[_U(U;4>!uzx,#L(NSoD');
define('SECURE_AUTH_KEY',  '3|9cemiHEHZVDLC4v<mN^78@i1*#+rcP=&FQ*SMpMO,NVNx4#~SsEpCr6qwWra~J');
define('LOGGED_IN_KEY',    '^vUxmzAPx+wU}F`SpSgoH6VuFXCth}?7nE0>sNn+bH)w/XqU%Eo>Q#Rh4G.6r*GI');
define('NONCE_KEY',        '^-dyxlSn7GNb^fqo<LH)N,?q~!$b5%rqg8lR`AOg3<orpf<bZ$Sx+`C}6c8~wHl;');
define('AUTH_SALT',        'qil4k&g<LD=FlRO!a,`Nz|B~~=<aCF1=e1PhVC}i<ejRBg3B2I?BJxedX4hD<#-o');
define('SECURE_AUTH_SALT', 'j*q.9K)qzoY]eJUwth=OR*Sq!V0i{#-2o15mE>]55(?zdk0E9:D8d=.Sn^[WmdYb');
define('LOGGED_IN_SALT',   '^`<jz0v0bo4`KkYRU|k.IWi<wu0yfN^{Z5m1#mvA`s(qFZFs{Slk39PL50[i1p%K');
define('NONCE_SALT',       'Xrr`:o%oTTihrI6 q`}b[)tYcbj3=tBm+g=e@4g2:WF@q,~V$>gR(*gYK;w*Qvh ');

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
