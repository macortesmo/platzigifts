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
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'tIJ4-8}|&#$1((bJWQ}z}-8)kDpb7s+}Q+2woP{H$aKE8-~Jh#q|Q_~Kc7kkYO9`');
define('SECURE_AUTH_KEY',  'vTTBVr-sV o<Zp1G>D*duG[0N ^a1Ri!)-g<28]6Qi-7<[w>ad|e5=_CRVuxJY0Y');
define('LOGGED_IN_KEY',    'EXSO}bXO*tly_E6@M1XZ7c}==oe2RDjv!C]ZFZ=@{~P#w<|RuI&fG_KwWGbKaS(g');
define('NONCE_KEY',        '{NTscLf n)z->`lT&.7p5/<#v(HT$nKfuRLAJCTobvKfHjldP+2h6ns<+rAO=6c%');
define('AUTH_SALT',        'CAs;OYSC4),*q+3W 61*q09}Mx6xZ7wF1},Jh3*Tf2YvaehK;B~miA/v},$dF3~V');
define('SECURE_AUTH_SALT', 'bovs,m5MUG(>>^i}@ba/^UV;5_;zYqh%d2.+(OILy*4x?5-]w%V8:-Dw`t/mTGve');
define('LOGGED_IN_SALT',   '2:9a#.4EOlnG0_ xYC|@ECF|ri|fa`u.$AvvIP7OlIr;]{=ctxq#b4u3f?Tq,[[P');
define('NONCE_SALT',       '4{Y1/+r+z`ta;<.Agcp2P%y_8pEy3)?LcM @F.Ay<o,(PK^7(97D./=t:~6|^wO]');

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
