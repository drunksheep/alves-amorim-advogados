import { resolve } from 'path'
import { defineConfig } from 'vite'
import babel from 'vite-plugin-babel'

export default defineConfig({
    root: './',
    base: '/',
    plugins: [
        babel(),
    ],
    css: {
        postcss: './postcss.config.js',
    },
    build: {
        rollupOptions: {
            input: resolve(__dirname, 'src/assets/main.ts'),
            output: {
                entryFileNames: 'assets/main.js',
                chunkFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name][extname]',
            },
        },
        watch: {
            include: ['src/assets/**'],
            ignored: ['**/node_modules/**', '**/dist/**']
        },
        minify: 'esbuild'
    },
    resolve: {
        alias: {
            '@': '/src',
        },
    },
    optimizeDeps: {
        esbuildOptions: {
            target: 'es6',
        },
    },
})