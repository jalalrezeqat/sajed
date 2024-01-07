<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ALPHA') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 
  {{--  --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/custom.css','resources/css/login.css'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg  navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="img/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center navbar-collapse mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="{{ url('/') }}"><button class="btn btn-success reg">الرئيسية</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/courses') }}">الدورات</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">حول الفا</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Connectus') }}">اتصل بنا</a>
                  </li>
                  @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a  class=" nav-link active "  aria-current="page" href="{{ route('register') }} "><button class="btn btn-success reg">تسجيل</button></a>
      
                          <a   class="nav-link active" aria-current="page" href="{{ route('login') }}" >تسجيل الدخول </a>
                      </li>
                  @endif
      
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <li> </li>
                      </li>
                  @endif
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
      
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
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
          </nav>
        <main class="">
            @yield('content')
        </main>
    </div>


    {{-- foter --}}
   <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="footer carousel slide ">

  <footer class=" text-center container  text-white">
    <!-- Grid container -->
    <div class=" p-4">
      <!--Grid row-->
      <div class="row ">
        <!--Grid column-->
        <div class="col-lg-3 ">

          <div class="rounded-circle  d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="img/logofooter.jpeg" height="70" alt=""
                 loading="lazy" />
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 ">

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>منصّة ألفا - alpha.ps</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i> alpha.ps</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>منصّة ألفا - alpha.ps</a>
            </li>
        
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 ">

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="{{ url('/') }}" class="text-white"><i class="fas fa-paw pe-3"></i>الرئيسيّة</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>الدورات</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>حول ألفا</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>اتصل بنا</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 ">

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>تواصل معنا وابدأ رحلتـك</p>
              <p><i class="fas fa-map-marker-alt pe-2"></i>للحصول على مُعدّل 99.7</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i>info@alpha.ps</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>(+970) 597-618-504</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center " >
      Copyright © 2024 alpha All Rights Reserved. 
       </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->
    <!-- Footer -->


    {{-- login --}}

    {{--  --}}
</body>
</html>
