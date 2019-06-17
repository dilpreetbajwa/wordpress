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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-@~(>hHbGyCP8=fkSx<e]H&#ITv%uC8trQ1V-;POV4D-H akNIWC{[`;,O{v_zS,' );
define( 'SECURE_AUTH_KEY',  'N#J&p:U:RWQuMKg1{M?>$ju(g_^Gm{MCS4S^7)w|BGDN1dH5]%[syo%u~|`,Hx}&' );
define( 'LOGGED_IN_KEY',    'I+viJ:s>Z%7([D#_z^1p?c_ 4e?.`e)#]|Wp#2d,[Y}|wc-3ByrY!XA6gN:)VWzK' );
define( 'NONCE_KEY',        'I~X(JYs0qUd04k9?D,2Y._4UDLv38!TuQ*RwBZMK9~L)`WvOG^BQC)74MbV^[BOF' );
define( 'AUTH_SALT',        'w6jelI`-Ig}SuLL~ij#!Xnb4R<rTBdtlxC.+= tvn yMh{yAA,I8A>(G}//n72$o' );
define( 'SECURE_AUTH_SALT', 'VmM1Vs8s;SO$C#2Va6&-if!l[SK<e:HcH> ;_div0]5_nA&qjDwt+DzlD<8nMr]*' );
define( 'LOGGED_IN_SALT',   '?8}UNs{6->z[OinrDi!Wylbc@Q:s&Z{(4U{~UmvSE2J_W,+ ?h<o31xB=y%03C7>' );
define( 'NONCE_SALT',       '3.KpWRDQa2Y~}Bqsae}1|8c^,fJZ ygHY~|bYeB[:~s*;y7}ITNvu3aErS&2,?/Z' );

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
