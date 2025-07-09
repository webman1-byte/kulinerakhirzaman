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
define( 'DB_NAME', 'wpkaz' );

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
define( 'AUTH_KEY',         'GgxnF(tIARBz#{7`FUKkN YVE& OD:lm[2wGJPTpb92.mq.&%<bY*6DrIt)~6>:Y' );
define( 'SECURE_AUTH_KEY',  'NBBK<U+Y(%fl#G^}NXaByw|wbgm-AOvup30V 2nCQQ?Z6hS/^/l3,BY$4M79nKa0' );
define( 'LOGGED_IN_KEY',    'oo9>{5Q0(og4wCf aeG}wwymI^5s[+{d5M[3}Yknj1^ml%%V9p4qJJ@7gyQ>g 5U' );
define( 'NONCE_KEY',        '/5vsnYmBT+tHQP1X)kvA?Aoy{`~eu^J>rs1-;~Jzb(QSH)mG-|S:%nH- 9zqKtF2' );
define( 'AUTH_SALT',        'LQkE_ckZ6v7Z,{!UZJ]o<bM5&W{iA|fgR%n@_$REIKuT/@?xZ41-i/Swu>jd06ba' );
define( 'SECURE_AUTH_SALT', 'xrr9Yn@5(;y#xuXQ7ecJ4Irh!=],c^~!*XFL<kMm~:fV{7t/a^rn7K.K[9j|{(C=' );
define( 'LOGGED_IN_SALT',   '|x!A.S=:O(Z=U(Qv;+V5n!KUzLp3k=~daCFZu4bUyN406^Fxx og*01Z&_8kDo!@' );
define( 'NONCE_SALT',       'oF~X>DJ*^i7 66f1WW=S:6vn5Z:by;shmo@EN )Oruc*[L7|>|jeN}tk^B2F_@-{' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
