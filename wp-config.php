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
define( 'DB_NAME', 'e6fcap3q3ye3_glassfabcanada' );

/** MySQL database username */
define( 'DB_USER', 'e6fcap3q3ye3_gfc' );

/** MySQL database password */
define( 'DB_PASSWORD', '***' );

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
define( 'AUTH_KEY',         'h/)PW}FG+U1*l$}h?tE>.#0*8WLSmm}H!OIB{w[$BsslVzK%g0_ksm9@9U{i<7x ' );
define( 'SECURE_AUTH_KEY',  'vw*K+2){tdIgnY@{Ff2?{~~d;$)>c xtuZn|CJeaYrMQy<*>MSarLdrEH7xS9y&S' );
define( 'LOGGED_IN_KEY',    'eLwI+{2.`f}b%@i05v^ZOU:]09t$1G.FN~$j/8|$>k/Yg(k.CWtWh%zM UI}uIyE' );
define( 'NONCE_KEY',        'MWkVf< (Q)^>Z9E|htFVA$M9y]hf);1|mP>+sV+NGdtdd;q&57B$.-f2AW%)^f&(' );
define( 'AUTH_SALT',        'O`Y]fk2}K2o|DC_[a;Sq*j&1$hmWwX~>!(c=~)Cg;r(_s|.|oHG}$M+f)7AFWBy3' );
define( 'SECURE_AUTH_SALT', '<-]7{u<FN7g9$!S|?2>cA;Sb=nMQ@?lvk1!v8+{__#~Udp^(f|Pn4REy!qGtym8S' );
define( 'LOGGED_IN_SALT',   '+xt98h D5~_MG.:WhS4r8ThEnwk,$TksJ@^pNLyD7H-R_3L+k?Wu>!tgo*@S5y_Y' );
define( 'NONCE_SALT',       '[t00(&<J6~:zcx~Vwj!*_VE>:m@R`gQ:+7R$w*BYN|xxf5>q2m~K{$$d*{6sLsz<' );

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
