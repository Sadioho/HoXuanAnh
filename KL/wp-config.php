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
define( 'DB_NAME', 'khoaluan' );

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
define( 'AUTH_KEY',         '.lfYm%&IapZqv?.M*pQqf8s:!Ct+mwt;Z1K1|lt3WVVy7*tlbCLksa`si[WJgpmJ' );
define( 'SECURE_AUTH_KEY',  'o>P~Hl5Hy4H;OY=xh&=:Or(^JrcYrM](y)%}1Yo#|6 E67x[6yPFs8zgOL[L%>{.' );
define( 'LOGGED_IN_KEY',    '*}TyI+0^M0d_TNm])nPoY]=7+?#h:X7|2B4cUBBs fBOl7XTV+HY?GzfItc:@vO#' );
define( 'NONCE_KEY',        ') `XP6LG Z;mm:B)kfvL,_P)kVSi(qfk~R(t5eV)U?,KmnuqBeM>wFSY> KguAG!' );
define( 'AUTH_SALT',        '|,,nzbFrykK$l57epXl}`xMx7%emc~u05h% ^O*:tv}XUqGI$ RB&N.Sm;*pQi1E' );
define( 'SECURE_AUTH_SALT', '`@YK_C;wE=A0b5<fWaHc>:<WUwqm&tP6XV_,6.w^|6%AGr3[S_1:*vlWTfNk{I^l' );
define( 'LOGGED_IN_SALT',   '%0W)&vCf0URjZ-+.7`RbhJ^?/j;b+!@C& Op?L [C-m0- ey`{G05 e%O=}-TFe-' );
define( 'NONCE_SALT',       ')WN&-AB+8Qc6kw*^Q*L`H&8CFl,n@OFxu/f1dfJR$`72%wgnnidV>*5:JhGZ<8YK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kl_';

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
