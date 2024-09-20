/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php"
  ],
  theme: {
    extend: {
      colors: {
        "background": "#74A06e"
      }
    }
  },
  plugins: [
    // require('@tailwindcss/typography'),
  ],
}

