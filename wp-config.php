<?php

/**

 * The base configurations of the WordPress.

 *

 * This file has the following configurations: MySQL settings, Table Prefix,

 * Secret Keys, WordPress Language, and ABSPATH. You can find more information

 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing

 * wp-config.php} Codex page. You can get the MySQL settings from your web host.

 *

 * This file is used by the wp-config.php creation script during the

 * installation. You don't have to use the web site, you can just copy this file

 * to "wp-config.php" and fill in the values.

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'axqabqtw_wp1');



/** MySQL database username */

define('DB_USER', 'jeremy');



/** MySQL database password nothing*/

define('DB_PASSWORD', 'FYKTXVQv');



/** MySQL hostname */

define('DB_HOST', 'tunnel.pagodabox.com');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



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



define('FS_METHOD','direct');

define('AUTH_KEY',         'kqaB5MC8ihCENGvjTlcGrQ15xmxVWcqX2g2ap9tDSyKcp2z14EXyws7Z4hU99jW4');

define('SECURE_AUTH_KEY',  'vNEOuOuK0hCxEM8xpprNKzdCjerx3tN7c99uq5sEKTPkyPIvZ1vHYmsEqSvj7kRZ');

define('LOGGED_IN_KEY',    'YdzMJZ4wj6qBrA5vPGFLaFnHLX6OREDwwgU4YoRRSFYutp9wqS5EfppDAwiMV0eL');

define('NONCE_KEY',        'lZVWBDGuB7NQxpzCnJyvMFkmMSCPsUWOv72gvuuiSKieOewQHT61sEvS55sHrsVu');

define('AUTH_SALT',        'ES6Lkb3eLh97FUy4Od1m5XcLAKgpOLpr6jTzigne9uxQMd72Ycl4qYcLPRE86Bds');

define('SECURE_AUTH_SALT', 'JNnTNxlr5k8TjhCrgUIc7jbpctpBew56pBWJXF1XG0QoqGaimIMbtZQx6Wxllbgi');

define('LOGGED_IN_SALT',   'gH1Mv5gYpw6tK2tB9EUDZSdEG1DyysKZS6Eg5sBafJsaoBweEwlzyGCjuTecmiK8');

define('NONCE_SALT',       'ki4r7GBaPIyu2S1rewmxK6uhFFlw8DKjq1EZ3WOUsFtsiwShBT95Z6EJhEfphDX0');

define('WP_TEMP_DIR',      '/var/www/asdpr/wp-content/uploads');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each a unique

 * prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * WordPress Localized Language, defaults to English.

 *

 * Change this to localize WordPress. A corresponding MO file for the chosen

 * language must be installed to wp-content/languages. For example, install

 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German

 * language support.

 */

define('WPLANG', 'it_IT');



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 */

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');
