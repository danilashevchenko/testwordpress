<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',T;A?p2SyAWY7{HH|&J31e?e~[kO#|07EjELK6S<.&#ybNKG(yOdJ8GmaDV8$l I' );
define( 'SECURE_AUTH_KEY',  '3dOsTf:ijcC<b/__GQvN$(u{9qt9T,>TnWpbPt#2q8J`hW8rc~1(,b)Ua&DhRe4P' );
define( 'LOGGED_IN_KEY',    '~mT )<i#tA~bscz+9M/jR6VR)@dymv3CsSZY;Ee%[T(9CR(dM$U4;8+Ni^2E)=?9' );
define( 'NONCE_KEY',        'aUA3G*s;n OQ~8_@~m;&W5h3IIH;Qe.q.-A2!Ai/uDmmb~$wM$GkW!&rqE<px=L8' );
define( 'AUTH_SALT',        ',oP;jI?dlH];J?1vBr$F0FOO/?`.LU==j(c2!#[GM d3HN<U[fFe~WUyVTN.`(:v' );
define( 'SECURE_AUTH_SALT', 'I9Y~VCQhd!{7.k;D.oFcS/G /.T[:*oXWgU;K3>fW1HBWA!sG.NKq^ i7w2!qz=E' );
define( 'LOGGED_IN_SALT',   '=N3QmH>8p7sA<H1m|~!K~kcgw60WQXfN<eiUzY9F]t89s5>wrD<Br7z[wwqN;w2A' );
define( 'NONCE_SALT',       '0mg</g,p)`bV{dN|V{RnIf7`zruI*VN[Vro`l84ZvK&Z9/2KXNd`9}_AZSy+.k=k' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
