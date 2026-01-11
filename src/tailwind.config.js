/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // Дополнительные цвета
            colors: {
                'brand': {
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                    800: '#075985',
                    900: '#0c4a6e',
                },
            },
            // Анимации
            animation: {
                'fade-in': 'fadeIn 0.5s ease-in',
                'slide-up': 'slideUp 0.5s ease-out',
                'bounce-slow': 'bounce 3s infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
            },
        },
    },
    plugins: [
        require('daisyui'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    primary: "#0ea5e9",
                    secondary: "#06b6d4",
                    accent: "#f59e0b",
                    neutral: "#1f2937",
                    "base-100": "#ffffff",
                    info: "#3b82f6",
                    success: "#10b981",
                    warning: "#f59e0b",
                    error: "#ef4444",
                },
                dark: {
                    ...require("daisyui/src/theming/themes")["dark"],
                    primary: "#0ea5e9",
                    secondary: "#06b6d4",
                    accent: "#f59e0b",
                    neutral: "#1f2937",
                    "base-100": "#1e293b",
                    info: "#3b82f6",
                    success: "#10b981",
                    warning: "#f59e0b",
                    error: "#ef4444",
                },
            },
        ],
        darkTheme: "dark",
        base: true,
        styled: true,
        utils: true,
        rtl: false,
        prefix: "",
        logs: true,
    },
}
