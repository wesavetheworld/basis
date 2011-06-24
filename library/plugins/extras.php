<?php

/**
*
* This file declares fun functions for extra functionality in the Basis Theme.
*
*/

// get the first category id (call using get_first_category_ID();)
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

// add a link to share a post on twitter (call using tweet_this();)
function tweet_it() {
  echo '<a rel="nofollow"
        href="http://twitter.com/home?status=<?php echo urlencode("Currently reading: "); ?><?php the_permalink(); ?>"
        title="Share this article with your Twitter followers">Tweet It!</a>';
}

// count words in posts (call using word_count();)
function word_count() {
	global $post;
	echo str_word_count($post->post_content);
}

// spam & delete links for all versions of wordpress (call using delete_comment_link(get_comment_ID());)
function delete_comment_link($id) {
	if (current_user_can('edit_post')) {
		echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&c='.$id.'" title="Delete Comment">Del</a> ';
		echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&dt=spam&c='.$id.'" title="Mark As Spam">Spam</a>';
	}
}

// Related Posts Function (call using basis_related_posts();)
// original code by Eddie Machado for the Bones Theme Template
function basis_related_posts() {
	echo '<ul id="bones-related-posts">';
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if($tags) {
    	foreach($tags as $tag) { $tag_arr .= $tag->slug . ','; }
      	$args = array(
        	'tag' => $tag_arr,
        	'numberposts' => 5,
        	'post__not_in' => array($post->ID)
     		);
       	$related_posts = get_posts($args);
       		if($related_posts) {
       			foreach ($related_posts as $post) : setup_postdata($post); ?>
       		<li class="related_post">
       		  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
       		</li>
     <?php endforeach; } else { ?>
            <li class="no_related_post">No Related Posts Yet!</li>
     <?php   }
	}
	wp_reset_query();
	echo '</ul>';
}

// facebook share correct image fix (thanks to yoast)
// original code by Eddie Machado and Joost de Valk for the Bones Theme Template
function basis_facebook_connect() {
	if (is_singular()) {
	  global $post;
	  if ( current_theme_supports('post-thumbnails') 
	      && has_post_thumbnail( $post->ID ) ) {
	    $thumbnail = wp_get_attachment_image_src( 
	      get_post_thumbnail_id( $post->ID ), 'thumbnail', false);
	    echo '<meta property="og:image" content="'.$thumbnail[0].'" />';	
	  }
	  echo '<meta property="og:title" 
	    content="'.get_the_title().'" />';
	  if ( get_the_excerpt() != '' )
	    echo '<meta property="og:description" content="'.strip_tags( get_the_excerpt() ).'" />';
	}
}
add_action('wp_head', 'basis_facebook_connect');

?>