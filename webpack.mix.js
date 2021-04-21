const mix = require('laravel-mix');
const { VERSION } = require('lodash');

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

mix.styles(['resources/css/1_settings/1_settings.css', 
            'resources/css/2_tools/2_tools.css',
            'resources/css/3_generic/3_generic.css',
            'resources/css/4_base/4_base.css',
            'resources/css/5_objects/5_objects.css',
            'resources/css/6_components/6_components.css',
            'resources/css/7_trumps/7_trumps.css'
        ], 'public/css/style.css')
    
    .js(['resources/js/index.js'
        ], 'public/js/script.js')
        
    .version();
