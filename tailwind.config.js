/** @type {import('tailwindcss').Config} */
import daisyui from "daisyui"

export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue",], theme: {
        extend: {},
    }, plugins: [daisyui,], daisyui: {
        themes: [{
            juno: {
                "primary": "#3b82f6",
                "primary-content": "#f3f4f6",
                "secondary": "#0ea5e9",
                "secondary-content": "#f3f4f6",
                "accent": "#ec4899",
                "accent-content": "#f3f4f6",
                "neutral": "#e5e7eb",
                "neutral-content": "#4b5563",
                "base-100": "#f3f4f6",
                "base-200": "#e5e7eb",
                "base-300": "#d1d5db",
                "base-content": "#374151",
                "info": "#38bdf8",
                "info-content": "#f3f4f6",
                "success": "#34d399",
                "success-content": "#f3f4f6",
                "warning": "#fbbf24",
                "warning-content": "#374151",
                "error": "#e11d48",
                "error-content": "#f3f4f6",

                "--rounded-box": "2rem", // border radius rounded-box utility class, used in card and other large boxes
                "--rounded-btn": "1.7rem", // border radius rounded-btn utility class, used in buttons and similar element
                "--rounded-badge": "1.9rem", // border radius rounded-badge utility class, used in badges and similar
                "--animation-btn": "0.30s", // duration of animation when you click on button
                "--animation-input": "0.2s", // duration of animation for inputs like checkbox, toggle, radio, etc
                "--btn-focus-scale": "0.95", // scale transform of button when you focus on it
                "--border-btn": "3px", // border width of buttons
                "--tab-border": "1px", // border width of tabs
                "--tab-radius": "1.5rem", // border radius of tabs
            },
        },
        ],
    },
}

