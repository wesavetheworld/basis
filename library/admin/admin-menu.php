<?php 
/**
 *
 * Basis Theme Framework Administration Menu
 *
 * This file creates the administration page in the backend of WordPress
 * for enabling and disabling the various features of the Basis Theme
 * 
 * A lot of the inspiration for this admin page comes from Aaron T. Grogg's Boilerplate: Starker's Theme admin page
 * http://aarontgrogg.com/boilerplate/
 *
 */

// create the menu
function basis_admin_menu(){
  add_submenu_page('themes.php', 'Basis Theme Options', 'Basis', 'administrator', 'basis-admin', 'build_basis_admin_page');
  add_action('admin_head', 'basis_admin_styles');
  add_action('admin_init', 'register_basis_settings');
}
add_action('admin_menu', 'basis_admin_menu');


// function to include custom admin stylesheet
function basis_admin_styles() {
	echo '<link rel="stylesheet" href="'.get_template_directory_uri() . '/library/admin/admin-page.css" />'.PHP_EOL;
}


// function to register the theme options
function register_basis_settings(){
  register_setting( 'basis-admin-options', 'basis_modernizer' );
}


// this function handles the building of the page in the WordPress dashboard
function build_basis_admin_page(){
  include('admin-page.php');
}

?>