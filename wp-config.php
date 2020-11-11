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
define( 'DB_NAME', 'invisibleink' );

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
define( 'AUTH_KEY',         'P}v<(c:H3V6V1wS#P;<BjJodB?CD3GlhfO?4Lz2x:v,oDYQL:Ykg/cB36Y(tm.Ob' );
define( 'SECURE_AUTH_KEY',  '=5yVG3sZi.}L]r}Q=vGXQhA[{$O=86$Xl5=f)*)35k:JYDcN4]lAIbGE7&1L;f_3' );
define( 'LOGGED_IN_KEY',    'L& gs cfFyK3Q^1y!i(k/*R(v7T,El,8G`|PbTd Z(51#}ELh$zt8L>sU6OvqSa/' );
define( 'NONCE_KEY',        ';kiSEtc?bP,7NL +*lg5$=bd=$5ZL.4Wo[4#|kp8Fxb+(~RE|<tW(FdifeAV%jD{' );
define( 'AUTH_SALT',        'jNFzHk><I&O>ebgFxULSX2D-)d+3[D`6PEG./m.8#NGBws]A|Y?k6,X?3${]zd8+' );
define( 'SECURE_AUTH_SALT', '%o|v4{?Z;?E#Fkq4*1/4| $~rEkAz|qf=*P=<g7HS}(q)r]=iVH-2SIS1t#fKTEm' );
define( 'LOGGED_IN_SALT',   'J|Ov$i]/Lh%zWdAR:+K?#,)}?4i0M`[,T)~x2sKU{K19:Z)kK6qb6KxPxA5}nZE=' );
define( 'NONCE_SALT',       'KqPqm@^}0HF-.L|,81Hu2odE+c%Vr,6g<Kg~Y+sJ<YZ?R$O4b1_2.W:|jMj/reOF' );

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
