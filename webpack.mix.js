let mix = require('laravel-mix');

mix
.autoload({
    jquery: ['$', 'window.jQuery']
  })
.setPublicPath('build')
.js('src/js/index.js', 'js')
.sass('src/sass/index.scss', 'css')
.sass('src/sass/exhibition.scss', 'css')
.sass('src/sass/archive-exhibition.scss', 'css')
.sass('src/sass/front-page.scss', 'css')