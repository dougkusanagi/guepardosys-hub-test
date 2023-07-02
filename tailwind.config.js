import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    // darkMode: "class",

    plugins: [require("@tailwindcss/forms"), require("daisyui")],

    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#4338ca",
                    secondary: "#11183C",
                    accent: "#5eead4",
                    neutral: "#191D24",
                    "base-100": "#fff",
                    info: "#67e8f9",
                    success: "#36D399",
                    warning: "#FBBD23",
                    error: "#f43f5e",
                },
            },
        ],
    },

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
};
