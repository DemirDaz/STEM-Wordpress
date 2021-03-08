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
define( 'DB_NAME', 'wpress2' );

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
define( 'AUTH_KEY',         '[M(b^;d^`2<L/6wW+p3_4q/7+FHccM*C-qHoc9{$<M-)u`@9Arh&NMp}oYvUW7Hb' );
define( 'SECURE_AUTH_KEY',  'sjXg04/^U=a*ystRB.o6$5}$OUzOkH-/t*~t8`i3`Epj7*G=*=T-w0qXChI.5tyr' );
define( 'LOGGED_IN_KEY',    '~W:r.?kR%%Z#>jZ,.fRv%XtJB@H>Z8):9`r}sNaQNqtiGw1z`gU(&eo(p*b3jo>0' );
define( 'NONCE_KEY',        'BFz(J9g3d+*u8J~ItFfwhSM1+<._ZDZ[qO2@18NVpw.W>#!pn-Qn7:qdD&GuTiIf' );
define( 'AUTH_SALT',        'J%Ah5wc/fi:jp)S+[m7+$k(lE Mm+h(Vpzp(yaVAHz1~0El4a/Ga~nZlZ!B{K]L}' );
define( 'SECURE_AUTH_SALT', '}V1w>]MLTBX3{NV(AeL%7le:jbi^Dua8P.!U;ylO[hp>=iW#OF8S*^>_YI%tE:f`' );
define( 'LOGGED_IN_SALT',   ':5%*`t]M,3qF#&nhc55S(Aa]7UXc|9?LQ=Ggkx*HC@5ez^zV8c^aBHginx6,ChU!' );
define( 'NONCE_SALT',       '*}egi>Gv{#~e|&-Q?jC*B=PjEQNVR&Ks[I*Sf23UuN#*0;>r9Rdlf{gqAo?P?SKl' );

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
