<?php

/*
Template Name: Sitemap Page
*/

get_header(); ?>
			
<div id="content">

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<header>
					<h2 class="page-title"><?php the_title(); ?></h2>
				</header> <!-- end article header -->
		
				<section class="post_content">
					<?php the_content(); ?>
					<?php get_template_part('library/partials/sitemap'); ?>
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