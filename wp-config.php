<?php
/**
 * Custom WP Config
 * @package WordPress
 * @subpackage Bolt 0.1.0
 */

/* 
 * Define the various Database environments and some base settings
 * Basically set these variables for your own setup
 * The only stuff you need to adjust are the lines BEFORE the "Don't change past this" Line
*/

$default_table_prefix = '446FGD353GasngjsGAj_';
$php_memory_limit = '24M';

$local_db_name = '';
$local_db_user = '';
$local_db_password = '';

$staging_db_name = '';
$staging_db_user = '';
$staging_db_password = '';
$staging_db_host = '';

$prod_db_name = '';
$prod_db_user = '';
$prod_db_password = '';
$prod_db_host = '';

$default_theme_name = '';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * Go here: https://api.wordpress.org/secret-key/1.1/salt
 * Copy/Paste what's on that page.
 *
 */

define('AUTH_KEY',         ',-=u{^=}f_F`LT~Uf3z+FH}VBXm5_Y+o6Cn|GL+$?,MF6+` .Lw>L-n]7iZ|NEXx');
define('SECURE_AUTH_KEY',  't3z|3>%q5zp-CqegJ<ffO:SIX-K+|oCX<8*/)t j#]xRpOtv-KPDo8rG|`%+!>q+');
define('LOGGED_IN_KEY',    'y|yIOS F;-OoNDrk&o!|=^]vp/w,r)C%HRWs>*F-+8qc_gUDv-k{?}1GUEF^CykG');
define('NONCE_KEY',        ']<LQL`+{[5&ye3-G_FM*a3Y{1]KR>+Q|wTuAwbsj@qVaf^~XY;h!lbJzc|6>{4R/');
define('AUTH_SALT',        'Yk~|A86*/urFm;|>lJbQMDL?^}`lwg:dDfW%Uae&z;- zUnU]:q|k|, oZXf2THW');
define('SECURE_AUTH_SALT', '(|]Nnl^7llQ3FcmO(I26=^H?H>j=sh q*(QE!0>Le5OVVbKRQ) HE;;j>KEulAJ3');
define('LOGGED_IN_SALT',   'z#|!E2CsUMVi^cIc/K*~%+eRy<6s^<;k*8!|!&W8fHCrU_Ik1!CM}kV)f^`7):M%');
define('NONCE_SALT',       'm8DPPs-,Q&Jjsb?2?hx2;Ik03O]69?4JG,#;mnm4<D-%C17?$)OpG9]XB|+;lA-w');

/*
 * -------------------------------------------------
 * 		NO NEED TO CHANGE ANYTHING BELOW HERE
 * -------------------------------------------------
*/


define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');

define('WP_MEMORY_LIMIT', $php_memory_limit);  // Let's up the PHP Memory limit to compensate for various Server Environments
define('WP_DEFAULT_THEME', $default_theme_name);

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
