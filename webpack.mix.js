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

const sassOptions = (mix.inProduction()) ?
{outputStyle: 'compressed'} : {};

mix.js('resources/js/app.js', 'public/js')
   .copyDirectory('resources/img', 'public/img')
   .sass('resources/sass/app.scss', 'public/css', sassOptions)
   .options({
      processCssUrls: false,
      postCss: [
         require('css-mqpacker')()
      ]
   })

   .autoload({
      jquery: ['$', 'window.jQuery']
   })

   .browserSync({
      proxy: 'http://localhost:8000',
      host: 'localhost',
      open: true,
      watchOptions: {
         usePolling: false
      },
      files: [
         'app/**/*.php',
         'resources/views/**/*.php',
         'public/js/**/*.js',
         'public/css/**/*.css'
      ]
   })

   .webpackConfig({
      module: {
         rules: [
            { // JavaScript Prettier Setting
               test: /\.js$/,
               loader: 'prettier-loader',
               options: { // Prettier Options https://prettier.io/docs/en/options.html
                  singleQuote: true,
                  semi: false
               }
            },
            { // Allow .scss files imported glob
               test: /\.scss/,
               loader: 'import-glob-loader'
            },
            { // Sass Prettier Setting
               test: /\.scss$/,
               loader: 'prettier-loader',
               options: {
                  parser: "postcss"
               }
            }
         ]
      }
   })


if (mix.inProduction()) {
   // 本番のみブラウザキャッシュ対策
   mix.version();
} else {
   mix.sourceMaps();
}