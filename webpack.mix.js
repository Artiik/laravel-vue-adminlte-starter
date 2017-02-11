const { mix } = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css')
//     .sass('resources/assets/sass/admin/base.scss');

mix.js('resources/assets/admin/js/dashboard.js', 'public/assets/admin/js')
    .sass('resources/assets/admin/sass/dashboard.scss', 'public/assets/admin/css');
