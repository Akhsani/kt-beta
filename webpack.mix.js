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
   .less('resources/assets/less/theme.less', 'public/css')
   .styles([
   	'public/css/bootstrap.css',
   	'public/css/stack-interface.css',
   	'public/css/socicon.css',
   	'public/css/iconsmind.css',
   	'public/css/flickity.css',
   	'public/css/lightbox.min.css',
   	'public/css/custom.css',
   	'public/css/jquery.steps.css',
   	'public/css/jquery.timepicker.css',
   	'public/css/custom.css'
   	],'public/css/all.css')
   .scripts([
   	'public/js/datepicker.js',
   	'public/js/flickity.min.js',
   	'public/js/jquery.steps.min.js',
   	'public/js/timepicker.min.js',
   	'public/js/lightbox.min.js',
   	'public/js/typed.min.js',
   	'public/js/scripts.js'
   	], 'public/js/all.js');

