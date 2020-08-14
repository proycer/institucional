try {

    $ = window.$ = window.jQuery = require('jquery');
    window.bootstrap = require('bootstrap');
    window.owlCarousel = require('owl.carousel');
    window.AOS = require('aos');

} catch (e) {}

AOS.init({
    duration: 800,
    easing: 'slide',
    once: false
});

$(document).ready(function ($) {
    "use strict";
    
    $('.preview').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 300,
    });
});
