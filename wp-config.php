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
define( 'DB_NAME', 'shopclues' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':HcsSZsuDD;=O_^Glu.^SryAZ,2v#/cTQ<Ks1@r)Ir_(33BMg@?V/ythPRz]]M>[' );
define( 'SECURE_AUTH_KEY',  's@U/dXjK4,]V?D,o[OVly~43kw#XR~IEXtbPk_{AhO_,dd {GE}(JTioBoX6:O9D' );
define( 'LOGGED_IN_KEY',    'l 073nU-/5&Fr5*Off0z_>{lLL+t@TD ^W:cGEMad~Xy=0^(^]/z<QUxdvY.]{W:' );
define( 'NONCE_KEY',        '[iSvv:J1BD`~0j0ynp[YP0VE2aqGXVhbSvkhfLot*aX[7/=HK*f:9T3bV]fCNxz&' );
define( 'AUTH_SALT',        'h@ Ncr^6B-[thPm-`6pD4:]u8ZYJ/rFdYneANt:}8&V2$SE+jR3IS^a$>wrCR`wU' );
define( 'SECURE_AUTH_SALT', 'Z92UyNdJqR;WgS&9g`a.Tj%Vy7SAzTBUHRt3 `3@*kY&adWZ` :(@#1P%`ZbyJ@_' );
define( 'LOGGED_IN_SALT',   'U=0oX#^jMg:v#<9YJ?j][z;7D/(N1,51P-8,`;#aq|kD 9rw($JSFI.$,.T9.w&^' );
define( 'NONCE_SALT',       'ld%5mcg9;j#q8{++2.C5*uUexQ5Jkd]%;_tU(-f7~v;A?,IT8aFP_zh9(|2c/4j7' );

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
