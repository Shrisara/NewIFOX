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
define('DB_NAME', 'WPFOX');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Admin@123');

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
define('AUTH_KEY',         '+S/B9FUm&1L9jJxblEOwb1(ek=DzWOXi#l!IE})Cy?m5,9@mBe(Z>([g8`{1-P_ ');
define('SECURE_AUTH_KEY',  'nGq)Fz0w0AU{WIRd;@}.>0u$)%wcRlRiWU0{pLsByM8i+e/yP.sG(&5&6gQspxC{');
define('LOGGED_IN_KEY',    '(Rm[^*vtn|:>,5n-W#|>+%5](8y|F{`my3H$zCtziReAr~uT7%/{N3O4G]PNLb}&');
define('NONCE_KEY',        '~%s:,G1b)$,5a?8;]FgM`]f<32F>jEnqi@%>As{dgTMU@~|P BT~KCeS:h<&Q. ]');
define('AUTH_SALT',        'F6mz<R&Sx^}m!T_nM[&;~7YoSDvOjMP &5ByIV4?;,JlEZH)s94ki@wP*P[NQrXV');
define('SECURE_AUTH_SALT', 'XRQs$T+)6CuA}J5+Do^,j_uZk1Og{n-zH{v0|3^$ydj4igOr1G@1W1l%zST*A->x');
define('LOGGED_IN_SALT',   '*0Vl{kG3fgefwx );nhSt47lcIhBUQ]}s`+k90,f#}B]n#L+n3tWjd<@Q.Z)1}V|');
define('NONCE_SALT',       'J:h{r8Gs1Tf.Xf%na2j$QQOCC9|}vwz1H!gm:48q5;R6(P6Op]t@Vmm*u7J*E)@s');

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
