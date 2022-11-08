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
define( 'DB_NAME', 'pro_word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xD2e2m]TE!gHl^-iXCs{#)*2_:TXxy[6JoB9ydO(831MRI}kHf~pL`[kZQCW>=ED' );
define( 'SECURE_AUTH_KEY',  '0b+~8YiNE4%z`E}U2G,p[r]4Ko8CWh8Lfhh?D#yN)e;|jw/5fNcSJBrPnQ&!y cK' );
define( 'LOGGED_IN_KEY',    'o6])zI&Jfi1]$s%GBa<XLSWA|)}p6o@U#)g;/W#Tpr>iOlTq9!`[,-D/8l-+y<UE' );
define( 'NONCE_KEY',        '[vt;13z+)DX^hP6npQp|B(sDL8BUqPL^%U3cMceAZdqkm0Hy7pKp=:EGm72vB<!L' );
define( 'AUTH_SALT',        'WfY2wFFUYTA tZ0H?$flcv:$c6#~Y`6pj/QY[;G1, <53Kow1t1~Rsxr6$^b*C^j' );
define( 'SECURE_AUTH_SALT', '>z7YFSL=N+3.h8}|}kV>%0)w.`g{&RK:# :sTKD{bP*<RK={qf<L@B4qte8+c)-L' );
define( 'LOGGED_IN_SALT',   'lXL?KBw:u~4f}B(qtn[{Q_{!H_e:!bh-l6?+T!E^@~`f#g]k?ql`xc7u8CWJ pa:' );
define( 'NONCE_SALT',       'xO!iw~<OSo0SWC21KJg05 /ZB;fGz:y&cpf:5a?TNm-}u%2,tkNJDR56K%Aj[S(K' );

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
