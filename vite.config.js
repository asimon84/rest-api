import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";
import DataTable from 'datatables.net-dt';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/dashboard.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
        DataTable(),
    ],
    server: {
        cors: true,
    },
});