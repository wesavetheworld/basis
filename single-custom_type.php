<?php

/**
*
* This is the custom post type post template. If you edit the post type name, you've got
* to change the name of this template to reflect that name change.
* 
* i.e. if your custom post type is called register_post_type( 'bookmarks',
* then your single template should be single-bookmarks.php
* 
*/

get_header(); ?>

<div id="content" class="clearfix">

  <div id="main" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="clearfix">
  			  <div class="post-img">
            <?php if ( has_post_thumbnail() ) : ?>
             <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
             <?php the_post_thumbnail('thumbnail'); ?>
             </a>
            <?php endif; ?>
          </div>
          <div class="post-preview">
  					<h2><?php the_title(); ?></h2>
  					<p class="meta">
              by <?php the_author_posts_link(); ?> <time><?php wp_fuzzy_time(); ?></time><br />
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