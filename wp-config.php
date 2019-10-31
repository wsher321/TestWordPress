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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '@33u9Tu|AB^dnncBxRT?zbG9h/nz)=@ G&J>m6n;,F7A)-[9gzx~20yojy<Aq:/j' );
define( 'SECURE_AUTH_KEY',  '9$4p~ 1_S|M^cks@D|u6X(XWhVri.5TRHmx 8G&7reaP^-,|RwE)SGoxx;ti*dug' );
define( 'LOGGED_IN_KEY',    't!$o`@IP.)cv#]BH<8^ C3S;V{}lNv+1~B>GM{-.]YZi]*i l~>H1L}Nf,X/7a*?' );
define( 'NONCE_KEY',        'D^[@WZ!|g&srfhl2p`w&N/RHw:XfYcEt&Z*+RW}_*|FR.:f;n-lf~-UD+K(CzVA4' );
define( 'AUTH_SALT',        'yp4Wm*zXV.m!)zI-s?ayG`u8a<ReC6tt&FXYLGH|{%*B]``RTH*n&0%V-HP7)#3[' );
define( 'SECURE_AUTH_SALT', 'CQ:m.[MuejvcFLvoT mD6<T7S},E8_Qlq(rbH4cU?x ?Iov];RX$5=j!rJ_.Vc`,' );
define( 'LOGGED_IN_SALT',   'BH:cK0+~vaKc6 #sBLe#c0fW_vg%]%qyrdoBAEN:XA0.9&@g3,, 2m1Nt$yvV.*%' );
define( 'NONCE_SALT',       'A)P5R!)[pNNt|brEo=>7n^<C]>&?`lh=hYxMX&}).FO`++X!vjvPRq~8;?%Uyag2' );

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
