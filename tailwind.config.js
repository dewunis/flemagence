/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    sm: "2rem",
                    lg: "2rem",
                    xl: "2rem",
                    "2xl": "4rem",
                },
            },
            fontFamily: {
                outfit: ["Outfit","sans-serif"],
            },

            colors: {
                yellow1 : "#EAF765",
            }
        },
    },
    plugins: [],
};
