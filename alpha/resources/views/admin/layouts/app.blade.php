<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/img/fiveicon.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>{{ config('app.name', 'Admin Panel ALPHA') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript" src="https://cdn.bitmovin.com/player/web/8/bitmovinplayer.js"></script>
    <script type="text/javascript" src="https://cdn.bitmovin.com/analytics/web/beta/2/bitmovinanalytics.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css', 'resources/admin/assets/vendors/css/vendor.bundle.base.css', 'resources/admin/assets/css/style.css', 'resources/admin/assets/images/favicon.ico', 'resources/css/custom.css'])

</head>

<body class="dir">
    <div class="container-scroller  ">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}"><img src="/img/fiveicon.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown ">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ Auth::guard('admin')->user()->name }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown nav-item nav-profile dropdown"
                            aria-labelledby="profileDropdown">
                            <form method="get" class="dropdown-item" action="">
                                @csrf
                                <button class="dropdown-item text-primary">الملف الشخصي </button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <form method="POST" class="dropdown-item" action="{{ route('admin.logout') }}">
                                @csrf
                                <button class="dropdown-item text-primary">تسجيل الخروج</button>
                            </form>
                        </div>
                    </li>

                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">{{ Auth::guard('admin')->user()->name }}</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <span class="menu-title font-weight-bold mb-2">لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.branch') }}">
                            <span class="menu-title font-weight-bold mb-2">الفروع</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">الدورات</span>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.courses') }}">اضافة
                                        دورة</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.codegenaret') }}">انشاء
                                        كود </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.teacher') }}">اضافة
                                        معلم</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.questionscours') }}">اضافة اسئلة شائعة</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.categories.index') }}">اضافة
                                        اختبار </a></li>

                                {{-- <li class="nav-item"> <a class="nav-link" href="{{route('admin.quiz')}}">اضافة اختبار  </a></li> --}}
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.order') }}">
                            <span class="menu-title font-weight-bold mb-2">طلبات البطاقات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#slider" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">سلايدر</span>
                        </a>
                        <div class="collapse" id="slider">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.slider') }}">سلايدر
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.sliderteacher') }}">سلايدر المعلم </a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#Favoriteicon" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">حول الموقع</span>
                        </a>
                        <div class="collapse" id="Favoriteicon">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.Favoriteicon') }}">ايقونة
                                        مفضلة
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.socials') }}">مواقع
                                        تواصل الاجتماعي</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.ConnectWithUs') }}">معلومات الموقع
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.policies') }}">سياسات الموقع
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.teacher.dashbord') }}">انشاء
                                        مدرس
                                    </a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#chart" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">تحليل</span>
                        </a>
                        <div class="collapse" id="chart">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.dashbord.studant') }}">معلومات
                                        الطلاب
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.dashbord.coures') }}">الدورات</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('admin.dashbord.countstudant') }}"> عدد الدورات التي يشترك فيها
                                        كل
                                        طالب
                                    </a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.about') }}">
                            <span class="menu-title font-weight-bold mb-2">حول المنصة</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.CommonQuestions') }}">
                            <span class="menu-title font-weight-bold mb-2">الاسئلة الشائعة</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.Connectus') }}">
                            <span class="menu-title font-weight-bold mb-2">اتصل بنا</span>
                        </a>
                    </li>



                </ul>
            </nav>
            <main class="main-panel">
                @yield('content')
            </main>
        </div>

    </div>

</body>

</html>


@vite(['resources/admin/assets/vendors/js/vendor.bundle.base.js', 'resources/admin/assets/vendors/chart.js/Chart.min.js', 'resources/admin/assets/js/jquery.cookie.js', 'resources/admin/assets/js/off-canvas.js', 'resources/admin/assets/js/hoverable-collapse.js', 'resources/admin/assets/js/misc.js', 'resources/admin/assets/js/dashboard.js', 'resources/admin/assets/js/todolist.js'])

<script>
    $('#summernote').summernote();
</script>





{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('admin.dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('admin.dashboard')" :active="
                        request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::guard('admin')->user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                     
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('admin.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.dashboard')" :active="
                request()->routeIs('admin.dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::guard('admin')->user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::guard('admin')->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('admin.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
 --}}




{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css','resources/css/login.css'])
        @vite(['resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css', 
        'resources/admin/assets/vendors/css/vendor.bundle.base.css',
        'resources/admin/assets/css/style.css',
        'resources/admin/assets/images/favicon.ico',
        'resources/css/custom.css'
        ]) --}}


{{--        --}}
