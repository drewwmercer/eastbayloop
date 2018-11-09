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

mix.js('resources/assets/js/site.js', 'public/js/site.js')
   .js('resources/assets/js/admin.js', 'public/js/admin.js')
   .sass('resources/assets/sass/site/bootstrap.scss', 'public/css/site.css')
   .sass('resources/assets/sass/admin/bootstrap.scss', 'public/css/admin.css')
   .styles([
       'resources/assets/css/flexslider.css'
   ], 'public/css/flexslider.css');
