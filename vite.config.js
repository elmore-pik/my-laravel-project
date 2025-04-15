import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
<<<<<<< HEAD
=======
        tailwindcss(),
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)
    ],
});
