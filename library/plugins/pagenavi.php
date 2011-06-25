<?php

/*
* 
* Built in Page Navi w/out Plugin
* 
* This feature is meant to add page navi functionality w/out using
* a plugin. It's currently in use but does contain a few bugs.
* 
* THIS FEATURE IS IN DEVELOPMENT BUT FUNCTIONAL
*
* Original code by Eddie Machado for the Bones Theme Template
* 
*/

// page navigation
function page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;

	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}

	echo $before.'<div class="basis-pagenavi clearfix">'."";
	if ($start_page >= 2 && $pages_to_show < $max_page) {
		$first_page_text = "First";
		echo '<a class="bpn-first-page-link" href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a>';
	}
	echo '<a class="bpn-prev-link">';
	previous_posts_link('&laquo;');
	echo '</a>';
	for($i = $start_page; $i<=$end_page; $i++) {
		if($i == $paged) {
			echo '<span class="bpn-current">'.$i.'</span>';
		} else {
			echo '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
		}
	}
	echo '<a class="bpn-next-link">';
	next_posts_link('&raquo;');
	echo '</a>';
	if ($end_page < $max_page) {
		$last_page_text = "Last";
		echo '<a class="bpn-last-page-link" href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a>';
	}
	echo '</div> <!-- end .basis-pagenavi -->'.$after."";
}

?>