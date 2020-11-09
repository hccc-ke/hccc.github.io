const mix = require("laravel-mix");
require("laravel-mix-jigsaw");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

mix.copyDirectory('source/_assets/fonts', 'source/assets/build/fonts');

mix
  .jigsaw()
  .js("source/_assets/js/modernizr-2.6.2.min.js", "js")
  .js("source/_assets/js/jquery-3.0.0.min.js", "js")
  .js("source/_assets/js/bootstrap.min.js", "js")
  .js("source/_assets/js/main.js", "js")
  .sass("source/_assets/css/all.scss", "css")
  .options({
    processCssUrls: false,
  })
  .version();
