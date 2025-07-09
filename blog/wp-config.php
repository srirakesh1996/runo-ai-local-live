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
define('DB_NAME', 'blog');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'V!y2BR3j(`yYkZAy?`396qt/8-:Vb>@=;l*hm_W%G/C{;b,S1tiP*i9ie_%n1JQ}');
define('SECURE_AUTH_KEY',  '6D{Tbm_1?+2TIi6UWH&FO/U.3Mi}NHF?]nayH1asM<r`8X.L+<E6{wodYg{<._]r');
define('LOGGED_IN_KEY',    's(|ws]Kpu3bFsT@[T)C,p93~oJ7}G`6I-~Z@Oh!$SBs/(by1S^+%a>Y852!;DN{(');
define('NONCE_KEY',        ']bqgc]zxI>U?c@$*_,$0aT+ !0dqb`Xv{i >{35x<oh(8H_y5@V?]h/{Wu_q/&j@');
define('AUTH_SALT',        'O~$7_RQsPsx_r(%a@!$!{X{)LU:@b7)S7r,SUQ42I93iko[E@1 p5ahO)Z8kslhu');
define('SECURE_AUTH_SALT', 'I+.(_@(P=y/o0v|>u1+a,P|ktOP>hM&>%3(8UY[R`Sm(+$V-9Au*I{runkco;Jf!');
define('LOGGED_IN_SALT',   'a&byw<%JfS:rv:UbmIW2mL%$sO>NqG1F:${ U%zotPoMDxJni7v:So<gwuC18xBy');
define('NONCE_SALT',       'SJg^Qqr#<)*+o~Q%FxzZ8+Ptz06{;hI3y7:)pl0u@#>aq8*]v[GCt:vR6+vgym|h');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
