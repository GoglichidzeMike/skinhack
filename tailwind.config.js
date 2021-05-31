module.exports = {
    purge: {
        enabled: true,
        content: [
            "./resources/css.app.css",
            "./resources/js/app.js",
            "./resources/views/home.blade.php",
            "./resources/views/dashboard.blade.php",
            "./resources/views/auth/login.blade.php",
            "./resources/views/auth/register.blade.php",
            "./resources/views/dashboard/assessment/index.blade.php",
            "./resources/views/dashboard/assessment/show.blade.php",
            "./resources/views/dashboard/leads/index.blade.php",
            "./resources/views/dashboard/leads/show.blade.php",
            "./resources/views/layouts/home.blade.php",
            "./resources/views/layouts/app.blade.php",
            "./resources/views/includes/contact.blade.php",
            "./resources/views/includes/quiz.blade.php",
        ],
    },
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
            letterSpacing: {
                widestXl: "0.35em",
            },
        },
    },
    variants: {},
    plugins: [],
};
