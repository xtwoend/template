var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less')
    .scripts([
        'jquery.ui.touch-punch.min.js',
        'bootstrap.js',
        'jquery.slimscroll.min.js',
        // 'jquery.infinitescroll.min.js',
        'bajax.js',
        'form.min.js',
        'app.js',
        'app.plugin.js',
    ]);
});
