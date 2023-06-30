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

mix.options({
    terser: {
        extractComments: false,
    }
});

mix.js('resources/js/app.js', 'public/js')
    .js('resources/user_assets/js/core.js', 'public/js/core.min.js')
    .js('resources/js/admin-panel.js', 'public/admin/custom-js/admin-panel.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/user_assets/css/style.scss', 'public/user_assets/css/style.css')
    .sass('resources/user_assets/css/site_tree.scss', 'public/user_assets/css/site_tree.css')
    .version();

// if (mix.inProduction()) {
//     mix.version();
// }
