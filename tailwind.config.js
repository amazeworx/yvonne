const theme = require('./theme.json');
const tailpress = require('@jeffreyvr/tailwindcss-tailpress');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt',
    './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '1rem',
        lg: '1rem',
      },
    },
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme('settings.color.palette', theme)
      ),
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme('settings.typography.fontSizes', theme)
      ),
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        bodoni: ['Bodoni Moda', ...defaultTheme.fontFamily.serif],
      },
    },
    screens: {
      xs: '480px',
      sm: '600px',
      md: '782px',
      lg: tailpress.theme('settings.layout.contentSize', theme),
      xl: tailpress.theme('settings.layout.wideSize', theme),
      '2xl': '1280px',
    },
  },
  plugins: [
    tailpress.tailwind,
    require('@tailwindcss/typography'),
    require('tw-elements/dist/plugin'),
  ],
};
