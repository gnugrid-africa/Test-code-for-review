const { mix } = require('laravel-mix');
const path    = require('path');



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

mix.webpackConfig({
      devServer: {
        headers: {
          'Access-Control-Allow-Origin': 'http://mobis.dev'
        }
      },
      resolve: {
        alias: {
          '@': path.resolve(__dirname, './resources/assets/sass')
        }
      }
    })
    .js('resources/assets/js/app.js', 'public/js')
    .version()
    .sass('resources/assets/sass/app.scss', 'public/css')
    .version();
