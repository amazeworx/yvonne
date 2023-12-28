const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./resources/css/*.css",
    "./resources/js/*.js",
    "./safelist.txt",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "1rem",
        lg: "1rem",
      },
    },
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme("settings.color.palette", theme)
      ),
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme("settings.typography.fontSizes", theme)
      ),
      fontFamily: {
        sans: ["Nunito", ...defaultTheme.fontFamily.sans],
        bodoni: ["Bodoni Moda", ...defaultTheme.fontFamily.serif],
        crimson: ["Crimson Text", ...defaultTheme.fontFamily.serif],
      },
    },
    screens: {
      xs: "480px",
      sm: "600px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1440px",
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    tailpress.tailwind,
    require("@tailwindcss/typography"),
    require("@tailwindcss/aspect-ratio"),
    require("tw-elements/dist/plugin"),
    //require("daisyui"),
  ],
};
