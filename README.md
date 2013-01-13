# Topcoat
## Our starting ground for building WordPress sites
We build quite a few WordPress websites and we decided to automate the process a bit.  Basically what we have here is a WordPress Core managed through a git submodule.  The "wp-content" folder and "wp-config.php" file have been broken out into the root directory and some adjustments have been made for the wp-core to look for these files and folders instead.

The wp-config.php has been heavily modified, adding variables in for different database environments as well as some suggestions and new CONSTANTS.  Take a look at it before you do anything else.

This build was made for us to use internally but feel free to fork or download at will.  

### Usage

    git clone https://github.com/HoundstoothSTL/topcoat.git
    
    git submodule update --init

Update wp-config.php in root folder, don't touch anything in /wp

#### Suggested and bundled Plugins
- WP Paginate : http://wordpress.org/extend/plugins/wp-paginate/
- Gravity Forms : http://www.gravityforms.com (premium plugin, not bundled)
- BackupBuddy : http://ithemes.com/purchase/backupbuddy (premium plugin, not bundled)
- Advanced Custom Fields : http://www.advancedcustomfields.com
- WordPress SEO by Yoast : http://wordpress.org/extend/plugins/wordpress-seo/
- W3 Total Cache : http://wordpress.org/extend/plugins/w3-total-cache/