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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'voituromax' );

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
define( 'AUTH_KEY',         'Ke<I0Ov}Yty-&64R/_NPBe|?n2GJYiY}F}|;jnhf8~Af{8-)-taE7.=`mA._4.v{' );
define( 'SECURE_AUTH_KEY',  'x[7,L/B?{ip%?x3cotVStTOq@`#CBT5SOl2TawO2?%V58D1OD:g?e_d(mYrr==oR' );
define( 'LOGGED_IN_KEY',    'HoC=dOIz@OY}6|m[DUQ4wGyO[&f}wQyZTCba;R}kD|2jp%88b<[:yG}zURq1|h.m' );
define( 'NONCE_KEY',        'b#HHq<@x^N5[m[[N+AK33^#(0e;td};w9Vv)a@_SD=q9QG|-HBJZkZUQN:!CfE<H' );
define( 'AUTH_SALT',        'H5bW4z.MNT9t)SIyL#*j`1W.S92FVQxjvq5uJtT0GIrp0v(SOZGYe>r?;Ntb:RH}' );
define( 'SECURE_AUTH_SALT', '/?ujTP??Ic8}x1 mOeue`3MHm(0jy|ZG]D]x(an ^GTKj3b<RQ;}$yF&as@}?IR+' );
define( 'LOGGED_IN_SALT',   ':m_DUU3DR!<Pr$91HO9S;~&x%|M77X<kK$/dR/WP)KqMRe.?1/({j2D] -CZ~$,4' );
define( 'NONCE_SALT',       'nb4NCp/j0=F5zm*ppIrJszKf(Yma#>#F===%2$-Zcjl=mW)-lQjNiHSau(rryz3b' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
