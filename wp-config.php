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
define('DB_NAME', 'bookmagazin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0V8*/{_@jGTH:}d^PfRoeI%R.IjUx; s{MuEW6FF%d7TgSFwBdK_6ns[Xxmr&xrB');
define('SECURE_AUTH_KEY',  ':{HVqazW!5h$o]Cl^`]uaN@KQiCUgxGfqvWYX^76;.ga0`}uz8Df nfCN/G>:r9O');
define('LOGGED_IN_KEY',    'eJ:(|LnHs^YO2*4I0ACC@3NhIf-5//81FdvdYMoG_mU~O=Kzxo%$._@o-lA@7o:!');
define('NONCE_KEY',        'wC.(eA,c[nFIML #R<N{RY|u dYAa|vMb@Bt?mZtUX_N$L`X/9s;b%:Q^jeLovS2');
define('AUTH_SALT',        'j&kUqC|d=?Wo@pq<LjCq:GEG?OWuh~2Er$ 4@yd4IL0Cktb?jN~NFi  rgvK*v+<');
define('SECURE_AUTH_SALT', 'AQk&[/z/t;c-N-Ic|3gMCBI(a^~FE5Xu~:Z9Dx##H-@iQoRm:yg=(G8F.:,$x!yP');
define('LOGGED_IN_SALT',   'Ck.k#KbYe9mqyoD>ObuaQC@8kdSfI6.H|F `b_jrzf9g0m@sxFy_tPGSucGuC?`L');
define('NONCE_SALT',       '^JU3V=nsghVNhtEJ*Mf+lDle{}U5FcvMqf0Kbaq_OvlW,?RJc2cZg<o.2rFRBb`b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
