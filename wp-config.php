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
define( 'DB_NAME', 'henriks_databas' );

/** MySQL database username */
define( 'DB_USER', 'henrik' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hejsan112' );

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
define( 'AUTH_KEY',         '29t[ ^6V mC#g>EYOWvWum/TuWH56QspbIZ#n`D7Z|8OBZ5qpd|I$T;KO#Ati/E:' );
define( 'SECURE_AUTH_KEY',  ')r!ou,O~d]R10/B#vr(No:4?K;8AM0{*bJL.+WRr31MzRi1A]-LguBa.<Tuht#M#' );
define( 'LOGGED_IN_KEY',    '*,mE3?:cbI@J3Wt:e4,bsAw<lk?aDtEHHNvm!q=3#_7Qr|Dv&xPD[T C[v{Cpga6' );
define( 'NONCE_KEY',        '7Iaj=bkJj0 Ql=J,Ks%^x9sGPD[yOKva< G__81IZ4b:p75OJ1vD}?}>&9yP_h=C' );
define( 'AUTH_SALT',        'ndQ>dLk26BxNK w[AS|a]LvC0k-gKQ9lMD|?lIg-Uqtx|R6pPCLa2B@=s<jf?OQ<' );
define( 'SECURE_AUTH_SALT', '4m}Bt6*.S<zgu)F&)J}51&@QG?r%PphJ+4On]2p{u@=_TgYLY{$+)i)ASuTW11wA' );
define( 'LOGGED_IN_SALT',   '[!&p;@f@m|-a>%eSpyrw>Du ?)CRZZVU| LLtPK{|ZNMhm{(pQ[;!@[[Pt7VIf7=' );
define( 'NONCE_SALT',       'berKJNmxRaxl?145_5i|_U`? 38-igoD{KYp`FLy8dkkl[.%4lt23Jd(/(I0@ZdU' );

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
