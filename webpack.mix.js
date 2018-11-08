const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

// mix.postCss('resources/css/twitter.css', 'public/css', [
//     tailwindcss('./tailwind.js'),
//   ])
//   .browserSync('127.0.0.1:8000'); //we are not using any proxy or valet so we simply pass our local port for browserSync to use it

mix.postCss('resources/css/treehouse.css', 'public/css', [
  tailwindcss('./tailwind.js'),
])
.browserSync('127.0.0.1:8000');

// after above step run "npm run watch"

/*
above command uses yarn to install browserSync but in our case we don't want to use
it so we simply use following command and pull it from 'npm'

npm install --save-dev browser-sync browser-sync-webpack-plugin
*/
