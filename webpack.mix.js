let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.options({ processCssUrls: false });

mix.setPublicPath('./');

/* Admin assets */
mix.sass('./resources/src/admin/scss/Core.scss', './resources/dashboard/assets/admin/css/bundle.css').options({
    autoprefixer: {
        options: {
            browsers: [
                'last 6 versions',
            ]
        }
    }
});

mix.styles([
    './node_modules/perfect-scrollbar/css/perfect-scrollbar.css',
    './node_modules/suneditor/dist/css/suneditor.min.css',
], './resources/dashboard/assets/admin/css/vendor.css');

mix.js([
    './node_modules/babel-polyfill/dist/polyfill.js',
    './node_modules/element-closest/element-closest.js',
    './node_modules/custom-event-polyfill/polyfill.js',
    './node_modules/es5-shim/es5-shim.js',
    './node_modules/es6-shim/es6-shim.js',
    './node_modules/intersection-observer/intersection-observer.js',
    './node_modules/suneditor/dist/suneditor.min.js',
], './resources/dashboard/assets/admin/js/vendor.js');

mix.js([
    './resources/src/admin/js/Core.js',
], './resources/dashboard/assets/admin/js/bundle.js').sourceMaps();
