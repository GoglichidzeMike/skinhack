module.exports = {
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            backgroundImage: (theme) => ({
                "hero-bg": "url('/image/home/hero-bg.jpg')",
            }),
            colors: {
                primary: "#FFB100",
                secondary: "#25283d",
                dark: "#1F1F1F",
                third: "#ffebe7",
            },
            fontFamily: {
                sans: ["Poppins"],
            },
            minHeight: {
                544: "544px",
            },
        },
    },
    variants: {},
    plugins: [],
};
