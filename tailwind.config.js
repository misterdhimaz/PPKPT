/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'unsri-yellow': '#FFD700',      // Kuning Emas
        'unsri-dark-yellow': '#FACC15',
        'unsri-green': '#2F4F2F',       // Hijau Army Gelap
        'unsri-light-green': '#ECFCCB', // Hijau Muda
        'unsri-blue': '#0EA5E9',        // Biru Link
        'unsri-hmuda': '#85bf7a',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
