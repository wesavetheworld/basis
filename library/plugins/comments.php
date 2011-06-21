<?php

/**
*
* This file contains the the callback function that gets executed in Basis's
* comments loop. It controls how the comments look across the site, globally.
*
*/

// Comment Layout
function basis_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time>
				  <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></a>
				</time>
				<?php edit_comment_link(__('Edit '),'  ','') | delete_comment_link(get_comment_ID()); ?>
			</header>

			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="help">
          			<p><?php _e('Your comment is awaiting moderation.') ?></p>
          		</div>
          		
			<?php endif; ?>
			
			<section class="comment_content">
				<?php comment_text() ?>
			</section>

			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
}

?>