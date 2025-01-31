// /** @type {import('tailwindcss').Config} */
// module.exports = {
//   content: [
//     "./*.php",         // Process all PHP files in the root directory
//     "./**/*.php",      // Process all PHP files in subdirectories
//     "./src/**/*.{html,js,php}"  // Optional, if you have PHP files in a `src` folder
//   ],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }


/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./app/views/**/*.php",
    "./public/**/*.html"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
