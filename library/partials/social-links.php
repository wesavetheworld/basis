<?php if (is_home() || is_page()) { ?>
  <ul>
  	<!--<li>
  		<a rel="nofollow" href="http://twitter.com/human_shell" title="Follow Me">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/twitter.png" alt="Twitter" />
  		</a>
  	</li>-->
  	<li>
  		<a rel="nofollow" href="http://www.stumbleupon.com/submit?url=<?php bloginfo('url'); ?>&title=<?php wp_title(); ?>" title="StumbleUpon">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/stumbleupon.png" alt="StumbleUpon" />
  		</a>
  	</li>
  	<li>
  		<a rel="nofollow" href="http://digg.com/submit?phase=2&url=<?php bloginfo('url'); ?>&title=<?php wp_title(); ?>&bodytext=" title="Digg">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/digg.png" alt="Digg" />
  		</a>
  	</li>
  	<li>
  		<a rel="nofollow" href="http://www.facebook.com/share.php?u=<?php bloginfo('url'); ?>&t=<?php wp_title(); ?>" title="Facebook">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/facebook.png" alt="Facebook" />
  		</a>
  	</li>
  	<li>
  		<a rel="nofollow" href="http://reddit.com/submit?url=<?php bloginfo('url'); ?>&title=<?php wp_title(); ?>" title="Reddit">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/reddit.png" alt="Reddit" />
  		</a>
  	</li>
  	<li>
  		<a rel="nofollow" href="http://delicious.com/post?url=<?php bloginfo('url'); ?>&title=<?php wp_title(); ?>&notes=" title="Delicious">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/delicious.png" alt="Delicious" />
  		</a>
  	</li>
  	<li>
  		<a rel="nofollow" href="http://humanshell.net/feed" title="Full Site RSS Feed">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/rss.png" alt="RSS" />
  		</a>
  	</li>
  </ul>

<?php } else { ?>

	<ul>
		<li>
			<a rel="nofollow" href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/twitter.png" alt="Twitter" />
			</a>
		</li>
		<li>
			<a rel="nofollow" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" title="StumbleUpon">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/stumbleupon.png" alt="StumbleUpon" />
			</a>
		</li>
		<li>
			<a rel="nofollow" href="http://digg.com/submit?phase=2&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&bodytext=<?php the_excerpt(); ?>" title="Digg">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/digg.png" alt="Digg" />
			</a>
		</li>
		<li>
			<a rel="nofollow" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" title="Facebook">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/facebook.png" alt="Facebook" />
			</a>
		</li>
		<li>
			<a rel="nofollow" href="http://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" title="Reddit">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/reddit.png" alt="Reddit" />
			</a>
		</li>
		<li>
			<a rel="nofollow" href="http://delicious.com/post?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&notes=<?php the_excerpt(); ?>" title="Delicious">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/delicious.png" alt="Delicious" />
			</a>
		</li>
		<li>
			<a rel="nofollow" href="http://humanshell.net/feed" title="Full Site RSS Feed">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/social/rss.png" alt="RSS" />
			</a>
		</li>
	</ul>

<?php } ?>
    