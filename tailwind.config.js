const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        extend: {
            colors: {
                orange: {
                    '50': '#fff8f1',
                    '100': '#feecdc',
                    '200': '#fcd9bd',
                    '300': '#fdba8c',
                    '400': '#ff8a4c',
                    '500': '#ff5a1f',
                    '600': '#d03801',
                    '700': '#b43403',
                    '800': '#8a2c0d',
                    '900': '#771d1d',
                },
                teal: {
                    '50': '#edfafa',
                    '100': '#d5f5f6',
                    '200': '#afecef',
                    '300': '#7edce2',
                    '400': '#16bdca',
                    '500': '#0694a2',
                    '600': '#047481',
                    '700': '#036672',
                    '800': '#05505c',
                    '900': '#014451',
                },
            },
            maxHeight: {
                '0': '0',
                xl: '36rem',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
