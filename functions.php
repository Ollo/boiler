<?php
/**
 * boiler functions and definitions
 *
 * @package boiler
 */

/**
 * Run theme setup and clean up the theme header
 */

require get_template_directory() . '/includes/setup.php';


/**
 * Enqueue scripts and styles
 */

require get_template_directory() . '/includes/enqueues.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';
