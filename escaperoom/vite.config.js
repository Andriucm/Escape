// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
export default defineConfig({
    // server: {
    //     port: 8000
    //   },
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/js/app.js'],
            refresh: true,

        }),
        vue({
            template: {
                transformAssetUrls:{
                    base: null,
                    includeAbsolute: false,

                }
            }
        }),
    ],
});
