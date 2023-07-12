/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily:{
                'Poppins' : "'Poppins', sans-serif;"
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light","emerald"],
    },
};

