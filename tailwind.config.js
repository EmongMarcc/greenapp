const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
                colors:{
                    text: '#2E844C',
                    text2: '#40B96A',
                    text3: '#FFFFFF',
                    theme: '#000000',
                    theme2: '#1A3C40',
                    theme3: '#220000',
                },
                listStyleType: {
                    none: 'none',
                   disc: 'disc',
                   decimal: 'decimal'
      }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            listStyleType: ['hover', 'focus'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
