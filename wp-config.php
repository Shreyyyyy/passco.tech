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
define( 'DB_NAME', 'passco' );

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
define( 'AUTH_KEY',         '}J&/:wP~?Xa^$]t,l)KXhch)oQe_S&8}5y&}t2[cw@8_cW:+[M$%_[F..I[{@gS`' );
define( 'SECURE_AUTH_KEY',  'W]BxT]7k(<H<M>T:L>hKT[?K7<Cs.}7Y:_%Y=n%,x,M+#A~eLItQVm>=A-UE4Gy5' );
define( 'LOGGED_IN_KEY',    '=m`V+1Anb1;i-GQz;gW[z0m!SIURR95(sv_VcMvH9F2u%Dq)+v~(~+PJw;6Sf|L}' );
define( 'NONCE_KEY',        'f`HV[7_e0p!`=Kq+i<9H=UU@=%f{xe$_F4(-(AWJ<ECSPh4K!C~z}WJ]ed*TKd_$' );
define( 'AUTH_SALT',        '<cL|UTJ=_:@ig=Q`Q0mb2Dw_9R;3oy&[O 5QzbQQ+?1PRL/dLEsTsHtC=3[aV}Dc' );
define( 'SECURE_AUTH_SALT', 'n,i%CFH0aYI*Ai9NAQaYPgy .p^bI7.!(^HmIIfs}hmRqHzb<5+?s#*[s}W)[t&F' );
define( 'LOGGED_IN_SALT',   'w{#r&.!4zEP@;P/0WW(YQr+}rR^< /Lq4.gu{lL501j!ny<X(ueDU-fx&xp/*(X*' );
define( 'NONCE_SALT',       '*{`YnX6-)HMdJgOE4D>D4R;9aAWY[J/Mh%AgbveAo9(wD`H7|7vp/sIy`PrUl*_n' );

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
