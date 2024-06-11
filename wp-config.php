<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'bydia' );

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
define( 'AUTH_KEY',         '++J9)YQBK{#{wZ0k881u`t!y)mMf.ITVg<91gU2N@.>9skq|&Ayee6kkL)p$^4iH' );
define( 'SECURE_AUTH_KEY',  'NV)+6pbTh;BWvu];wXH8#WC$yW]j:>7Z$sz*eraFxS+%^|^ufe1QBc3 p)I%2@_.' );
define( 'LOGGED_IN_KEY',    'OKl,/G+?$jN3e }<EhLRsbH#z-F$0KZ_.A+S_&Sbi;C#0]1~<E<@YB1qswd.RSCM' );
define( 'NONCE_KEY',        ',[+3P{hDoUp>@j;c:4h{u}A3X2$},Fe]6aW?Wu4[3SnkQ$Vv^L?%9nI5@tE^:K0*' );
define( 'AUTH_SALT',        'Fxo*$.v+T7p<pYPO8c`aP5W4,{VUc{=Xv7?xr*@/b7gBSeL}woy/ZkkGCu |[~55' );
define( 'SECURE_AUTH_SALT', 'Ugp9ITg&(@bc%*/6X*VkN0IIB@T/s%>cmS!b11-ipI#>4G8EvRdpbkf`9F=B+fSS' );
define( 'LOGGED_IN_SALT',   ' )k.#mfC3Mp{$p/:_30iVlVU%9n,<C@<S=F$&Wxb6m(58~}nr(E&RHee^e1fL_!M' );
define( 'NONCE_SALT',       'Nt(,V[Cg)!ls#wrC03Vpx#HKo/y>0@H*SjN)2({Qwc)k(,D9(OJ4@,]h*= -*oup' );

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
