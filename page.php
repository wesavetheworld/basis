<?php

/**
*
* This is the default template for displaying the pages
*
*/

get_header(); ?>
			
<div id="content">

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<header>
					<h2 class="page-title"><?php the_title(); ?></h2>
				</header> <!-- end article header -->
		
				<section class="page_content">
					<?php the_content(); ?>
				</section> <!-- end article section -->
		
			</article> <!-- end article -->
					
		<?php endwhile; ?>		
		
		<?php else : ?>
		
			<article id="page-not-found">
		  
		    <header>
		    	<h2>Not Found</h2>
		    </header>
	    
		    <section class="page_content">
		    	<p>Sorry, but the requested resource was not found on this site.</p>
		    </section>
		    
			</article>
		
		<?php endif; ?>

	</div> <!-- end #main -->

	<?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<?php get_footer(); ?>