/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./*.php",
      "./includes/components/*.php",
      "./includes/templates/*.php"
    ],
    theme: {
      container: {
        center: true,
        screens: {
          'xs':'320px',
          'sm': '340px',
          'md': '640px',
          'lg': '1300px',
          'xl': '1600px',
        },
      },
      extend: {
        fontFamily: {
          inter: 'Inter, sans-serif'
        },
        screens: {
          'xs':'320px',
          'sm': '640px',
          'md': '768px',
          'lg': '1024px',
          'xl': '1600px',
        },
        colors: {
          blue: {
            300: '#3968ED',
            400: '#001946',
          },
          gray: {
            100: '#F4F4F4',
            400: '#5E5E5E'
          },
          green: {
            300: '#23B92A',
            400: '#3DB9BD',
            500: '#043644'
          }
        }
      },
    },
    plugins: [],
  }