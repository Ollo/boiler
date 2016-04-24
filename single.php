<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>


  <section class="content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'single' ); ?>

      <?php boiler_content_nav( 'nav-below' ); ?>

      <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
          comments_template();
      ?>

    <?php endwhile; // end of the loop. ?>

  </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
