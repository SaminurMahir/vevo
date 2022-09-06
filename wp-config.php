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
define( 'DB_NAME', 'Vevo' );

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
define( 'AUTH_KEY',         'V^`m?GR^j1K)uncW`SN>85GgV=j4x$3QzPLt7#B8skCIDdr9cc|k$<gHOr4v3{T=' );
define( 'SECURE_AUTH_KEY',  'y)yT4nCg2(~GTLP]v<2#+TrW,gP$T 78.WEWK&*5aklc^;=I_]+,z*MD{_CDJkW<' );
define( 'LOGGED_IN_KEY',    '&+4$s[=wRZyh!/$wcG[]6R!GTfyw:`gYUKP)XJ)Nvz4>w3v}{N8RQ.nd5w/?:0+U' );
define( 'NONCE_KEY',        'E%kOwjLb3Y;Y;0>b #sKQ%V+H ^GC$MabOF :x8SPeYUD/$Y;.!Cag],;At.&P;X' );
define( 'AUTH_SALT',        'Dpz@B@})P`a$$U1PYkccm%a`-}=dGi(Osz|N[b#V$%y-W@.Hc{1vzf)?2_F$nOGF' );
define( 'SECURE_AUTH_SALT', 'x8F9EcYg,Xj_Tdh@W%cgP*3~Z=b7vs<7W(bO$.]R/GY)/bwE@e~._[i$^LVSDz)<' );
define( 'LOGGED_IN_SALT',   '2aVu&DcK*/dkTo_ix_Seu%O`SS;#@O gI).Jr:H0Gm .&.pA>X$,Q?UL#I()/CHj' );
define( 'NONCE_SALT',       'Vt!fxuX]O#evu,N%4aR$KjY~/Oy1%XCwPBq-Mu{%=$>y1YL/(x)LDPgx7-TenN]1' );

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
