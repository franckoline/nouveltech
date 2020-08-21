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
define( 'DB_NAME', 'nouvel_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Certified14#!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ':*;m~ N{.hN];*@3XmXVM,;i+yIN{$_)4%P a:OS}>**M-V:[%jVGeM{0n;e$o+_');
define('SECURE_AUTH_KEY',  '*#fkc > 2sK0DFsmsYrO)f1uda;)8VC:K1yE?j@%WIO3N->{C<<U[.u_{$cqLt( ');
define('LOGGED_IN_KEY',    '</nNWGpm7TZ|UwnW OL@6sHpn^Yex~A4|;_n/O5Y.*RHnFBl,*!r)&*j_Ga14N|x');
define('NONCE_KEY',        ' kh0(r>xc1pUSwzZa#wwO6]o[tT0;.hngJX=qntEDbk2}uFrz-|hy=ix|TEPM/Sv');
define('AUTH_SALT',        'c=|3FC6N}/auwgbH{?`urnI|JLJdH)qh]SW5/*{7(t ooqIW3_!3-=|^mF:0`COO');
define('SECURE_AUTH_SALT', 'rlM-6H:>mlom<7~TeQ[4X|!a_(2UCo|DOP$GUc7wy+v]v<_whc:$B4wcK+yR`e~w');
define('LOGGED_IN_SALT',   '=cC^D FIpjEB1-G%d2;gg&{MUutw$cLIqtr3b%z23nOS-J2;&e~~Y#N:}%_HPdkQ');
define('NONCE_SALT',       '~FTU;qP/jDV{^J|]oXGG>4BzPJG%Mv^,*|@&O$U|Opp.}L@d1O-+[3W=z^&BclJB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nouv_';

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
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
