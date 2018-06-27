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
   .js('resources/assets/js/theme/sb-admin.js', 'public/js')
   .js('resources/assets/js/theme/sb-admin-charts.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/theme/sb-admin.scss', 'public/css')

mix.version([
    'public/css/app.css',
    'public/css/sb-admin.css',
    'public/js/app.js',
    'public/js/sb-admin.js',
    'public/js/sb-admin-charts.js'
]);