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
$staging_db_host = 'localhost';

$prod_db_name = '{{projectname}}_prod';
$prod_db_user = '{{remoteuser}}';
$prod_db_password = '{{remotedbpass}}';
$prod_db_host = 'localhost';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * Go here: https://api.wordpress.org/secret-key/1.1/salt
 * Copy/Paste what's on that page.
 *
 */

define('AUTH_KEY',         'O}Tj?8X(mO|-9XJ<(d.)MY3az/aK *HFaJaXD7>;-;qC+&-@sF%< buO|vYKypl~');
define('SECURE_AUTH_KEY',  'Rog^yiSC<uzvTij6yy;Pt2hVD-}@nH+zvaZX$+GD];2e:Xg2ooWU8DsV~--ucS7l');
define('LOGGED_IN_KEY',    '$2tF.-N{YLRGzUogty[BL!LB]4falmGlu4|tee7X:[k?-G+<@9Ov7FyQx?`Q+`<t');
define('NONCE_KEY',        '(XbcqD+CH,<X3-9k[vZ?8)B+pk++Lkon0J%$)|TE|T&YaoET(q?I9?Vs}W}xGqOj');
define('AUTH_SALT',        'yYCyZ3ZD>4_2K~]rWTJ:P>}=cTO{4pXswGOo/w||s-)2bjW&7)Er2BL>: {;|1UL');
define('SECURE_AUTH_SALT', '8Aa+0pR6(}8IeN$fBae2~[,M8-?J8q#)If%v|u-zVhiEvxcJ0[7|k]*%-t3k)PBB');
define('LOGGED_IN_SALT',   '79tmof+/i:M!Z+8WC~P,/)t-& a@]j1a6+g_(9euF=x+dQ)5gX` )%B~5*0*M.s|');
define('NONCE_SALT',       'e5zhfXg|oAgr?,&}*ve<9KTj]r|8Fq#ip:-azbo+UnE`=PHB9f9=#&<3NlZEAeH9');

/*
 * -------------------------------------------------
 * 		NO NEED TO CHANGE ANYTHING BELOW HERE
 * -------------------------------------------------
*/


define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/site');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);

define('WP_MEMORY_LIMIT', $php_memory_limit);  // Let's up the PHP Memory limit to compensate for various Server Environments

// Be sure to drop an empty 'env_local' file in the root of your project
if ( file_exists( dirname( __FILE__ ) . '/../env_local' ) ) {

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);
    define('CONCATENATE_SCRIPTS', false);
    define('SAVEQUERIES', true);
    define('EMPTY_TRASH_DAYS', 0);

    define('DB_NAME', $local_db_name);
    define('DB_USER', $local_db_user);
    define('DB_PASSWORD', $local_db_password);
    define('DB_HOST', 'localhost');

// Be sure to drop an empty 'env_staging' file in the root of your project
} elseif ( file_exists( dirname( __FILE__ ) . '/../env_staging' ) ) {

	define('WP_ENV', 'staging');
    define('WP_DEBUG', true);
	
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

$table_prefix  = $default_table_prefix;

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
