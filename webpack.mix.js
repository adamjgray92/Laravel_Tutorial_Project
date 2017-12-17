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

mix.js('resources/assets/js/app.js', 'public/js')
        .combine([
            'resources/assets/js/libs/jquery.js',
            'resources/assets/js/libs/bootstrap.js',
            'resources/assets/js/libs/metisMenu.js',
            'resources/assets/js/libs/sb-admin-2.js',
            'resources/assets/js/libs/scripts.js'
        ], 'public/js/libs.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
        .combine([
            'resources/assets/css/libs/*'
        ], 'public/css/libs.css');
