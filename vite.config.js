import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import { loadEnv } from 'vite';

const env = loadEnv(process.env.NODE_ENV, process.cwd());
process.env = { ...process.env, ...env };

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: process.env.VITE_HOST || 'localhost',
        port: parseInt(process.env.VITE_PORT, 10) || 3000,
        https: {
            key: fs.readFileSync(process.env.VITE_SSL_KEY),
            cert: fs.readFileSync(process.env.VITE_SSL_CERT),
        },
        hmr: false,
    },
});
