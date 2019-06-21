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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~6/L,K1idZo>=_(o~Db[hHg$Y&KyE)DnHKE|:Zt<3-E0lpbt-:c7Q@0K>i[rH+8$' );
define( 'SECURE_AUTH_KEY',  'TZuP.4jooJX@3le0&N#RxEJedsi`@&txfIl`LsZx?B@nHrJ1W.$B$v.3DJ(?!R,k' );
define( 'LOGGED_IN_KEY',    '-<b+1V!8 &1I?@&Uvx^co(~QG6$1PSkRntm5(idSh_z ueN4bHh{-I!&wO9i4QG(' );
define( 'NONCE_KEY',        '3&IQX)Rdq,YCbhm}cPJ<E!G]k(bY((pH7%upo2qL|1h:~we9;:Mt&!ldclBN9BY4' );
define( 'AUTH_SALT',        'h5/&iPjoR2BHw.G7E2l.ZF6U9MkK!;iK8B4}KC@~B9JNKKlanCrhYZos~9M;>mb-' );
define( 'SECURE_AUTH_SALT', '?@w<qFkcrhs7Wj^gxO-jdT!8-#VbDC&K%~K$b^z;+X0fs2tSK:t/d:0xEiK.hPUD' );
define( 'LOGGED_IN_SALT',   'B<nok=8cl|_cR~@V%8-j`J ta4_k{,Si)Zm2%},b]P<,)`4.Fp|M3$tL:GYm<H<,' );
define( 'NONCE_SALT',       '09Bf8mVt>K^3jfB-yS0RLu8zd|.#Q[JtMYzwjN!0+E|hfp`B:1Zha5&<;}+0~JEV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
