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
define( 'DB_NAME', 'healthcare' );

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
define( 'AUTH_KEY',         '0q7?1CnCk&pm9yY](PO_>/PfD}z.8aTG^]?,#5{c,{bA5,WZHo{]>_:xF3nP/R+_' );
define( 'SECURE_AUTH_KEY',  '}&PROLE}AM4mGguRKfcD,-vKn&003xXIP`FP|Q)CQUCF?!i9!-/sA7ikIQX{4z@i' );
define( 'LOGGED_IN_KEY',    'Ox!N#^<jRvCsoK5<c`@byCCl_Qhr;y6~48)4sD%4KtsY8C)R+Xjle~.,.&siE}a2' );
define( 'NONCE_KEY',        'Pw%R~G-f:)Mg)cVKd6mQ:*`|l&>qU9{~L1!LU*`lNY+w6%;?<iBZ|R(B/n.H7Z[#' );
define( 'AUTH_SALT',        ']a>m49Q<mP~52_hdQD]oB;7cmB}<ZVpy6ETYs-~OPJ*mUB:zk3b{[pxyx269NH?h' );
define( 'SECURE_AUTH_SALT', ' he0y}tdO<0RR!CIe>o4UW,e>l*jfR6|@g.|/CaOGqT2ZDYJB3&GRT!Ol&+*+8(,' );
define( 'LOGGED_IN_SALT',   '& }5/Z9(T#iPZp]_Cj!7gw>sX2Tu_6fMbylo>T28v1&`He`XXT4<2Ot,a?dS1,7a' );
define( 'NONCE_SALT',       '~:-kZb|nw9^pG!3wd-F_CBy/Y+2d0Nn{hC*kk!R:-CKgv $MPkYtmow6i.d!XkNd' );

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
