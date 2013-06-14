// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
    var container = document.getElementById( 'site-navigation' ),
        button    = container.getElementsByTagName( 'h1' )[0],
        menu      = container.getElementsByTagName( 'ul' )[0];

    if ( undefined == button || undefined == menu )
        return false;

    button.onclick = function() {
        if ( -1 == menu.className.indexOf( 'nav-menu' ) )
            menu.className = 'nav-menu';

        if ( -1 != button.className.indexOf( 'toggled-on' ) ) {
            button.className = button.className.replace( ' toggled-on', '' );
            menu.className = menu.className.replace( ' toggled-on', '' );
            container.className = container.className.replace( 'main-small-navigation', 'navigation-main' );
        } else {
            button.className += ' toggled-on';
            menu.className += ' toggled-on';
            container.className = container.className.replace( 'navigation-main', 'main-small-navigation' );
        }
    };

    // Hide menu toggle button if menu is empty.
    if ( ! menu.childNodes.length )
        button.style.display = 'none';
} )();

// keyboard-image-navigation.js

jQuery( document ).ready( function( $ ) {
    $( document ).keydown( function( e ) {
        var url = false;
        if ( e.which == 37 ) {  // Left arrow key code
            url = $( '.previous-image a' ).attr( 'href' );
        }
        else if ( e.which == 39 ) {  // Right arrow key code
            url = $( '.entry-attachment a' ).attr( 'href' );
        }
        if ( url && ( !$( 'textarea, input' ).is( ':focus' ) ) ) {
            window.location = url;
        }
    } );
} );