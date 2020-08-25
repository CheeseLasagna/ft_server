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
define( 'DB_NAME', 'tlavelle_database' );

/** MySQL database username */
define( 'DB_USER', 'tlavelle' );

/** MySQL database password */
define( 'DB_PASSWORD', 'school21' );

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
define('AUTH_KEY',         'vhBfld+)Hnt59#$rBT,n^{-_Da7>{X,x=PH%R=,5fh:T/w(`.Ko7=TOw6Yo;+i`O');
define('SECURE_AUTH_KEY',  'Yh-:Q>Win$b@05dlq!YN-Q%J Z,+3TN]cncPONuc-+|R9D$]r+^,KX`r|:Y+>-zg');
define('LOGGED_IN_KEY',    ' + xXE{,q&%Cg9cfWH;9-zp$LMoX?W/1l;wS{8sYnF8#4u<Um,`$qq)BH.sT8^W&');
define('NONCE_KEY',        'u;%lua*k!~>2X/%0$$A8_k(jIrk`Y#^mIp+K`8kff0%~=Go|C/EblI+tL!ohtkS@');
define('AUTH_SALT',        '&..]~c`Ye!J[m4T2q+RyR;[Q5W|@z5N:~1W+RCr,]@kHkCL2emw(D+]g `$TB*b+');
define('SECURE_AUTH_SALT', '&b3)vjOdm]hrl7LcLd+;=2#`GVY[w#V~2iDjoj%#{KO|!)3j{-.&6Et)P+Xxu<33');
define('LOGGED_IN_SALT',   'fDTw9+-9^XjSYO,AH9+BL@6K^ X21!E]P2QaQLfVUD-5`K.QR9M,^=/T4zDa)~Sj');
define('NONCE_SALT',       'rMv@uIQ$-6eZU-)d^,.+pf+;f[gHY<Lc&d09%k,T_# Xt=&G~EDQ012d-Iv4nJ77');

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
