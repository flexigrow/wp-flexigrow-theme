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
      backgroundImage: {
        blackOverlay:
          "linear-gradient(90deg, rgba(0,0,0,1) 9%, rgba(0,0,0,0.7203256302521008) 74%, rgba(0,0,0,0.6138830532212884) 89%, rgba(0,0,0,0.35898109243697474) 100%)",
      },
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
  plugins: [require("@tailwindcss/typography")],
};
