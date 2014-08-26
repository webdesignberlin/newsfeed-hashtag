function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 100,
            header = $('.header-background');
        if (distanceY > shrinkOn) {
            header.addClass('header-background--small');
        } else {
            if (header.has('.header-background--small')) {
                header.removeClass('header-background--small');
            }
        }
    });
}
window.onload = init();

;(function( $, window, document, undefined ) {
    // well, it's pretty strict...
    'use strict';

    //console.debug('Hallo Welt.');

    // var x = $('#gibtsnicht');

    //console.debug( x );

})(jQuery,window,document);