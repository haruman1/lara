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
                "resources/js/app.min.js",
                "resources/js/upload.js",
                "resources/js/bahasa.js",
                "resources/js/theme.js",
                "resources/js/scrollspy.js",
                "resources/js/dropdown.js",
                "resources/js/admin.js",
                "resources/css/blog.css",
                "resources/css/filament/admin/theme.css",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
