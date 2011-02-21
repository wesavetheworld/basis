<?php

/**
*
* This is the default page template for displaying the following archive pages:
* category, tag, author, day, month, year
*
*/

get_header(); ?>

  <div id="content" class="clear">

    <div id="main" class="col620 clear" role="main">

      <?php if (is_category()) { ?>
        <h3 class="archive_title"><span>Posts Categorized:</span> <?php single_cat_title(); ?></h3>
      <?php } elseif (is_tag()) { ?> 
        <h3 class="archive_title"><span>Posts Tagged:</span> <?php single_tag_title(); ?></h3>
      <?php } elseif (is_author()) { ?>
        <h3 class="archive_title"><span>Posts By:</span> <?php get_the_author_meta('display_name'); ?></h3>
      <?php } elseif (is_day()) { ?>
        <h3 class="archive_title"><span>Daily Archives:</span> <?php the_time('l, F j, Y'); ?></h3>
      <?php } elseif (is_month()) { ?>
        <h3 class="archive_title"><span>Monthly Archives:</span> <?php the_time('F Y'); ?></h3>
      <?php } elseif (is_year()) { ?>
        <h3 class="archive_title"><span>Yearly Archives:</span> <?php the_time('Y'); ?></h3>
      <?php } ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="clear">

          <header>
  				  <div id="post-img">
              <?php if ( has_post_thumbnail() ) : ?>
               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
               <?php the_post_thumbnail('thumbnail'); ?>
               </a>
              <?php endif; ?>
            </div>
            <div id="post-preview">
    					<h2><?php the_title(); ?></h2>
    					<p class="meta">
                by <?php the_author(); ?> on <time><?php the_time('F jS, Y'); ?></time><br />
                in category <?php the_category(', '); ?> containing <?php word_count(); ?> words</p>
            </div>
  				</header> <!-- end article header -->

          <section class="post_content">
            <?php the_content('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
          </section> <!-- end article section -->

          <footer>
            <?php if (has_tag()) : ?>
              <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
            <?php else : ?>
              <p class="tags">Tags: [this post has not been tagged]</p>
            <?php endif; ?>
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
          <h2>No Posts Yet</h2>
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