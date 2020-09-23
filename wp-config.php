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
define( 'DB_NAME', 'nextlevel_blog' );

/** MySQL database username */
define( 'DB_USER', 'johancastillo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GameOver2707$' );

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
define( 'AUTH_KEY',         'u`/(()MAO/Y<h@!{A})MN. 6W7|qqVoFpp$c]JXmi^j=?-U#YxDttP(46*h$f*/+' );
define( 'SECURE_AUTH_KEY',  ',z{x[ x!LAj{x6At{<w@~@XqtMX4MU/i:F]3CA>:(=)nrio8@aCYBFdMtz2f#m{y' );
define( 'LOGGED_IN_KEY',    'VE_#.a*vSsynm6+gi!x@+kiCMXt1C9eC).x%i3e5Hv3Yzy%AgWulEeLwKCkutV@z' );
define( 'NONCE_KEY',        '2RL3#igBKDT^,V?mQaMtj4d?^3c|_2d)8@e (GIxnOJKDvTO4zN!Mh`GI<p^B60_' );
define( 'AUTH_SALT',        ' w+Wi$Xc!I5fb/Ycqa<4F.Y5V|]k#!`3zg/l^$/7@t*k9H<]2sE0yn!kB|Z 3oV#' );
define( 'SECURE_AUTH_SALT', ']0q@zuNj]a#5hZ0jP*=&(LyuH1ofI9f=;_36(zyG5}C5Qe`-J#z$3b.B(BEbi({k' );
define( 'LOGGED_IN_SALT',   'wmu~y*=r9^esS|]P,ZD#0+/|xtp!J 6H1*_UZ+}U#MIkTf;i(kB/b?m+k._|&n`J' );
define( 'NONCE_SALT',       'K+Ud^hd:fs;<]qv))oHB+<=peD({u nGFUd+{pxnQN=ZT^ NVgS;-|Po,m$]mMkv' );

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
