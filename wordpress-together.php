<?php
/*
* Plugin Name: WordPress Together
* Version: 0.1.0
* Plugin URI: https://github.com/Neutron-Creative/WordPress-Together
* Description: Easily integrate Mozilla's TogetherJS collaboration system into a Wordpress site.
* Author: Neutron Creative Inc.
* Author URI: https://github.com/Neutron-Creative
* Requires at least: 4.0.0
* Tested up to: 5.5.0
*
* @package WordPress
* @author Neutron Creative Inc.
* @since 1.0.0
*/

function add_wpt_button($admin_bar) {
    $admin_bar->add_menu( array( 'id'=>'start-collab','title'=>'Begin collaboration','href'=>'#' ) );
}

function include_wpt_dependencies() {
    wp_enqueue_style("wpt-styles", plugins_url("assets/wpt-styles.css", __FILE__ ));
    wp_enqueue_script("wpt-scripts", plugins_url("assets/wpt-scripts.js", __FILE__ ), array("jquery"));
    wp_enqueue_script("togetherjs-script", plugins_url("assets/togetherjs-min.js", __FILE__ ));
}

add_action("admin_bar_menu", "add_wpt_button", 999);
add_action("wp_enqueue_scripts", "include_wpt_dependencies");
add_action("admin_enqueue_scripts", "include_wpt_dependencies");
add_action("login_enqueue_scripts", "include_wpt_dependencies");

?>