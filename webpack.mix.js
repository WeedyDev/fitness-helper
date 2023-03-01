const mix = require('laravel-mix');
mix.disableNotifications();
mix.extract(['jquery'],'js/vendor.js')
mix.js('resources/js/home.js', 'js')
mix.js('resources/js/add.js', 'js')
mix.js('resources/js/showprograms.js', 'js')
mix.js('resources/js/display.js', 'js')

mix.css('resources/css/app.css','css')