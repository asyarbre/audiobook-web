/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        containerFluid : {
            center: true,
            padding: '0',
            margin: '0',
        },
        extend: {
            fontFamily:{
                'Poppins' : "'Poppins', sans-serif;"
            },
            colors:{
                Footer : '#272343',
            }
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light","emerald"],
    },
};

