const mix = require('laravel-mix');

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

mix


    //Asset Admin
    .copyDirectory('resources/views/admin/assets','public/backend/assets')


    //Asset User
    .copyDirectory('resources/views/user/assets','public/user/assets')


    //Asset Web
    .copyDirectory('resources/views/web/assets','public/web/assets')

    .options({
        processCssUrls:false
    })

    .version()
