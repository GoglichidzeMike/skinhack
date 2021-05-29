module.exports = {
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            backgroundImage: (theme) => ({
                "hero-bg": "url('/image/home/hero-bg.jpg')",
                "hero-sm": "url('/image/home/hero-sm.jpg')",
            }),

            colors: {
                primary: "#FFB100",
                secondary: "#25283d",
                dark: "#1F1F1F",
                lightOrange: "#ffb042",
                third: "#ffebe7",
                pink: "#FE9399",
            },
            fontFamily: {
                sans: ["Poppins"],
            },
            minHeight: {
                544: "544px",
            },
            width: {
                97: "97%",
            },
        },
    },
    variants: {},
    plugins: [],
};
