<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="wrapper">
    <header class="header">
      <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
           rel="home"><?php bloginfo( 'name' ); ?>
        </a>
      </h1>

      <nav role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'header_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
      </nav>
    </header>
