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
define( 'DB_NAME', 'gataflora' );

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
define( 'AUTH_KEY',         'b!:6 DR<3;*v8+!#WIPH>>]6~>KWU}{y$zr MyIq54<6A LWOl4}e>rTM|8zXk{}' );
define( 'SECURE_AUTH_KEY',  'dZA5qeKr1<rgKtfA/^@{Fw(S9:2${J6SolZw{+<TRsG`9Ay+6q1YImXqm@|]DhCS' );
define( 'LOGGED_IN_KEY',    '<b%tTi@}<_uHTB^Z[TDYPMoT~?5VaG]k1Gl)c&r7[E}4sx[-^=0j;fCzr_#sKhvZ' );
define( 'NONCE_KEY',        '>Ki3nqcD7-C1erB2^6!:|>PQOAZm1! *1l;g3GY<^mRTqY.izvq`T:ArSp{/~SPC' );
define( 'AUTH_SALT',        ';u0)_gGb%PQt&#D7RK#$hLN6:1%qkYb0n[{.%8+fLgtMz813jS6HO=7~y$zG-*m%' );
define( 'SECURE_AUTH_SALT', 'Zqq.VS.*=:@z5&)hTsD:ZK`uD?1O$zTzJwq{U?]0_5<=.,u-OQs~#D<LOsZk8VOm' );
define( 'LOGGED_IN_SALT',   '3+6?81M%?Y 4w0:Lr8U[Z|}>;>CN[vWa*D[OF}5vu~3vM| M)GN?QTZK?}.9:;m-' );
define( 'NONCE_SALT',       'O:ZQ~gC4br(v<NS%]k!ZcLWnzN!{]eW [ ! *r^7t/c`ls}Uvo2N=jk?!%_7h3;#' );

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
