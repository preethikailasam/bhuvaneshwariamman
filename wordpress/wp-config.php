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
define( 'DB_NAME', 'amman' );

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
define( 'AUTH_KEY',         'nc9V-vO6[.qAk.k^=^vA4$oQC3fnMV8KSQ=JJ.P6tHRfsUWMAQ}Z,o;j>!4<0C5f' );
define( 'SECURE_AUTH_KEY',  '$9u^K<Ml5=|X0e;oTDH.jlizj&$Aq ,_R0IsU92xw0H?P#]M(6Bt@IZ,9zSmFne~' );
define( 'LOGGED_IN_KEY',    '[fNkv9-0mYn+Pfu;.K+pbDdh1C_(#BX_r^0,s{*N:yO@+i72mur{]gWz_9YS/BxO' );
define( 'NONCE_KEY',        '/:66I=J@D(.AgdX_NiD]6lV,0Zm6:vRXHh5]ljEk!cl`%ZpTmopEfTUh:ZkCQfy>' );
define( 'AUTH_SALT',        '8i~pN.Yi(kJB,qD&X-m$K0YOoU4@]CS+b3Zx}YOJyOjZYg2R%#q;V_E*,s%~ i@+' );
define( 'SECURE_AUTH_SALT', 'yS<>~Nu;G/yFU-=L)CQv/NPSy&|J!ZJ95%9LNrmWL)U9+BZxM:3,6G3BsDg,El7#' );
define( 'LOGGED_IN_SALT',   '_@Ga{mN&.|PI_bH@,D]n/RtaZs0[8Hw<GxU3]+hr=<OQKHFH}sv_G88e*tOktA_$' );
define( 'NONCE_SALT',       '_Av,wwZ%.W5iW@kUk)Sx>}|^n,vA_7mJxBc[eI:{|DIj<Xk:76Bl`q xHa%2cFSS' );

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
