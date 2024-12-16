import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#1E40AF', // Deep blue for primary buttons, links
                secondary: '#9333EA', // Purple for accents
                accent: '#F59E0B', // Amber for highlights
                muted: '#6B7280', // Muted gray for subtle text
                background: '#F9FAFB', // Light gray background
            },
            spacing: {
                '128': '32rem', // For wide cards or large sections
                '144': '36rem',
            },
            borderRadius: {
                xl: '1rem', // For smoother rounded cards
                '2xl': '1.5rem',
            },
            boxShadow: {
                card: '0 4px 6px rgba(0, 0, 0, 0.1)', // For a modern card shadow
                cardHover: '0 8px 12px rgba(0, 0, 0, 0.15)', // On hover
            },
        },
    },

    plugins: [
        forms, 
        typography,
        function ({ addUtilities }) {
            addUtilities({
                '.text-shadow': {
                    textShadow: '2px 2px 4px rgba(0, 0, 0, 0.1)',
                },
                '.text-shadow-lg': {
                    textShadow: '4px 4px 8px rgba(0, 0, 0, 0.15)',
                },
            });
        },
    ],
};
