const colors = require('tailwindcss/colors')
module.exports = {
  darkMode: 'class',
  content: [
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
    "./app/Views/**/**/**/**/*.php",
  ],
  theme: {
    fontFamily: {
      sans: ['Inter', 'Helvetica', 'Arial', 'sans-serif'],
    },
    colors: {
      background: {
        top: '#32394C',
        secondary: '#fcfcfc',
        darkPrimary: '#0F172A',
        darkSecondary: '#1E293B',
        hoverPrimary: '#17202e',
      },
      border: {
        darkPrimary: '#0F172A',
      },
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      indigo: colors.indigo,
      red: colors.rose,
      yellow: colors.amber,
      blueGray: colors.blueGray,
      blue: colors.blue,
      green: colors.green,
      pink: colors.pink,
      purple: colors.purple,
    },
    extend: {},
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
}
