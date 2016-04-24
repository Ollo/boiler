<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function boiler_setup() {

  /**
   * Add default posts and comments RSS feed links to head
   */
  add_theme_support( 'automatic-feed-links' );

  /**
   * Enable support for Post Thumbnails on posts and pages
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  /**
   * This theme uses wp_nav_menu() in one location.
   */
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'boiler' ),
  ) );

  /**
   * Enable support for Post Formats
   */
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}


add_action( 'after_setup_theme', 'boiler_setup' );

/**
* add parent class to menu items
*/

add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );

function add_menu_parent_class( $items ) {

  $parents = array();
  foreach ( $items as $item ) {
    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
      $parents[] = $item->menu_item_parent;
    }
  }

  foreach ( $items as $item ) {
    if ( in_array( $item->ID, $parents ) ) {
      $item->classes[] = 'parent-item';
    }
  }

  return $items;
}


/**
 * Register widgetized area and update sidebar with default widgets
 */

add_action( 'widgets_init', 'boiler_widgets_init' );

function boiler_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'boiler' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
}

// run some cleanup tasks primarily in the header

require get_template_directory() . '/includes/cleanup.php';
