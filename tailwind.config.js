const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"Roboto Condensed"', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
}

