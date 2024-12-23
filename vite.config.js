import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Adjust as needed
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Ensures assets are built in the right directory
    },
    base: process.env.APP_URL || '/',
});
