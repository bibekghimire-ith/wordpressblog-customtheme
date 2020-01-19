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
define( 'DB_NAME', 'wpblog' );

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
define( 'AUTH_KEY',         '^bO11z7AO*sLB|m:v1!1e/g<sg aNVzGP~p.R6B4@X0Ru,{*seo+YArU$T@I=Om?' );
define( 'SECURE_AUTH_KEY',  ';CN*~!fQ)Nb5R!L6=M*j4EmQP3roX*XF^_52|JRsjQ1pvk)N2$h]zBMVMA?skMrn' );
define( 'LOGGED_IN_KEY',    '!{YWXdFl<Bsf2[wm>E$yRsC^6]2d:G3c[O2_wV+1NCB{,mj4&-k.5@RGjZyKkd|S' );
define( 'NONCE_KEY',        '@8uc%Ndx@9dGO#QCPhJCj<ZB%@MlA b~`LC6-#t~Nc0~2@`z`Tq&Tgq*)/wK-%~D' );
define( 'AUTH_SALT',        ' D>*V,r[==0b VI6|!5ufwI_,/6A0A6oq48t*,H88hUEQCkvD=3JWjX=,k*%t/;e' );
define( 'SECURE_AUTH_SALT', '9P.%@<mjHkw&um$r-yiLzl1F,xWhDsAkP@iDX`,.~c*|Atp|sD[s9p6!dVnH~1im' );
define( 'LOGGED_IN_SALT',   'E,y;t7Tt/x0Qpp0.kRhg#=o0T$ 1oMF3F1Q.e}2AxV5s2]xcw3.P^Qv@^![+g%4B' );
define( 'NONCE_SALT',       '<0`_*D%!nPr`yH#Bl86?4n13W3=yGzZSqu)j8**R5MrB JDQZRbOIV~Sb$X2=+TH' );

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
