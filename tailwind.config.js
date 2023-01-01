/** @type {DefaultColors} */
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                grey: {
                    600: '#bad9fc',
                }
            },
            backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                '50%': '50%',
                '16': '4rem'
            }
        },
    },
    plugins: [],
}
