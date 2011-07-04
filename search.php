<?php

/**
*
* The is the default page template for displaying search results
*
*/

get_header(); ?>
			
<div id="content" class="clearfix">

	<div id="main" role="main">
	
		<h3 class="archive_title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h3>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<header class="clearfix">
					<h2>
					  <?php edit_post_link('✍','',' '); ?>
					  <a href="<?php the_permalink() ?>"
					     rel="bookmark"
					     title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
					<p class="meta">
            Posted <time><?php basis_fuzzy_time(); ?></time>
            by <?php the_author_posts_link(); ?>
            categorized: <?php the_category(', '); ?>
            containing: <?php word_count(); ?> words
          </p>
				</header> <!-- end article header -->
		
				<section class="post_content">
					<?php the_excerpt('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
				</section> <!-- end article section -->
			
				<footer>
          <?php if (has_tag()) : ?>
            <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
          <?php else : ?>
            <p class="tags">Tags: [this post has not been tagged]</p>
          <?php endif; ?>
        </footer> <!-- end article footer -->
		
			</article> <!-- end article -->
		
		<?php endwhile; ?>	
		
		<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
			
			<?php page_navi(); // use the page navi function ?>
			
		<?php } else { // if it is disabled, display regular wp prev & next links ?>
		  
			<nav class="wp-prev-next clearfix">
				<ul>
					<li class="prev-link"><?php next_posts_link('&laquo; Older Entries') ?></li>
					<li class="next-link"><?php previous_posts_link('Newer Entries &raquo;') ?></li>
				</ul>
			</nav>
			
		<?php } ?>			
		
		<?php else : ?>
		
		<!-- this area shows up if there are no results -->
		
		<article id="post-not-found">
		  
	    <header>
	    	<h2>No Results Found</h2>
	    </header>
	    
	    <section class="post_content">
	    	<p>Sorry, but the requested resource was not found on this site.</p>
	    </section>
	    
	    <footer>
	    </footer>
		    
		</article>
		
		<?php endif; ?>

	</div> <!-- end #main -->
		
	<?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<?php get_footer(); ?>