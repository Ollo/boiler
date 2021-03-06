<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package boiler
 */
?>
<section class="sidebar">
  <?php do_action( 'before_sidebar' ); ?>
  <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

    <aside id="search" class="widget widget_search">
      <?php get_search_form(); ?>
    </aside>

    <aside id="archives" class="widget">
      <h3 class="widget-title"><?php // _e( 'Archives', 'boiler' ); ?></h3>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside>

  <?php endif; // end sidebar widget area ?>
</section>
