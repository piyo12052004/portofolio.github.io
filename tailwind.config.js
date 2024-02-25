/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container:{
      center:true,
      padding:'16px',
    },
    extend: {
      colors:{
        blue :'#3b82f6',
        secondary:'#64748b',
        dark : '#0f172a',
      },
      screens:{
        '2xl' : '1320px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}

