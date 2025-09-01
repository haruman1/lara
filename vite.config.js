import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/prelineui.css",
                "resources/js/prelinejs.js",
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/upload.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
