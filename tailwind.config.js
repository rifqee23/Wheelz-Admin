/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./src/**/*.{html,js,php}",
    "node_modules/preline/dist/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary' : '#162345',
        'root' : '#D9D9D9'
      }
    },
  },
  plugins: [
    require('preline/plugin')
  ],
}

