try {

    $ = window.$ = window.jQuery = require('jquery');
    window.bootstrap = require('bootstrap');
    window.AOS = require('aos');

} catch (e) {}

AOS.init({
    duration: 800,
    easing: 'slide',
    once: false
});
