<?php

/**
*
* This is the default page template for displaying single posts
*
*/

get_header(); ?>
			
	<div id="content">
	
		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
  			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
  				<header>
  				  <div id="post-img">
              <?php if ( has_post_thumbnail() ) : ?>
               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
               <?php the_post_thumbnail('thumbnail'); ?>
               </a>
              <?php endif; ?>
            </div>
            <div id="post-preview">
              <?php edit_post_link('✍','',' '); ?>
    					<h2><?php the_title(); ?></h2>
    					<p class="meta">
                by <?php the_author_posts_link(); ?> on <time><?php the_time('F jS, Y'); ?></time><br />
                in category <?php the_category(', '); ?> containing <?php word_count(); ?> words</p>
            </div>
  				</header> <!-- end article header -->
			
  				<section class="post_content">
  					<?php the_content(); ?>
  				</section> <!-- end article section -->
				
  				<footer>
            <?php if (has_tag()) : ?>
              <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
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

		<?php get_sidebar(); // sidebar 1 ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>