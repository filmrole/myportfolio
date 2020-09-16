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
/*This is only for MAC user */
/* This allows you to download plugins and themes on a mac */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Y#uKy{-{Ot0e^4vSk.{#6HVB=2~)B,08+]Q51rDg6/gw#d;&)7z<caJ38TlNW28-');
define('SECURE_AUTH_KEY',  'ux?VA ap^(7G7|UEj$ pq@X(h2W DWE;0s7Zd<K~veO$33LoKIn/R^~@5_$f;1=Y');
define('LOGGED_IN_KEY',    'QMg3zj|3=57iA!sF&MZK:,Ovl@5T+QgW=OcCtvFFWjXs6jXLo(U;g*S(w44^P^Rr');
define('NONCE_KEY',        'M*oa?H?2tDV=$|?=z#H}:J$PJ ?qzx?IgJ~#+Ndqs&S^RPY;5.?#x(y-LRC3Tt$0');
define('AUTH_SALT',        '1I,b#i>ek{5j&ZHQk+^r[}~YT~F@MEB,9uHE`a^BQP4?,3!n:VgH*_G$i-p]S4v0');
define('SECURE_AUTH_SALT', '&DN>Kzl${E60^ep+p;NyRUP,Y=IbMvdV,<n%nf.J,ATnV 1z(G|$V90-LfykDrTf');
define('LOGGED_IN_SALT',   '<9EbYk+J>9)?Xy=qaR-vleP!E!4MQbJOv7Qq.:XGYhDDyWq8}or&:epF.?P 9&gB');
define('NONCE_SALT',       'nLZ!,Lm:d[I|-~hquc68X>prDn23U<+A>Pj+c`1?kqa{|$C3,/F><UE6i4!g0joE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'myportfoliowp_';

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
