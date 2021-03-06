<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package boiler
 */

get_header(); ?>

<section class="content" role="main">

  <?php if ( have_posts() ) : ?>

    <header>
      <h2>
      <?php printf( __( 'Search Results for: %s', 'boiler' ), '<span>' . get_search_query() . '</span>' ); ?>
      </h2>
    </header>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'search' ); ?>

    <?php endwhile; ?>

    <?php boiler_content_nav( 'nav-below' ); ?>

  <?php else : ?>

    <?php get_template_part( 'no-results', 'search' ); ?>

  <?php endif; ?>


</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
