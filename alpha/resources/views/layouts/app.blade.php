<!DOCTYPE html>
<html lang="ar">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php

$iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();
$headericon = DB::table('favoriteicons')->where('name', '=', 'header')->get();
$footericon = DB::table('favoriteicons')->where('name', '=', 'footer')->get();
$socials = DB::table('socials')->where('status', '=', '1')->get();
$connectwithus = DB::table('connect_with_us')->get();
$branche = DB::table('branches')->get();
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>


<head>
    <meta name="viewport">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @foreach ($iconfav as $iconfavs)
        <link rel="icon" type="image/x-icon" href="{{ asset('img/Favoriteicon/' . $iconfavs->img) }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('img/Favoriteicon/' . $iconfavs->img) }}">
    @endforeach

    <title>{{ config('app.name', 'ALPHA') }}</title>

    <!-- Fonts -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--  --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/button.js', 'resources/css/custom.css', 'resources/css/login.css', 'resources/css/vedio.css', 'resources/css/regestar.css', 'resources/css/order.css', 'resources/css/midia.css', 'resources/css/mediaipad.css'])



    </style>
</head>
<?php
$stylehome = '';
$stylecour = '';
$styleabout = '';
$stylecontactus = '';
if ($_SERVER['REQUEST_URI'] == '/') {
    $stylehome = 'reg';
} elseif ($_SERVER['REQUEST_URI'] == '/courses') {
    $stylecour = 'reg';
} elseif ($_SERVER['REQUEST_URI'] == '/about') {
    $styleabout = 'reg';
} elseif ($_SERVER['REQUEST_URI'] == '/Connectus') {
    $stylecontactus = 'reg';
}
?>


<body>

    <div id="app">

        {{-- @if ($agent->isDesktop()) --}}
        <div class="nav-background">

            <nav class="navbar navbar-home navbar-expand-lg navbar-dark">
                <div class="container-fluid">

                    @foreach ($headericon as $headericons)
                        <a class="navbar-brand" style="margin-right: 15vw" href="{{ url('/') }}"
                            aria-label="Read more about Seminole tax hike"><img
                                src="{{ asset('img/Favoriteicon/' . $headericons->img) }}" alt=""></a>
                    @endforeach
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav links justify-content-center navbar-collapse mb-2 mb-lg-0">
                            <li class="nav-item-home">
                                <a id="home" class="nav-link reghover {{ $stylehome }} active " tabindex="1"
                                    aria-current="page" href="{{ url('/') }}">الرئيسية</a>
                            </li>
                            <li class="nav-item-home">
                                <a class="nav-link  {{ $stylecour }} reghover active" href="{{ url('/courses') }}">

                                    الدورات</a>
                            </li>
                            <li class="nav-item-home">
                                <a class="nav-link {{ $styleabout }} reghover active "
                                    href="{{ url('/about') }}">حول
                                    الفا</a>

                            </li>
                            <li class="nav-item-home">
                                <a class="nav-link {{ $stylecontactus }} reghover active"
                                    href="{{ url('/Connectus') }}">اتصل
                                    بنا</a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item-home">
                                        <label class="btn-success  regester btn-lg reg " aria-current="page"
                                            for="modal-toggle-regester">تسجيل </label>
                                        <label class="nav-link  active " id="login-nav" aria-current="page"
                                            for="modal-toggle">تسجيل الدخول</label>


                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item-home">
                                    <li> </li>
                                    </li>
                                @endif
                                </li>
                            @else
                                <li class="nav-item-home dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dir dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">

                                            {{ __(' الملف الشخصي') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            {{ __('تسجيل الخروج') }}
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>

                                </li>
                            @endguest

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        {{-- @endif --}}
        {{-- @if ($agent->isMobile())
        <nav class="navbar  navbar-expand-lg navbar-dark 
                bg-dark border-bottom-0">
            <!-- Navbar toggle button (hamburger icon) -->
            <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebar" aria-controls="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            @foreach ($headericon as $headericons)
                <a class="navbar-brand" href="{{ url('/') }}" aria-label="Read more about Seminole tax hike"><img
                        src="{{ asset('img/Favoriteicon/' . $headericons->img) }}" alt=""></a>
            @endforeach
        </nav>

        <div class="offcanvas offcanvas-start 
                bg-light d-md-block" tabindex="-1" id="sidebar"
            aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-dark">ALPHA</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                </button>
            </div>
            <div class="offcanvas-body ">
                <ul class="nav flex-column ">
                    <li class="nav-item">
                        <a id="home" class="nav-link   text-dark  active " tabindex="1" aria-current="page"
                            href="{{ url('/') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-dark  active" href="{{ url('/courses') }}">

                            الدورات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark  active " href="{{ url('/about') }}">حول
                            الفا</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark  active" href="{{ url('/Connectus') }}">اتصل
                            بنا</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <label class="nav-link text-dark  active " aria-current="page"
                                    for="modal-toggle-regester">تسجيل
                                </label>
                                <label class="nav-link text-dark active " aria-current="page" for="modal-toggle">تسجيل
                                    الدخول</label>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item-home">
                            <li> </li>
                            </li>
                        @endif
                        </li>
                    @else
                        <li class="nav-item-home dropdown active">
                            <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dir dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">

                                    {{ __(' الملف الشخصي') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>

                        </li>
                    @endguest

                </ul>

            </div>
        </div>
    </div>

    </nav>


    @endif --}}
        {{--  --}}

        <main class="">

            @yield('content')
        </main>
    </div>
</body>

{{-- foter --}}
<!-- Remove the container if you want to extend the Footer to full width. -->

<div class="footer   ">

    <footer class=" text-center  ">
        <!-- Grid container -->
        <div class=" p-4">
            <!--Grid row-->
            <div class="row ">
                <!--Grid column-->
                <div class="col-lg-3 ">

                    <div class="rounded-circle  d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;margin:auto">
                        @foreach ($footericon as $footericons)
                            <img src="{{ asset('img/Favoriteicon/' . $footericons->img) }}" alt=""
                                loading="lazy" />
                        @endforeach

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 ">
                    <ul class="list-unstyled  marginauto">
                        @foreach ($socials as $socialss)
                            <li class="mb-4">

                                <p style="text-align: justify" class=" dir"> <img class="imgfooter"
                                        src="{{ asset('img/socials/' . $socialss->img) }}"
                                        alt="{{ $socialss->name }}">

                                    <a target="_blank" href="{{ $socialss->url }}"
                                        class="text-white ">{{ $socialss->nameofpage }}</a>
                                </p>

                            </li>
                        @endforeach

                    </ul>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                @windowWidthGreaterThan(1029)
                <div class="col-lg-3 ">

                    <ul class="list-unstyled ">
                        <li class="mb-3">
                            <a href="{{ url('/') }}" class="text-white"><i></i>الرئيسيّة</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/courses') }}" class="text-white "><i></i>الدورات</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/about') }} "class="text-white"><i></i>حول ألفا</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/Connectus') }}" class="text-white"><i></i>اتصل بنا</a>
                        </li>
                    </ul>
                </div>
                @endif
                @windowWidthBetween(0, 1028)
                <div class="col-lg-3 ">

                    <ul class="mt-5 mb-5 ">
                        <a class="mb-3">
                            <a href="{{ url('/') }}" class="text-white "><i></i>الرئيسيّة</a>
                        </a>
                        <a class="mb-3">
                            <a href="{{ url('/courses') }}" class="text-white  mr-2"><i></i>الدورات</a>
                        </a>
                        <a class="mb-3">
                            <a href="{{ url('/about') }} "class="text-white mr-2"><i></i>حول ألفا</a>
                        </a>
                        <a class="mb-3">
                            <a href="{{ url('/Connectus') }}" class="text-white mr-2"><i></i>اتصل بنا</a>
                        </a>
                    </ul>
                </div>
                @endif
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 ">

                    <ul class="">
                        <li>
                            <p class="text-white"><i class="fas fa-map-marker-alt  pe-2"></i>تواصل معنا وابدأ رحلتـك
                            </p>
                            <p class="text-white"><i class="fas fa-map-marker-alt pe-2"></i>للحصول على مُعدّل 99.7</p>
                        </li>
                        @foreach ($connectwithus as $connectwithus)
                            <li>
                                <p class="text-white"><i class="fas"></i>{{ $connectwithus->email }}</p>
                            </li>
                            <li>

                                <p class="text-white" style="direction: ltr;">{{ $connectwithus->phone }}</p>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center ">
            Copyright © 2024 alpha All Rights Reserved.
        </div>
        <!-- Copyright -->
    </footer>
</div>

<!-- End of .container -->
<!-- Footer -->


{{-- login --}}

{{--  --}}
{{--  --}}
<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Login Form Popup HTML -->

                <input id="modal-toggle" type="checkbox">
                <label class="modal-backdrop" for="modal-toggle"></label>
                <div class="modal-content-login">
                    <label class="modal-close-btn" for="modal-toggle">
                        <svg width="30" height="30">
                            <line x1="5" y1="5" x2="20" y2="20" />
                            <line x1="20" y1="5" x2="5" y2="20" />
                        </svg>
                    </label>
                    <div class="tabs">
                        <!--  LOG IN  -->
                        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
                            <div class="col-12 col-lg-6">
                                <div class="row justify-content-xl-center">
                                    <div class="col-12 col-xl-10">
                                        <div class="d-flex mb-5">
                                            <div class="justify-content-xl-center  ">
                                                <div class="d-flex ">
                                                    {{-- @foreach ($slider as $slider) --}}
                                                    <img class="img-fluid  p-2" src="img/login.png" alt="">
                                                    {{-- @endforeach --}}
                                                    <div class="ml-auto p-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex contact-info">

                                            <div class="dir">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 dir">
                                <p class="mb-3 dir text-center font18px ">مرحباً بك في ألفا</p>
                                <p class="dir text-center font14px ">أنتَ الآن أحد المشاركين في رحلة الـ 99.7
                                </p>
                                @error('email')
                                    @if ($message == 'يرجى التاكد من المعلومات المدخلة ')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        <script>
                                            $('#modal-toggle').click();
                                        </script>
                                    @endif
                                @enderror
                                {{-- @error('password')
                                  @if ($message == '!يرجى التاكد من المعلومات المدخلة ')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                    <script>
                                        $('#modal-toggle').click();
                                    </script>
                                    @endif
                                @enderror  --}}
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @elseif (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="row gy-4 gy-xl-2 p-4 p-xl-5">
                                        <div class="col-12 inpout-email">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="" placeholder="الايميل" required>
                                            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

                                        </div>
                                        <div class="col-12 inpout-email">
                                            <input type="password" class="form-control" id="password"
                                                name="password" value="" placeholder="كلمة المرور" required>

                                        </div>
                                        <div class="col-12 inpout-email">
                                            <button type="submit" class="btn-login form-control">تسجيل
                                                الدخول</button>
                                        </div>
                                        <div class="col-12">

                                            <label class="nav-link active regester-model col-6" id=""
                                                aria-current="page" for="modal-toggle-regester">انشاءحساب
                                            </label>
                                            <label class="nav-link active regester-model col-6" id=""
                                                aria-current="page" for="modal-toggle-regester">هل نسيت كلمة المرور
                                            </label>



                                        </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->







    {{-- regester --}}



    {{--  --}}
</section>

{{--  --}}
<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Login Form Popup HTML -->

                <input id="modal-toggle-regester" style='display:none' type="checkbox">
                <label class="modal-backdrop" for="modal-toggle-regester"></label>
                <div class="modal-content">
                    <label class="modal-close-btn" for="modal-toggle-regester">
                        <svg width="30" height="30">
                            <line x1="5" y1="5" x2="20" y2="20" />
                            <line x1="20" y1="5" x2="5" y2="20" />
                        </svg>
                    </label>
                    <h1 class="mb-3 dir text-center ">مرحباً بك في ألفا</h6>
                        <p class="mb-3 dir text-center ">أنشئ حسابك وتابع دروسك بشكل إلكترونيّ وبجودة
                            عالية
                        </p>
                        <div class="row justify-content-around">
                            <div class="col-12 col-md-5">
                                @error('password_verified_at')
                                    @if ($message == 'كلمة المرور غير متطابقة')
                                        <div class="alert alert-danger">{{ $message }}</div>

                                        <script>
                                            $('#modal-toggle-regester').click();
                                        </script>
                                    @endif
                                @enderror
                            </div>
                            <div class="col-12 col-md-5">
                                @error('email')
                                    @if ($message == 'الايميل المدخل مستخدم ')
                                        <div class="alert alert-danger">{{ $message }}</div>

                                        <script>
                                            $('#modal-toggle-regester').click();
                                        </script>
                                    @endif
                                @enderror
                            </div>
                        </div>


                        <!--  regester  -->
                        <form class="contectus-form dir" method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>

                            @endif --}}

                            <div class="row gy-4 gy-xl-2 p-4 p-xl-5 d-flex justify-content-around">


                                <div class="col-12 col-md-8">
                                    <label for="email" class="form-label"> <span
                                            class="text-danger"></span></label>
                                    <input type="text" class="form-control " placeholder="الإسم الرباعي"
                                        id="name" name="name" value="" required>
                                </div>


                                <div class="col-12 col-md-5">
                                    <label for="fname" class="form-label"> <span
                                            class="text-danger"></span></label>
                                    <div class="input-group">

                                        <select class="form-control  " name="Governorate" id="Governorate">
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="الخليل" required>
                                                الخليل
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="القدس" required>
                                                القدس
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="اريحا" required>
                                                اريحا
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="رام الله والبيرة" required>
                                                رام الله والبيرة
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="بيت لحم" required>
                                                بيت لحم
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="طوباس" required>
                                                طوباس
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="جنين" required>
                                                جنين
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="نابلس" required>
                                                نابلس
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="قلقيلة" required>
                                                قلقيلة
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="سلفيت" required>
                                                سلفيت
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="طولكرم" required>
                                                طولكرم
                                            </option>
                                            <option placeholder=" " id="Governorate" name="Governorate"
                                                value="قطاع غزة" required>
                                                قطاع غزة
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                {{-- 
                                 <input type="fname" class="form-control" placeholder="المحافظة"
                                            id="Governorate" name="Governorate" value="" required>
                                <div class="col-12 col-md-8 select1">
                                        <label for="email" class="form-label"> <span
                                                class="text-danger"></span></label>
                                        <select class="form-control  " name="course" id="course">
                                            <option placeholder=" " id="course" name="course" value="الخليل"
                                                required>
                                                الخليل
                                            </option>
                                        </select>
                                    </div> --}}
                                <div class="col-12 col-md-5 float-reg dir ">
                                    <label for="fname" class="form-label"> <span
                                            class="text-danger"></span></label>
                                    <div class="input-group  form-control dir ">
                                        <label for="" class="form-check-label" for="inlineCheckbox1">الفرع
                                            :</label>
                                        @foreach ($branche as $branches)
                                            {{-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="branch"
                                                    id="branch1" value="{{ $branches->name }}">
                                                <label class="form-check-label1"
                                                    for="inlineRadio1">{{ $branches->name }}</label>
                                            </div> --}}
                                            <div class="form-check "
                                                style="text-align: right;position: inherit;  direction: rtl;
    unicode-bidi: bidi-override;">
                                                <input
                                                    className="form-check-input appearance-none rounded-full h-7 w-7 border-4 border-[#5F6368] bg-[#C4C4C4] hover:shadow-lg hover:shadow-[#5F6368] hover:border-[#3B52B5] checked:bg-[#7EABFF] checked:border-[#3B52B5] focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-5 cursor-pointer"
                                                    type="radio" name="branch" id="branch"
                                                    value="{{ $branches->name }}">
                                                <label class="form-check-label" for="option-">
                                                    {{ $branches->name }} </label>

                                            </div>
                                        @endforeach

                                        {{-- <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                id="branch1" value="ادبي">
                                            <label class="form-check-label1" for="inlineRadio1">ادبي</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                id="branch2" value="علمي">
                                            <label class="form-check-label2" for="inlineRadio1">علمي</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                id="branch3" value="صناعي">
                                            <label class="form-check-label3" for="inlineRadio1">صناعي</label>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="الايميل"
                                            id="email" name="email" required value=" ">
                                    </div>

                                </div>
                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="رقم الهاتف"
                                            id="phone" name="phone" required value="">
                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input name="password" type="password" required
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="newPasswordInput" placeholder="كلمة المرور ">

                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input name="password_verified_at" type="password" required
                                            class="form-control" id="confirmNewPasswordInput"
                                            placeholder="تاكيد كلمة المرور">

                                    </div>
                                </div>
                                <div class="col-12 col-md-12 d-flex but-regester justify-content-center">
                                    <input type="checkbox" name="polices" value="accept" required>
                                    <label class="font18px " style="margin-right: 2%" for="vehicle1"> اوافق على سياسة
                                        الشروط والاحكام والخصوصية</label><br>

                                </div>
                                <div class="col-12 col-md-12 d-flex justify-content-center">
                                    <p class="font14px" style="color: green" for="vehicle1">يجب قراءة سياسة الشروط
                                        والاحكام والخصوصية قبل التسجيل</p><br>

                                </div>
                                <div class="col-12 col-md-4 d-flex  justify-content-center">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <button type="submit" class="btn contectus-form-but ">إنشاء
                                        الحساب</button>
                                </div>


                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- @if (1 == 1)
        <script type="text/javascript">
            $(function() {
                $('#modal-toggle').modal('show');
            });
        </script>
    @endif --}}
    <!-- partial -->


    {{-- @if (1 == 1)
            <script>
                $('#modal-toggle-regester').modal('show');
            </script>
        @endif --}}




    {{-- regester --}}



    {{--  --}}
</section>
{{--  --}}
@livewireScripts


</body>


</html>
<script>
    // Change the second argument to your options:
    // https://github.com/sampotts/plyr/#options
    const player = new Plyr('video', {
        captions: {
            active: true
        }
    });

    // Expose player so it can be used from the console
    window.player = player;
    const myModalEl = document.getElementById('myModal')
    const modal = new mdb.Modal(myModalEl)
    modal.show()

    document.querySelector(".links").onclick = ev => {
        if (ev.target.tagName == "A")
            ev.target.className = "done"
    }
    jQuery(function($) {
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();

        $(window).resize(function() {
            if (windowWidth != $(window).width() || windowHeight != $(window).height()) {
                location.reload();
                return;
            }
        });
    });
</script>
