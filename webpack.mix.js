const mix = require('laravel-mix');


mix.version()

mix.copy(['resources/assets/image'], 'public/image')
mix.js(['resources/assets/js/openbless.js'],'public/js/openbless.js')
mix.styles(['resources/assets/css/style.css'],'public/css/style.css')
mix.styles(['resources/assets/css/card.css'],'public/css/card.css')
mix.styles(['resources/assets/css/detalhes.css'],'public/css/detalhes.css')