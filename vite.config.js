import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'node:path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/admin/js/app.js',
                'resources/admin/scss/app.scss',

            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'jquery': path.resolve(__dirname, 'node_modules/jquery'),
            '~swiper': path.resolve(__dirname, 'node_modules/swiper'),

        }
    },
});

