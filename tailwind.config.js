/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class', // for MaryUI theme toggle
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
