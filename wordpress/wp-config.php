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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projekata' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sW0H[Y5%C5}I,Nc>KEx2)b9{$-RPm<5-L_9+}CtB&9c$45EGR7:ztHyl@&uUL[sL' );
define( 'SECURE_AUTH_KEY',  'K0saI9UJ;rnpk.<AMzCScb- j eoE_<5Q=Mdri1]/:/_}!8aUG][&!jv80@?1|;G' );
define( 'LOGGED_IN_KEY',    'Iz^n5cpIE^>OWaJGS^g:^2Iiv$pt%uk9!n0(+6M:1Li|7l8HYz~l_e98E751kwpr' );
define( 'NONCE_KEY',        '^ ~8f*?xEn5%&=3K#yKe;}Q~45**zeAaO4%5T~qKOO+}lni?p6d6s!I/&_F,:7QC' );
define( 'AUTH_SALT',        'UOBFu@Bu@@vzKgmf<~;rUSDVKmQy)XS9I&^WV5i$L4o2,D$~!)~qf]b;ka1f+0@1' );
define( 'SECURE_AUTH_SALT', '[kR:{*7P2%V65l~EW%?3fnAs?@~in>[qn!n7^ocR:N!(]kcxs)S6m:eZ!4rmou|/' );
define( 'LOGGED_IN_SALT',   '++wv;K*3=#l3},h`*lSU5/*Tlaj`OjM.n@^!$eBm)+Va$+e5c!~(FAu!mhjDM}I3' );
define( 'NONCE_SALT',       'b8#kt?7TvcG<[b{N>7/rhxHyT8zg>`0+t_`9:JGs`sUM9N1z<b;RzBFz VfZIwH+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
