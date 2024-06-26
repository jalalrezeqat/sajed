import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/mediaipad.css',
                'resources/sass/app.scss',
                'resources/js/button.js',
                'resources/css/custom.css',
                'resources/css/login.css',
                'resources/css/vedio.css',
                'resources/css/regestar.css',
                'resources/css/order.css',
                'resources/css/midia.css',
                'resources/css/mediaipad.css',
                'resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css',
                'resources/admin/assets/vendors/css/vendor.bundle.base.css',
                'resources/admin/assets/css/style.css',
                'resources/admin/assets/images/favicon.ico',
                'resources/css/custom.css',
                'resources/admin/assets/vendors/js/vendor.bundle.base.js',
                'resources/admin/assets/vendors/chart.js/Chart.min.js',
                'resources/admin/assets/js/jquery.cookie.js',
                'resources/admin/assets/js/off-canvas.js',
                'resources/admin/assets/js/hoverable-collapse.js',
                'resources/admin/assets/js/misc.js',
                'resources/admin/assets/js/dashboard.js',
                'resources/admin/assets/js/todolist.js'

            ],
            refresh: true,
        }),
    ],
});


'resources/admin/assets/vendors/js/vendor.bundle.base.js', 'resources/admin/assets/vendors/chart.js/Chart.min.js', 'resources/admin/assets/js/jquery.cookie.js', 'resources/admin/assets/js/off-canvas.js', 'resources/admin/assets/js/hoverable-collapse.js', 'resources/admin/assets/js/misc.js', 'resources/admin/assets/js/dashboard.js', 'resources/admin/assets/js/todolist.js'
