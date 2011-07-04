<?php

/**
*
* This is the default page template for displaying single posts
*
*/

get_header(); ?>
			
<div id="content" class="clearfix">

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<header>
					<h2 class="h1"><?php edit_post_link('✍','',' '); ?><?php the_title(); ?></h2>
					<p class="meta">
            the following <?php word_count(); ?> words were written by <?php the_author_posts_link(); ?><br />
            <?php basis_fuzzy_time(); ?> (<?php the_date(); ?> at <?php the_time(); ?>)
          </p>
				</header> <!-- end article header -->
		
				<section class="post_content clearfix">
				  <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'left')); } ?>
					<?php the_content(); ?>
				</section> <!-- end article section -->
			
				<footer>
          <?php if (has_category()) : ?>
            <p class="cats">Categories: <?php the_category(', '); ?></p>
          <?php else : ?>
            <p class="cats">Categories: [this post has no categories]</p>
          <?php endif; ?>
          <?php if (has_tag()) : ?>
            <p class="tags">Tags: <?php the_tags(', '); ?></p>
          <?php else : ?>
            <p class="tags">Tags: [this post has not been tagged]</p>
          <?php endif; ?>
          
          <?php // If a user has filled out their description, show a bio on their entries
            if ( get_the_author_meta( 'description' ) ) { ?>
						<div id="entry-author-info">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), 72 ); ?>
							<h4><?php printf( esc_attr__( 'About %s' ), get_the_author() ); ?></h4>
							<p><?php the_author_meta( 'description' ); ?></p>
						</div><!-- #entry-author-info -->
					<?php } ?>            
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

</div> <!-- end #content -->

<?php get_footer(); ?>