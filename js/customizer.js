/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Custom control definded in customizer.php
	// This will make sure it updates in real time
	wp.customize( 'site_info', function( value ) {
		value.bind( function( to ) {
			$('.site-info').text( to );
		} );
	} );
} )( jQuery );