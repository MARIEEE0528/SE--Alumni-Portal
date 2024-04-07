///** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.html",
    ],
    theme: {
        screens: {
          sm: '480px',
          md: '768px',
          lg: '976px',
          xl: '1440px',
        },
        colors: {
          transparent: 'transparent',
          current: 'currentColor',

          'white':{
            10:  "#FFFFFF" ,
            20:  "#F0F0F0" ,
            30:  "#D6D7D8" ,
            100: "#141B29" , 
          },

          'black':{
            100:  "#676c72" ,
            200:  "#434343" ,
            300:  "#000000" ,
          },

          'blue': {
            hover: '#4F74BB',
            DEFAULT: '#2D349A',
            pressed: '#2D6B9A',
            surface: "#EFF0FF", 
          },

          'gold': {
            hover: '#D2CB65',
            DEFAULT: '#AB830F ',
            pressed: '#C9AE5D',
            surace: '#FFF0E0 '
          }
        },
        fontFamily: {
          'inter': ['Inter', 'sans-serif'],
          'katibeh': ['Katibeh', 'sans-serif'],
        },
        fontSize: {
          'extra-bold': '72px',
          'title-2': '64px',
          'title-3': '48px',
          'title-4': '40px',
          'title-5': '36px'
        },
        extend: {
          spacing: {
            '128': '32rem',
            '144': '36rem',
          },
          borderRadius: {
            '4xl': '2rem',
          },
          boxShadow: {
            "double-shadow": "var(--double-shadow)",
        }
      }
    }
  }