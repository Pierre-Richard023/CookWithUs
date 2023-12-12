/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./assets/**/*.js",
        "./assets/**/*.jsx",
        "./assets/**/*.ts",
        "./assets/**/*.tsx",
        "./templates/**/*.html.twig",
    ],
    theme: {
        extend: {
            colors: {
                primary:'#d38b72',
                secondary:'#d9b781',
                success:'#599F24',
                warning:'#C4B41F',
                danger:'#8E0E0E',
                dark: '#0B1429',
            }
        },
    },
    plugins: [],
}

