import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/kontrahenci.js',
                'resources/js/pracownicy.js',
                'resources/js/faktury.js'
            ],
            refresh: true,
        }),
    ],
});
