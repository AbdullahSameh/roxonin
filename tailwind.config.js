module.exports = {
  purge: [
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      container: {
        padding: {
          DEFAULT: "1rem",
          sm: "2rem",
          lg: "4rem",
          xl: "8rem",
          "2xl": "12rem",
        },
      },
      fontFamily: {
        "playfair-display": ["Playfair Display", "serif"],
        poppins: ["Poppins", "sans-serif"],
        almarai: ["Almarai", "sans-serif"],
      },
      colors: {
        transparent: "transparent",
        current: "currentColor",
        "head-color": "#121212",
        "text-color": "#454545",
        "logo-color": "#005da8",
        "background-color": "#e6e6e6",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/forms"),
    // require('@tailwindcss/typography'),
    // require('@tailwindcss/aspect-ratio'),
    require("tailwindcss-rtl"),
  ],
};
