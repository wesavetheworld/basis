<?php

/*
Template Name: Custom Page Example
*/

get_header(); ?>
	
	<div id="content" class="clear">
	
		<div id="main" class="col620 clear" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			  <article id="post-<?php the_ID(); ?>" class="clear">
				
  				<header>
  					<h2><?php the_title(); ?></h2>
  				</header> <!-- end article header -->
		
  				<section class="post_content">
  					<?php the_content(); ?>
  				</section> <!-- end article section -->
			
  				<footer>
  					<p class="clear"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
  				</footer> <!-- end article footer -->
			
  			</article> <!-- end article -->
			
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