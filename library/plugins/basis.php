<?php

/**
*
* This is the core Basis functions file. This is where we enable or disable the
* more "general" WordPress related features. A lot of this functionality comes
* from the excellent work of Chris Coyier and Jeff Starr at http://digwp.com
*
*/


/**
 *
 * Include specific theme functionality
 *
 * post thumbnails
 * feed links to the head section
 * post formats
 *
 */
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('post-formats', array('aside', 'quote', 'gallery'));


/**
 *
 * Remove automatically generated info for security
 *
 * detailed login error info
 * all version info
 * junk from the head section
 *
 */
add_filter('login_errors', create_function('$clear_login_errors', "return null;"));
add_filter('the_generator', create_function('$clear_the_generator', "return null;"));
add_action('init', 'remove_head_junk');
function remove_head_junk() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
}


/**
 *
 * basis_scripts() - Dynamically include JavaScript files
 *
 * Modernizr
 * Threaded Comments
 *
 */
add_action('template_redirect', 'basis_scripts');
function basis_scripts() {
	wp_register_script('modernizr', get_template_directory_uri().'/library/js/modernizr-2.0.4.js');
	wp_enqueue_script('modernizr');
	if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
		wp_enqueue_script('comment-reply');
}


/**
 *
 * basis_styles() - Dynamically include reset stylesheet in the head
 *
 * default style.css
 *
 */
add_action('wp_print_styles', 'basis_styles');
function basis_styles() {
  wp_register_style('basis-reset', get_template_directory_uri().'/library/css/reset.css');
  wp_enqueue_style('basis-reset');
}


/**
 *
 * Custom functionality and tweaks
 *
 * Insert favicon link in the head section
 * Insert category id in body_class() and post_class()
 * Create custom search form
 * Brand the text in the footer of all admin pages
 * Convert post time to fuzzy time
 *
 */
add_action('wp_head', 'basis_favicon');
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');
add_filter('get_search_form', 'basis_search_form');
add_filter('admin_footer_text', 'basis_admin_footer_text');
add_filter('Posts', 'wp_fuzzy_time');

function basis_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="';
  echo bloginfo('stylesheet_directory');
  echo '/library/images/favicon.ico" />';
}

function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}

function basis_search_form($form) {
  $form = '<form role="search" method="get" id="searchform" action="'.home_url('/').'">
  <div>
  <input type="text" value placeholder="Search me..." name="s" id="s" />
  </div>
  </form>';

  return $form;
}

function  basis_admin_footer_text() {
	echo 'Theme designed by <a href="http://utadvisors.com">Universal Technology Advisors</a> 
	      using the <a href="https://github.com/humanshell/Basis">Basis Theme Framework</a>';
}

function basis_fuzzy_time() {
	$postTime       = get_the_time("U");
  $currentTime    = time();
  $timeDifference = $currentTime - $postTime;
  $minInSecs      = 60;
  $hourInSecs     = 3600;
  $dayInSecs      = 86400;
  $monthInSecs    = $dayInSecs * 31;
  $yearInSecs     = $dayInSecs * 366;
    
	if ($timeDifference > ($yearInSecs * 3))       // if over 3 years
		$dateWithNiceTone = "quite a long time ago…";
	else if ($timeDifference > ($yearInSecs * 2))  // if over 2 years
		$dateWithNiceTone = "over two years ago";
	else if ($timeDifference > $yearInSecs)        // if over a year 
		$dateWithNiceTone = "over a year ago";
  else if ($timeDifference > ($dayInSecs * 355)) // if over 355 days ago
    $dateWithNiceTone = "around a year ago";
  else if ($timeDifference > ($monthInSecs * 9)) // if over 9 months
    $dateWithNiceTone = "almost a year ago";
  else if ($timeDifference > ($monthInSecs * 6)) // if over 6 months
    $dateWithNiceTone = "about half a year ago";
	else if ($timeDifference > $monthInSecs)       // if over a month	
	  $dateWithNiceTone = "more than a month ago";
  else if ($timeDifference > ($dayInSecs * 28))  // if over 28 days ago
	  $dateWithNiceTone = "around a month ago";
	else if ($timeDifference >= ($dayInSecs * 8))  // if equal to or more than 8 days ago
    $dateWithNiceTone = "in the last month";	    
  else if ($timeDifference >= ($dayInSecs * 5))  // if equal to or more than 5 days ago
	  $dateWithNiceTone = "around a week ago";        
  else if ($timeDifference >= ($dayInSecs * 3))  // if equal to or more than 3 days ago
	  $dateWithNiceTone = "a few days ago";
  else if ($timeDifference >= ($dayInSecs * 2))  // if equal to or more than 2 days ago
    $dateWithNiceTone = "a couple of days ago";   
	else if ($timeDifference > $hourInSecs)        // if more than an hour ago
		$dateWithNiceTone = "a few hours ago";
	else if ($timeDifference <= $hourInSecs)       // if less than or equal to an hour ago
		$dateWithNiceTone = "just now";
		
  echo $dateWithNiceTone;
}

?>