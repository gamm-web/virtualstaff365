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
define( 'DB_NAME', 'virtualstaff365' );

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
define( 'AUTH_KEY',         'q%_#bw38Rqg|=dT8g?tBpy>kuEY78o[(=c~#1exj4)Jalr8<|7LRx]9|Lw4XSx?W' );
define( 'SECURE_AUTH_KEY',  '^!tm$_j}@>gJ=/rSUWV]F$)+v(aBsHnA+7j{iHZPu+[q*&)ywGP|XvBq^YyhcZ7M' );
define( 'LOGGED_IN_KEY',    'Nk9^]ghSdZk7-Dnyf(83}6dsi]@-P1J S+@MaR<?%Tn(#Z }9QJh@X0SZT`O >?s' );
define( 'NONCE_KEY',        'hXaKY#S^p?TVqEC7QmQK* BmF8D?ERF5[m~3XuP6UJ|t8l~-:<1:;FJwLwIB-g5?' );
define( 'AUTH_SALT',        'D/AV.:a_3W}<lwLo4UT,eT)]4e_BzJKd[{Lr!eswGNp4f_$HS2ArzN:u_0cBe:RD' );
define( 'SECURE_AUTH_SALT', '4ZFt@:tUvxd!o`M+9QzA=,b(HhZ4w5ZW!9][?X6_e[BE)?7t&<GrwhX>M|5?AI4C' );
define( 'LOGGED_IN_SALT',   'i]gkd%;fRebTt?<a0/~$E;8v?4ISTWB1P[%2x-N@%xBTrSxLx17bquO/msC?G8Z6' );
define( 'NONCE_SALT',       '}6M`|lbs1(Z-clC-P`h8a)~Y!osiV}@pZF5iwI) |2Q*O80Y_(C_X.>mQ/MG2K0/' );

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
