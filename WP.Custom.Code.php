<?php

/**
 * @package WP.Custom.Code
 * @version 1.0
 */

/**
 * Plugin Name: WordPress Custom Code
 * Plugin URI: http://zenkilies.com/project/wordpress-custom-code
 * Description: A small Wordpress Plugin for adding custom HTML/CSS/JS scripts into the header/footer of all posts/pages. Notice: It's required an installation of Titan Framework to be operated.
 * Author: Zenkilies Vildcent
 * Version: 1.0
 * Author URI: http://zenkilies.com
*/

// Define path to plugin's folder
$tmpPath = plugin_dir_path( __FILE__ ) . "_inc/";

// Include plugin's files
include_once( $tmpPath . "inc_bootstrap.php" );
include_once( $tmpPath . "inc_options.php" );
include_once( $tmpPath . "inc_metaboxes.php" );
include_once( $tmpPath . "inc_actions.php" );
