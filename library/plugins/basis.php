<?php

/**
*
* This is the core Basis functions file. In here we will enable or disable the
* more "general" WordPress related features. A lot of this functionality comes
* from the excellent work of Chris Coyier and Jeff Starr at http://digwp.com
*
* 1.) Add theme support for RSS Feeds, Post Thumbnails & Post Formats
* 2.) Remove junk from the head section
* 3.) Remove version info from all pages and feeds
* 4.) Insert favicon link the head section
* 5.) Include jQuery from Google
* 6.) Enable threaded comments
* 7.) Insert category id in body_class() and post_class()
* 8.) Create custom search form
* 9.) Brand the text in the footer of all admin pages
*
*/

// add feed links to the head section of every page
add_theme_support('automatic-feed-links');

// and enable post thumbnail support
add_theme_support('post-thumbnails');

// enable post format support
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

// remove the junk from the head section
function basis_remove_head_junk() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
}
add_action('init', 'basis_remove_head_junk');

// remove all version info from head and feeds
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

// insert favicon link in the head section
function basis_favicon() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="';
     echo bloginfo('stylesheet_directory');
    echo '/library/images/favicon.ico" />';
}
add_action('wp_head', 'basis_favicon');

// include jquery the smart way
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
}

// enable threaded comments (must come after jquery is loaded)
function enable_threaded_comments() {
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');

// insert category id in body_class() and post_class()
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

// create custom search form
function my_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
  <div><label type="hidden" class="screen-reader-text" for="s">' . __('Search for:') . '</label>
  <input type="text" value="' . get_search_query() . '" name="s" id="s" />
  <input type="submit" id="searchsubmit" class="button" value="'. esc_attr__('Search') .'" />
  </div>
  </form>';

  return $form;
}
add_filter( 'get_search_form', 'my_search_form' );

// brand the text in the footer of all admin pages
function  basis_admin_footer_text() {
	echo 'Theme designed by <a href="http://utadvisors.com">Universal Technology Advisors</a> using the Basis Theme Framework';
} 
add_filter('admin_footer_text', 'basis_admin_footer_text');

?>