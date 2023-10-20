/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      colors : {
        primary: "#00FFD2",
        secondary: "#2EBAA1",
        gray: "#343D3C",
        dark: "#142E2E",
        white: "#FFFFFF",
      },
      fontFamily : {
        poppins: ["Poppins", "sans-serif"],
        inder: ["Inder", "sans-serif"]
      },
      fontSize: {
        huge: 'clamp(3rem, 6vw, 3.5rem)',
        medium: 'clamp(1.5rem, 6vw, 3rem)',
        small: 'clamp(0.8rem, 6vw, 2rem)',
      },

    },
    container: {
      center: true,
      padding: '1rem',
      screens: {
        sm: '425px',
        md: '768px',
        lg: '1024px',
        xl: '1440px',
        /*'2xl' : '1496px',*/
      },
    },
  },
  plugins: [],
}

