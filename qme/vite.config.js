import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    css: {
      preprocessorOptions: {
        scss: {
          loadPaths: ['resources/css'],
        },
      },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
