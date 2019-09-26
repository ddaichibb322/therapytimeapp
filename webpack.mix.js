const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/common.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
      'resources/css/common.css',
      'resources/css/mypage.css',
      'resources/css/session.css',
      'resources/css/sidebar.css',
      'resources/css/top.css'
  ], 'public/css/app.css');