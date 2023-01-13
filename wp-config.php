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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crocguer_josimar' );

/** Database username */
define( 'DB_USER', 'crocguer_josimar' );

/** Database password */
define( 'DB_PASSWORD', 'j0simar010203' );

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
define( 'AUTH_KEY',         'L@MRi){qP:E{c+94i`hpQOdukT;XPgnJi-hd0t4v)cW.XV71Uk_4`Fvc+huecu#<' );
define( 'SECURE_AUTH_KEY',  'dy<-]*yN$HCvfu5f-B/A_Rl[1NkQ^ihhT+.c0O-`Y]g|i:p@sphZ:St:C6CtS=BN' );
define( 'LOGGED_IN_KEY',    '%4nH&6t]tQ0Bg?H:VlzkCn^{QsZ^oMvki>Ag3;[*&Dl/?,hbA47d~p+XaM@rOXuk' );
define( 'NONCE_KEY',        'B|[S]vgw7bV$Q]=LY&6!rf{&1pu{^NF;,!FmNc213V^((/> N@z#r>{t.zmRQXp@' );
define( 'AUTH_SALT',        '()F_.tB[!.x<AtU,cA0uzHeAi^)/cN2Z{FcAh3$HbyL8HqDr1oQgAeNM^zc@k43)' );
define( 'SECURE_AUTH_SALT', '$?=r=?L,Ij0 C8ST,FU(>{$9k$cNm$S-~yU6(Hpr85`!*;g I:DSx32Rgf+%(r;_' );
define( 'LOGGED_IN_SALT',   'O[@+4yQf&8^;nDf;q3qKNL.y,PZqg!=`S_!VQ:Vj/Lov^dvE).RZO6q@:.vP!d;-' );
define( 'NONCE_SALT',       'r8O;pX]J>mZs;,lu:o@Hs3_>B62 ~hFY*?&!t=S*;5L*[UP,g[`79uJq{HL,8k?n' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
