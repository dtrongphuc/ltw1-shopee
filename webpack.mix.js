const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js");

mix.styles(
    [
        "resources/css/normalize.css",
        "resources/css/app.css",
        "resources/css/variable.css",
        "resources/css/auth.css",
        "resources/css/header.css",
        "resources/css/index.css"
    ],
    "public/css/app.css"
);

mix.copyDirectory("resources/fonts", "public/fonts");
