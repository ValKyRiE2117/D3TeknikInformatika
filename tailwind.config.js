/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#f1f7fe",
                    100: "#e2edfc",
                    200: "#bfdaf8",
                    300: "#87bdf2",
                    400: "#479ae9",
                    500: "#1f7ed8",
                    600: "#1161b8",
                    700: "#0f4c92",
                    800: "#11437b",
                    900: "#143966",
                    950: "#0d2444",
                },
                acgreen: {
                    50: "#f2fbf9",
                    100: "#d3f4ed",
                    200: "#b3e7cf",
                    300: "#81d4b3",
                    400: "#44bdac",
                    500: "#2a9d77", //
                    600: "#1c7f60",
                    700: "#16664f",
                    800: "#1c534f",
                    900: "#1b4642",
                    950: "#0a2928",
                },
                acblue: {
                    50: "#eefafd",
                    100: "#d5f1f8",
                    200: "#b0e2f1",
                    300: "#7acde6",
                    400: "#3caed4",
                    500: "#219ebc", //
                    600: "#1e759c",
                    700: "#1f5f7f",
                    800: "#214f69",
                    900: "#204259",
                    950: "#102b3c",
                },
                acyellow: {
                    50: "#fdf9ed",
                    100: "#f8edcd",
                    200: "#f0d997",
                    300: "#e9c46a", //
                    400: "#e2ab3d",
                    500: "#da8d26",
                    600: "#c16c1e",
                    700: "#c16c1e",
                    800: "#833e1d",
                    900: "#6c331b",
                    950: "#3d190b",
                },
                acorange: {
                    50: "#fdf5f3",
                    100: "#fde8e3",
                    200: "#fbd6cd",
                    300: "#f8b9a9",
                    400: "#f19078",
                    500: "#e76f51", //
                    600: "#d3502f",
                    700: "#b14024",
                    800: "#933821",
                    900: "#7a3422",
                    950: "#42180d",
                },
                acred: {
                    50: "#fff1f3",
                    100: "#ffe3e7",
                    200: "#ffccd5",
                    300: "#ffa1b3",
                    400: "#ff5e80", //
                    500: "#f93a68",
                    600: "#e71753",
                    700: "#c30d45",
                    800: "#a30e41",
                    900: "#8b103e",
                    950: "#4e031d",
                },
            },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            datatables: true,
            charts: true,
        }),
    ],
};
