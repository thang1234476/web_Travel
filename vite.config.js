import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/css/admin/header.css',
                'resources/css/admin/menu.css',
                'resources/css/admin/index.css',
                'resources/css/admin/footer.css',
                'resources/css/admin/style.css'],
            refresh: true,
        }),
    ],
});
