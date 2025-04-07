import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import wireuiPreset from "./vendor/wireui/wireui/tailwind.config.js"; // Import the preset using 'import'
import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    presets: [wireuiPreset], // Use the imported preset here
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],

    theme: {
        extend: {
            colors: {
                primary: colors.rose,
                secondary: colors.gray,
                positive: colors.emerald,
                negative: colors.red,
                warning: colors.amber,
                info: colors.blue,
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
