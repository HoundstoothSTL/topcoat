<?php
/**
 * Custom WP Config
 * @package WordPress
 * @subpackage Topcoat 0.1.0
 */

/* 
 * Define the various Database environments and some base settings
 * Basically set these variables for your own setup
 * The only stuff you need to adjust are the lines BEFORE the "Don't change past this" Line
 *
 * We use a script to built out this template, if you don't want to do that, just replace everything
 * surrounded by {{}} - replace the curly braces as well
*/

$default_table_prefix = '{{tableprefix}}_';
$php_memory_limit = '32M';

$local_db_name = '{{projectname}}_dev';
$local_db_user = 'root';
$local_db_password = '{{localdbpass}}';

$staging_db_name = '{{projectname}}_staging';
$staging_db_user = '{{remoteuser}}';
$staging_db_password = '{{remotedbpass}}';
$staging_db_host = '{{remotehost}}';

$prod_db_name = '{{projectname}}_prod';
$prod_db_user = '{{remotedbuser}}';
$prod_db_password = '{{remotedbpass}}';
$prod_db_host = '{{remotehost}}';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * Go here: https://api.wordpress.org/secret-key/1.1/salt
 * Copy/Paste what's on that page.
 *
 * We use a script to built out this template, if you don't want to do that, just replace everything
 * surrounded by {{}} - replace the curly braces as well
 */

{{generatedsalt}}

/*
 * -------------------------------------------------
 * 		NO NEED TO CHANGE ANYTHING BELOW HERE
 * -------------------------------------------------
*/


define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);

define('WP_MEMORY_LIMIT', $php_memory_limit);  // Let's up the PHP Memory limit to compensate for various Server Environments

// Be sure to drop an empty 'env_local' file in the root of your project
if ( file_exists( dirname( __FILE__ ) . '/../env_local' ) ) {

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', false);

    define('DB_NAME', $local_db_name);
    define('DB_USER', $local_db_user);
    define('DB_PASSWORD', $local_db_password);
    define('DB_HOST', 'localhost');

// Be sure to drop an empty 'env_staging' file in the root of your project
} elseif ( file_exists( dirname( __FILE__ ) . '/../env_staging' ) ) {

	define('WP_ENV', 'staging');
    define('WP_DEBUG', false);
	
	//Production Environment
	define('DB_NAME', $staging_db_name);
	define('DB_USER', $staging_db_user);
	define('DB_PASSWORD', $staging_db_password);
	define('DB_HOST', $staging_db_host);
	
} else {

	define('WP_ENV', 'production');
    define('WP_DEBUG', false);
	
	//Production Environment
	define('DB_NAME', $prod_db_name);
	define('DB_USER', $prod_db_user);
	define('DB_PASSWORD', $prod_db_password);
	define('DB_HOST', $prod_db_host);
	
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $default_table_prefix;

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
