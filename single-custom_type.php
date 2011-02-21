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

<div id="content" class="clear">

  <div id="main" class="col620 clear" role="main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('clear'); ?>>

      <header>
        
        <div id="post-img">
          <?php if ( has_post_thumbnail() ) : ?>
           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
           <?php the_post_thumbnail('thumbnail'); ?>
           </a>
          <?php endif; ?>
        </div>

        <h2><?php the_title(); ?></h2>

        <p class="meta">
          Posted on: <time><?php the_time('F jS, Y'); ?></time>
          by <?php the_author(); ?>
          categorized: <?php the_category(', '); ?>
          containing: <?php word_count(); ?> words
        </p>
        
        <?php // If this post has an associated thumbnail lets display it
          if ( has_post_thumbnail() ) { the_post_thumbnail(); }
        ?>

      </header> <!-- end article header -->

      <section class="post_content clear">

      <?php the_content(); ?>

    </section> <!-- end article section -->

    <footer>

      <p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tags', '<span class="tags-title">Custom Tags:</span> ', ', ' ) ?></p>

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