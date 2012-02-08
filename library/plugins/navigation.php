<?php

/**
*
* This file declares all the functions necessary to get our menus, sidebars
* and footer widget areas. All three of the functions that setup the menus,
* sidebars and widget areas are attached to hooks so they can be removed in
* a child theme if necessary.
*
*  MENUS:
*  remove in child theme using remove_action('init', 'basis_menus');
*  1.) A custom function to setup 2 menus
*  2.) A custom function to display the primary menu in a theme template
*  3.) A custom function to display the secondary menu in a theme template
*  4.) Create the basis primary menu fallback
*
*  SIDEBARS:
*  remove in child theme using remove_action('widgets_init', 'basis_sidebars');
*  1.) A custom function to setup 2 sidebars
*
*  FOOTER WIDGETS:
*  remove in child theme using remove_action('widgets_init', 'basis_footer_widgets');
*  1.) A custom function to setup 3 footer widget areas
*
*/

/* Setup the Basis Menus
*******************************************************************************/

// Call register_nav_menus from a custom function so it can be removed by a
// child theme if it wants to declare it's own custom menus.
function basis_menus() {
  if ( function_exists('register_nav_menus') ) {
  	register_nav_menus(array(
  		'primary_menu'   => __('Primary Menu'),
  		'secondary_menu' => __('Secondary Menu')));
  }
}
add_action('init', 'basis_menus');

// Create a custom function to call the primary menu in a theme template
function basis_primary_menu() {
  if ( function_exists('wp_nav_menu') ) {
    // call the WP3.0 menu
    wp_nav_menu(array(
      'theme_location'  => 'primary_menu',
      'container_id'    => 'primary-menu',
      'container_class' => 'menu',
      'menu_class'      => 'clearfix',
      'fallback_cb'     => 'basis_menu_fallback'));
  } else {
    // fallback if not supported
    basis_menu_fallback();
  }
}

// Create a custom function to call the secondary menu in a theme template
function basis_secondary_menu() {
  if ( function_exists('wp_nav_menu') ) {
    wp_nav_menu(array(
      'theme_location'  => 'secondary_menu',
      'container_id'    => 'secondary-menu',
      'container_class' => 'menu',
      'menu_class'      => 'clearfix',
      'fallback_cb'     => 'basis_menu_fallback'));
  } else {
    // fallback if not supported
    basis_menu_fallback();
  }
}

// Create the basis menu fallback
function basis_menu_fallback() {
  wp_page_menu('show_home=1&menu_class=menu');
}


/* Setup the Basis Sidebars
*******************************************************************************/

// Create the primary and secondary sidebars
function basis_sidebars() {
  if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
    	'name'          => __('Primary Sidebar'),
      'id'            => "primary-sidebar",
      'before_widget' => '<li id="%1$s" class="sidebar-widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="sidebar-widgettitle">',
      'after_title'   => '</h4>'));
      
    register_sidebar(array(
    	'name'          => __('Secondary Sidebar'),
      'id'            => "secondary-sidebar",
      'before_widget' => '<li id="%1$s" class="sidebar-widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="sidebar-widgettitle">',
      'after_title'   => '</h4>'));
  }
}
add_action('widgets_init', 'basis_sidebars');


/* Setup the Basis Footer Widgets
*******************************************************************************/

// Create 3 footer widget areas
function basis_footer_widgets() {
  if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
    	'name'          => __('Footer Widget 1'),
      'id'            => "footer-widget-1",
      'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="footer-widgettitle">',
      'after_title'   => '</h4>'));
      
    register_sidebar(array(
    	'name'          => __('Footer Widget 2'),
      'id'            => "footer-widget-2",
      'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="footer-widgettitle">',
      'after_title'   => '</h4>'));
      
    register_sidebar(array(
    	'name'          => __('Footer Widget 3'),
      'id'            => "footer-widget-3",
      'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="footer-widgettitle">',
      'after_title'   => '</h4>'));
  }
}
add_action('widgets_init', 'basis_footer_widgets');


?>
