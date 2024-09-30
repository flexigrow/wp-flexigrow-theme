/** @type {import('tailwindcss').Config} */
module.exports = {
  corePlugins: {
    preflight: false,
  },
  blocklist: ["collapse"],
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./page-templates/**/*.php",
    "./inc/**/*.php",
    "./js/**/*.js",
  ],
  theme: {
    collapse: {},
    extend: {
      colors: {
        primary: {
          main: "#CEFF00",
        },
        dark: {
          main: "#171717",
          secondary: "#282828",
          light: "#4B4B4B",
        },
      },
    },
  },
  plugins: [],
};
