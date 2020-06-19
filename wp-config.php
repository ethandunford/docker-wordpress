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
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'FfRqImuJU(|^pX=JKTV0at0iKr5%^zm#-=1W@B!ut9orzDL2NrAu+**j?x2aOorY' );
define( 'SECURE_AUTH_KEY',  '1BF uKK(+77Zl,z:oM@TY0e0OYt&;afvPI(]]bzhR2 {a)0Wga^:1n1_0jU{G-LE' );
define( 'LOGGED_IN_KEY',    '2=C^4<1c2_PsU76nd^BZXH?)QcH/Z9*l[{a.s$(v`!7*>]tVoye^pf9M.)a6Xl&F' );
define( 'NONCE_KEY',        '$;al*83?k)]# @A,EJmc&cs5NBAu:wfyVlO6;SK jTtW=skP{OiEQADTJq&|ZU:u' );
define( 'AUTH_SALT',        'GOuL,|T-jm#Sedw?zm@aNlu.m65XN%!#gXiYAmuyKj-#^4.yI#[9E15vM1hkw3um' );
define( 'SECURE_AUTH_SALT', 'awtX2c9g0@+U;{^^V!1i$_{!;OU3G7r)cYi4PiI$G)~:6r5%v(Mg$MiyuOM9g[8;' );
define( 'LOGGED_IN_SALT',   'Z(T%;`hclbg_%od`L<0]CsM<0:YljCWZSx+hlrCIv|NeB.]E<9w:?V.7T#M:#MOI' );
define( 'NONCE_SALT',       'LNBw+ba]dpVXZPGBmE>9? w_ogpg[lfO:yf;s[b!b>0B0Qlap-9|tVeDm<(zf~%V' );

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