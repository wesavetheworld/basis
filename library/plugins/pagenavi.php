<?php

/*
* 
* Built in Page Navi w/out Plugin
* 
* This feature is meant to add page navi functionality w/out using
* a plugin. Original code by Eddie Machado for the Bones Theme Template
* 
*/

// page navigation
function page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
  
  // get an early post count
  $request        = $wp_query->request;
  $numposts       = $wp_query->found_posts;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	
	// bail early if we don't have enough posts
	if ($numposts <= $posts_per_page) { return; }
	
	// setup page variables
	$total_pages   = $wp_query->max_num_pages;
	$pages_to_show = 7;
	$start_page    = 1;
	$end_page      = $total_pages;
	$current_page  = intval(get_query_var('paged'));
	
	// if $current_page is empty or 0 then we're on the first page
	if(empty($current_page) || $current_page == 0) { $current_page = 1; }
  
  // open the div that holds all the navigation links
  echo $before.'<div class="basis-pagenavi clearfix">';
  
  // if we're on any page other than the first then display a link to the first page
  if ($current_page > 1) {
		echo '<a class="bpn-first" href="'.get_pagenum_link().'">First</a>';
	}
	
	// display a link to go back to the previous page (newer posts)
  previous_posts_link('&#171;');
  
  // if the total number of pages is more than $pages_to_show
  if ($total_pages > $pages_to_show) {
    
    // if the current page is less than $pages_to_show
    if ($current_page < $pages_to_show) {
      
      // display all pages up to $pages_to_show and an ellipsis
      for($i = $start_page; $i <= $pages_to_show; $i++) {
        if($i == $current_page)
          echo '<span class="bpn-current">'.$i.'</span>';
        else
          echo '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
      }
      
      // display ellipsis
      echo '<span class="bpn-ellipse">&#8230;</span>';
      
    } else if ($current_page >= $pages_to_show && $current_page <= ($total_pages - $pages_to_show)) {

      // display an ellipsis
      echo '<span class="bpn-ellipse">&#8230;</span>';
      
      // display all pages greater than $pages_to_show and less than $total_pages - $pages_to_show
      // preceeded and followed by only two pages
      for($i = ($current_page - 2); $i <= ($current_page + 2); $i++) {
        if($i == $current_page)
          echo '<span class="bpn-current">'.$i.'</span>';
        else
          echo '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
      }

      // display an ellipsis
      echo '<span class="bpn-ellipse">&#8230;</span>';
              
    } else if ($current_page > ($total_pages - $pages_to_show)) {
      
      // display an ellipsis
      echo '<span class="bpn-ellipse">&#8230;</span>';
      
      // display all pages greater than $total_pages - $pages_to_show
      for($i = $current_page; $i <= $end_page; $i++) {
        if($i == $current_page)
          echo '<span class="bpn-current">'.$i.'</span>';
        else
          echo '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
      }
      
    }
    
  } else {
    
    // if the total number of pages is NOT more than $pages_to_show then show all pages
    for($i = $start_page; $i <= $total_pages; $i++) {
      if($i == $current_page)
        echo '<span class="bpn-current">'.$i.'</span>';
      else
        echo '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
    }
    
  }
  		
	// display a link to go to the next page (older posts)
  next_posts_link('&#187;');
  
  // if we're on any page other than the last display a link to the last page
  if ($current_page < $total_pages) {
		echo '<a class="bpn-last" href="'.get_pagenum_link($total_pages).'">Last</a>';
	}
	
	// tell the user which page they're on out of all possible pages
	echo '<span class="bpn-page-count">Page '.$current_page.' of '.$total_pages.'</span>';
	
	// close the div that holds all the navigation links
	echo '</div> <!-- end .basis-pagenavi -->'.$after;
	
} // end page_navi()






?>