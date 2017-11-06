let mix = require('laravel-mix');

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

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/app.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/sweetalert2.min.css',
], 'public/css/app.css')
.scripts([
    'resources/assets/js/jquery-3.2.1.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/sweetalert2.all.min.js',
], 'public/js/app.js');