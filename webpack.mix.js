let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
  ]
});

mix.webpackConfig({
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'source/_assets/js'),
      '@components': path.resolve(__dirname, 'source/_assets/js/components'),
    }
  }
});

mix.js('source/_assets/js/app.js', 'js')
    .sass('source/_assets/scss/main.scss', 'css')
    .copy('source/_assets/fonts/', 'source/assets/build/fonts')
    .copy('source/_assets/images/', 'source/assets/build/images')
    .options({
        processCssUrls: false,
    }).version();
