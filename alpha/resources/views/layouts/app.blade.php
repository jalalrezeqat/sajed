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
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img  class="nav-link active" aria-current="page" class="img" src="img/logo.png" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse collapse navbar-collapse justify-content-center d-flex " id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                   
                    <li class="nav-item">
                        <a  class="nav-link active"   aria-current="page" href="{{ url('/') }} ">الرئيسية</a>       
                    </li>
                    <li class="nav-item">
                    <a  class="nav-link active" aria-current="page" href="">حول الفا</a>       
                     </li>
                    <li class="nav-item">
                    <a  class="nav-link active" aria-current="page"href="">الدورات</a>
                    </li>
                    <li class="nav-item">
                    <a  class="nav-link active" aria-current="page" href="">اتصل بنا</a>
                    </li>
                    <li>
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a  class=" nav-link active"  aria-current="page" href="{{ route('register') }} ">تسجيل</a>
    
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    {{-- login --}}

    {{--  --}}
</body>
</html>
