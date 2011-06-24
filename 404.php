<?php

/**
*
* This is the default page template for displaying the 404 error page
*
*/

get_header(); ?>

<div id="content" class="clearfix">

  <div id="main" role="main">

    <article id="post-not-found">

      <header>

        <h1>Epic 404 - Article Not Found</h1>

      </header> <!-- end article header -->

      <section class="post_content">

        <p>The article you were looking for was not found, the following sitemap might help you find what you're looking for.</p>
				<?php get_template_part('sitemap'); ?>

      </section> <!-- end article section -->

      <footer>

      </footer> <!-- end article footer -->

    </article> <!-- end article -->

  </div> <!-- end #main -->
  
<?php get_sidebar(); ?>

</div> <!-- end #content -->

<?php get_footer(); ?>