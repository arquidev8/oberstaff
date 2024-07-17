/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
     
      fontFamily: {

        header: ['Montserrat', 'sans-serif'],
        
    },
   
  },
  plugins: [],
}}