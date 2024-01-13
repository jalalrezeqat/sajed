<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css','resources/css/login.css'])
        @vite(['resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css', 
        'resources/admin/assets/vendors/css/vendor.bundle.base.css',
        'resources/admin/assets/css/style.css',
        'resources/admin/assets/images/favicon.ico',
        'resources/css/custom.css'
        ])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('admin.layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{-- {{ $header }} --}}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            
        </div>

        @vite(['resources/admin/assets/vendors/js/vendor.bundle.base.js',
        'resources/admin/assets/vendors/chart.js/Chart.min.js',
        'resources/admin/assets/js/jquery.cookie.js',
        'resources/admin/assets/js/off-canvas.js',
        'resources/admin/assets/js/hoverable-collapse.js',
        'resources/admin/assets/js/misc.js',
        'resources/admin/assets/js/dashboard.js',
        'resources/admin/assets/js/todolist.js',
    
    
    
    ])
    </body>
</html>
</nav>