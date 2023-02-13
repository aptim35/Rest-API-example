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



mix.styles([
'public/css/bootstrap.min.css',
'public/css/dataTables.bootstrap4.min.css'
],'public/build.css');  

mix.js([ 
    'public/js/jquery.dataTables.js',
    'public/js/dataTables.bootstrap4.min.js',
    ],'public/build.js'); 
