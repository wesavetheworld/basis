<?php

/**
*
* This is the default template for displaying the pages
*
*/

get_header(); ?>
			
	<div id="content" class="clearfix">
	
		<div id="main" class="fluid-8-col clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
  			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
				
  				<header>
  					<h2 class="page-title"><?php the_title(); ?></h2>
  				</header> <!-- end article header -->
			
  				<section class="post_content clearfix">
  					<?php the_content(); ?>
  				</section> <!-- end article section -->
				
  				<footer>
  					<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
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