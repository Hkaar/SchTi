/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  mode: 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: "1rem",
      },

      colors: {
        'primary': '#00172E',
        'secondary': '#00365E',
        'tertiary': '#005794',
        'accent': '#007BCE',
        'primary-dark': '#C2D8FF',
        'secondary-dark': '#79B2FF',
        'tertiary-dark': '#008DEE',
        'base-light': '#fafafa',
        'base-dark': '#101010'
      },
      animation: {
        "float-down": "float-down 2.5s ease-in-out infinite",
      },
      keyframes: {
        "float-down": {
          "0%": {
            "transform": "translateY(0)",
          },
          "50%": {
            "transform": "translateY(10px)",
          },
          "100%": {
            "transform": "translateY(0)",
          },
        },
      }
    },
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),
  ],
}