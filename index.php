<?php

/**
*
* This is the default page template for displaying the main index page
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
        
        <div id="post-preview">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <p class="meta">
            Posted on: <time><?php the_time('F jS, Y'); ?></time>
            by <?php the_author(); ?>
            categorized: <?php the_category(', '); ?>
          </p>
        </div>
      
      </header> <!-- end article header -->

    <section class="post_content clear">
      <?php the_excerpt('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>

    </section> <!-- end article section -->

    <footer>

      <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

    </footer> <!-- end article footer -->

  </article> <!-- end article -->

<?php endwhile; ?>	

<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

  <?php page_navi(); // use the page navi function ?>

  <?php } else { // if it is disabled, display regular wp prev & next links ?>
    <nav class="wp-prev-next">
      <ul class="clear">
        <li class="prev-link"><?php next_posts_link('&laquo; Older Entries') ?></li>
        <li class="next-link"><?php previous_posts_link('Newer Entries &raquo;') ?></li>
      </ul>
    </nav>
    <?php } ?>		

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