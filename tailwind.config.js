/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "columbia-blue": "#c8d9e2",
                "yinmn-blue": "#475998",
                "office-green": "#008000",
                "honey-dew": "#cfe8db",
                "ghost-white": "#e5e8f3",
                "sinopia-red": "#c73c00",
                "light-grey": "#f0f1f5",
                "dark-grey": "#adadad",
            },
            fontSize: {
                xs: "0.75rem",
                sm: "0.875rem",
                base: "1rem",
                lg: "2.25rem",
            },
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
                inter: ["Inter", "sans-serif"],
                lato: ["Lato", "sans-serif"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
