<?php

/* remove some of the header bloat */

// EditURI link
remove_action( 'wp_head', 'rsd_link' );

// windows live writer
remove_action( 'wp_head', 'wlwmanifest_link' );

// index link
remove_action( 'wp_head', 'index_rel_link' );

// previous link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

// start link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

// links for adjacent posts
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// WP version
remove_action( 'wp_head', 'wp_generator' );

// remove pesky injected css for recent comments widget
add_filter( 'wp_head', 'boiler_remove_wp_widget_recent_comments_style', 1 );

function boiler_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}

/**
*  clean up comment styles in the head
*/
add_action('wp_head', 'boiler_remove_recent_comments_style', 1);

function boiler_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

/**
*  clean up gallery output in wp
*/

add_filter('gallery_style', 'boiler_gallery_style');

function boiler_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}




