const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .vue() // Ajoutez cette ligne pour gérer les fichiers .vue
    .webpackConfig({ 
        resolve: {
            extensions: ['.js', '.vue', '.json'], // Assurez-vous d'inclure les extensions nécessaires
        },
    })
    .version()
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts')
    .sourceMaps()
    .setPublicPath('public');

