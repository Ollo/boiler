<?php

function boiler_scripts_styles() {

  // style.css just initializes the theme. This is compiled from /sass

  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css');

}

add_action( 'wp_enqueue_scripts', 'boiler_scripts_styles' );
