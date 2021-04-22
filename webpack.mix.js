const mix = require('laravel-mix');
const twjit = require("@tailwindcss/jit");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*
mix.postCss("resources/css/app.css", "public/css").options({
    postCss: [twjit],
});
*/

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]).options({
    postCss: [twjit],
});

if (mix.inProduction()) {
    mix.version();
}
