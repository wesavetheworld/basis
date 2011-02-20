<?php

/**
*
* This is the default page template for displaying single posts
*
*/

get_header(); ?>
			
	<div id="content" class="clear">
	
		<div id="main" class="col620 clear" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
  			<article id="post-<?php the_ID(); ?>" <?php post_class('clear'); ?>>
				
  				<header>
  					<h2><?php the_title(); ?></h2>
  					<p class="meta">
  					  Posted <time><?php the_time('F jS, Y'); ?></time> by <?php the_author(); ?> <span class="amp">&</span> filed under <?php the_category(', '); ?>.
  					</p>
  					<?php // If this post has an associated thumbnail lets display it
              if ( has_post_thumbnail() ) { the_post_thumbnail(); }
            ?>
  				</header> <!-- end article header -->
			
  				<section class="post_content clear">
  					<?php the_content(); ?>
  				</section> <!-- end article section -->
				
  				<footer>
  					<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
  				</footer> <!-- end article footer -->
			
  			</article> <!-- end article -->
			
			<?php comments_template(); ?>
			
			<?php endwhile; ?>			
			
			<?php else : ?>
			
    		<article id="post-not-found">
		  
    	    <header>
    	    	<h2>Not Found</h2>
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