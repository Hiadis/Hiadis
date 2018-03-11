<?php
define('WP_AUTO_UPDATE_CORE', false);// Este parámetro fue definido por el paquete de herramientas de WordPress para impedir la actualización automática de WordPress. No lo modifique para así evitar conflictos con la prestación de actualización automática del paquete de herramientas de WordPress.
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
define('DB_NAME', 'wordpress_7b');

/** MySQL database username */
define('DB_USER',       'wordpress_ee');

/** MySQL database password */
define('DB_PASSWORD',       '$B1V52gqEy');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',       'jYE#x!%0TCBeeCr)emto!*Fv*k6GR*k!3!o0iJ7d2xGeyV!Qo8xL((K8avjNuwrF');
define('SECURE_AUTH_KEY',       'wax^Xfy0Pmmtew%Ol6XfgT4q3ruQ7EDhPvH#Ot@5N*JqTaCp&vkwmShP&*ZQT#AN');
define('LOGGED_IN_KEY',       'ScAnxyb8KjxBWvc%aHxVW7UuBJjdmEjccn@GSNWVGVsywV*B2iXRWU29JzjplBbr');
define('NONCE_KEY',       '9PIYK)68qy9bXiRGPUllevO3)3AMay^vOF@nwtlOCLv4wqZtexvi#xdeni%sFFyt');
define('AUTH_SALT',       '7x56!bYup435K%ibG0l3iPlS7yPRYNqYNPhqDwDwATsDaRhQJkhiLntGF970vsaa');
define('SECURE_AUTH_SALT',       'hzqE025Gd1^gesHss)j&dXsnB*uGBUlOJ1mJfUxv&qvZe5c*59se2CwgjzLvQKcS');
define('LOGGED_IN_SALT',       '21R7P9W!F5Ao0zMrW%hm1Kr%u^SlVr88m#8kx)ozbA0!#JIl7e5XGhKQcnG%iOrA');
define('NONCE_SALT',       '62*DIQ&xiFD@bFPK!bDibXkgEtBXxk4mHamugNDGgUoRdyGa#*g1mS9E@9PAoc2Z');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 's3m215Y_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
