import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources//*.blade.php', // Corrigé pour inclure tous les fichiers Blade
        './resources/js//*.js', // Inclut les fichiers JavaScript dans /js
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], // Police personnalisée
            },
        },
    },
    plugins: [],
};
