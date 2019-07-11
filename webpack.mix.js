let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    resolve: {
        alias: {
            handlebars: 'handlebars/dist/handlebars.js'
        }
    },
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*', 'source/**/*.js']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .copy('node_modules/font-awesome/fonts/*', 'source/assets/build/fonts')
    .copy('node_modules/@mdi/font/fonts/*', 'source/assets/build/fonts')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: true,
    }).version();
