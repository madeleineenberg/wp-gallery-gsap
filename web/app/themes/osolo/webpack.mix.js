const path = require('path');
const mix = require('laravel-mix');
const purgecssWordpress = require('purgecss-with-wordpress');

require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');
require('laravel-mix-brotli');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./dist')
  .browserSync({
    proxy: { target: 'https://portfolio.local' },
    https: true,
  });

mix
  .sass('resources/assets/styles/app.scss', 'styles')
  .sass('resources/assets/styles/editor.scss', 'styles')
  .options({ processCssUrls: false })
  .purgeCss({
    extend: { content: [path.join(__dirname, 'index.php')] },
    safelist: {
      standard: [
        ...purgecssWordpress.safelist,
      ],
      deep: [
        /editor-styles-wrapper/,
      ],
    },
  })
  .brotli({
    threshold: 0,
  });

mix
  .js('resources/assets/scripts/app.js', 'scripts')
  .js('resources/assets/scripts/customizer.js', 'scripts')
  .blocks('resources/assets/scripts/editor.js', 'scripts')
  .extract()
  .brotli({
    threshold: 0,
  });

mix
  .copyWatched('resources/assets/images/**', 'dist/images')
  .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .options({ processCssUrls: false })
  .sourceMaps(false, 'source-map')
  .version();
