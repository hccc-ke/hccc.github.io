const mix = require("laravel-mix");
require("laravel-mix-jigsaw");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

mix.copyDirectory('source/_assets/fonts', 'source/assets/build/fonts');

mix.copy('source/_assets/js/jquery-3.0.0.min.js', 'source/assets/build/js');
mix.copy('source/_assets/js/bootstrap.min.js', 'source/assets/build/js');
mix.copy('source/_assets/js/main.js', 'source/assets/build/js');
mix.copy('source/_assets/js/modernizr-2.6.2.min.js', 'source/assets/build/js');

mix
  .jigsaw()
  .sass("source/_assets/css/all.scss", "css")
  .options({
    processCssUrls: false,
  })
  .version();
