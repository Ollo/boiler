<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package boiler
 */

get_header(); ?>


  <section class="content" role="main">

    <article class="post not-found">
      <header>
        <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'boiler' ); ?></h1>
      </header>

      <div>
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'boiler' ); ?></p>

        <?php get_search_form(); ?>
        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

      </div>
    </article>

  </section>


<?php get_footer(); ?>
