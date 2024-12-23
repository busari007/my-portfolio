/** @type {import('tailwindcss').Config} */
module.exports = {
    content: 
    [
        "./resources/**/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/views/*.blade.php",
        "./resources/views/main_page.blade.php"
    ],
    theme: 
    {
        extend: {},
    },
    plugins: [
        function ({addUtilities}){
            const newUtilities = {
                '.scrollbar-hidden': {
  // For WebKit Browsers (Chrome, Safari, Edge)
  "&::-webkit-scrollbar": {
    display: "none",
  },
  // For Firefox
  scrollbarWidth: "none",
  // For Internet Explorer/Edge (legacy)
  "-ms-overflow-style": "none",
}
        }

        addUtilities(newUtilities, ["responsive", "hover"])
    }
    ],
}