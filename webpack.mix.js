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

const jsPath = 'public/js';
const cssPath = 'public/css';

mix.webpackConfig({
    output: {
        pathinfo: false
    }
});
mix.js('resources/js/app.js', jsPath).extract();
mix.js('resources/js/index.js', jsPath)
    .sass('resources/sass/app.scss', cssPath)
    .sass('resources/sass/frame.scss', cssPath)
    .sass('resources/sass/index.scss', cssPath);
