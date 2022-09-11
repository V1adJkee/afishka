/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
        colors: {
            'black': 'rgb(0 0 0)',
            'white': '#fff',
            'red-100': '#fee2e2',
            'gray-500': 'rgb(107 114 128)',
            'amber-300': 'rgb(252 211 77)',
            'neutral-600': 'rgb(115 115 115)',
            'rose-600': 'rgb(225 29 72)',
            'blue-400': 'rgb(96 165 250)',
            'blue-700': 'rgb(29 78 216)',
            'gray-300': 'rgb(209 213 219)',
            'zinc-400': 'rgb(161 161 170)',
            'light-blue-s': '#BEDDEF',
        },
  },
  plugins: [],
}
