import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    build: {
        outDir: "../../public/build-applayoutvue",
        emptyOutDir: true,
        manifest: "manifest.json",
    },
    plugins: [
        laravel({
            publicDirectory: "../../public",
            buildDirectory: "build-applayoutvue",
            input: [
                __dirname + "/resources/assets/sass/app.scss",
                __dirname + "/resources/assets/js/app.js",
            ],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            "@": __dirname + "/resources/assets/js",
        },
    },
});
