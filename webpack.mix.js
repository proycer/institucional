const mix = require('laravel-mix');

require('laravel-mix-critical');

// require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/services.js', 'public/js')
    .sass('resources/sass/services.scss', 'public/css')
    // .purgeCss()
    .critical({
        enabled: mix.inProduction(),
        urls: [
            { src: 'https://proycer.test/', dest: 'public/css/home_critical.min.css' },
            { src: 'https://proycer.test/turnos', dest: 'public/css/turnos_critical.min.css' },
            { src: 'https://proycer.test/catalogo', dest: 'public/css/catalogo_critical.min.css' },
            { src: 'https://proycer.test/catalogo/demo', dest: 'public/css/catalogo-demo_critical.min.css' }
        ],
        options: {
            minify: true,
        },
    });
