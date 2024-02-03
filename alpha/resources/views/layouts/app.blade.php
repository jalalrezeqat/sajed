<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="img/fiveicon.png">

    <title>{{ config('app.name', 'ALPHA') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 
  {{--  --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/button.js','resources/css/custom.css','resources/css/login.css','resources/css/regestar.css'])
</head>
<body>
    <div id="app">
      
        <nav class="navbar navbar-home navbar-expand-lg  navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="img/fiveicon.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center navbar-collapse mb-2 mb-lg-0">
                  <li class="nav-item-home">
                    <a class="nav-link active " aria-current="page" href="{{ url('/') }}"><button class="btn btn-success btn-lg reg">الرئيسية</button></a>
                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link"  href="{{ url('/courses') }}">الدورات</a>
                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link" href="{{ url('/about') }}">حول الفا</a>

                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link" href="{{ url('/Connectus') }}">اتصل بنا</a>
                  </li>
                  @guest
                  @if (Route::has('login'))
                      <li class="nav-item-home">
                        <label class="btn-success regester btn-lg reg "  aria-current="page" for="modal-toggle-regester">تسجيل </label>  
                        <label class="nav-link active "  id="login-nav" aria-current="page" for="modal-toggle">تسجيل الدخول</label>  


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
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->farestname .' '. Auth::user()->lastname}}
                      </a>
      
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('dashboard')}}">
                            
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
{{--  --}}
<section>
  <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">
            
      <!-- Login Form Popup HTML -->
            
  <input id="modal-toggle" type="checkbox">
  <label class="modal-backdrop" for="modal-toggle"></label>
  <div class="modal-content">
      <label class="modal-close-btn" for="modal-toggle">
        <svg width="30" height="30">
          <line x1="5" y1="5" x2="20" y2="20"/>
          <line x1="20" y1="5" x2="5" y2="20"/>
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
                {{-- @foreach($slider as $slider) --}}
              <img class="img-fluid  p-2" src="img/login.png"  alt="" >
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
      <h1 class="mb-3 dir text-center ">مرحباً بك في ألفا</h6>
      <h6 class="dir text-center ">أنتَ الآن أحد المشاركين في رحلة الـ 99.7</h4>
        <form method="POST" action="{{ route('login') }}">
          @csrf
        <div class="row gy-4 gy-xl-2 p-4 p-xl-5">
            <div class="col-12 inpout-email">
              <i class="fa fa-user icon"></i>
              <input  type="email" class="form-control" id="email" name="email" value="" placeholder="الايميل" required >
            </div>
            <div class="col-12 inpout-email">
              <input type="password" class="form-control" id="password" name="password" value="" placeholder="كلمة المرور" required>
            </div>
            <div class="col-12 inpout-email">
              <button type="submit" class="btn-login form-control">تسجيل الدخول</button>
            </div>
           <div class="col-12">
            <label class="nav-link active  regester-model col-6"  id="login-nav" aria-current="page" for="modal-toggle-regester">انشاءحساب </label>  
            <a class="reg-login  col-6" href="">هل نسيت كلمة المرور ؟ </a>



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
            
  <input id="modal-toggle-regester" type="checkbox">
  <label class="modal-backdrop"  for="modal-toggle-regester"></label>
  <div class="modal-content">
      <label class="modal-close-btn" for="modal-toggle-regester">
        <svg width="30" height="30">
          <line x1="5" y1="5" x2="20" y2="20"/>
          <line x1="20" y1="5" x2="5" y2="20"/>
        </svg>
      </label>
      <h1 class="mb-3 dir text-center ">مرحباً بك في ألفا</h6>
      <h4 class="mb-3 dir text-center ">أنشئ حسابك وتابع دروسك بشكل إلكترونيّ وبجودة عالية</h4>
      <div class="tabs">
<!--  LOG IN  -->
  <form class="contectus-form dir" method="POST" action="{{ route('register') }}" >
      @csrf
      <div class="row gy-4 gy-xl-2 p-4 p-xl-5">
        <div class="col-3" >
          <label for="email" class="form-label">  <span class="text-danger"></span></label>
          <input type="text" class="form-control" hidden placeholder="الإسم الرباعي" id="name" name="name" value="" required>
        </div>
        <div class="col-12 col-md-6">
          <label for="email" class="form-label">  <span class="text-danger"></span></label>
          <input type="text" class="form-control" placeholder="الإسم الرباعي" id="name" name="name" value="" required>
        </div>
        <div class="col-3" >
          <label for="email" class="form-label">  <span class="text-danger"></span></label>
          <input type="email"  hidden class="form-control" placeholder="الإسم الرباعي" id="email" name="email" value="" required>
        </div>
        <div class="col-12 col-md-6">
            <label for="fname" class="form-label"> <span class="text-danger"></span></label>
            <div class="input-group">
              <input type="fname" class="form-control" placeholder="المحافظة" id="Governorate" name="Governorate" value="" required>
            </div>
          </div>
          <div class="col-12 col-md-6 dir ">
            <label for="fname" class="form-label"> <span class="text-danger"></span></label>
            <div class="input-group  form-control dir ">
              <label for=""  class="form-check-label" for="inlineCheckbox1">الفرع :</label>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ادبي">
                  <label class="form-check-label" for="inlineRadio1">ادبي</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="علمي">
                  <label class="form-check-label" for="inlineRadio1">علمي</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="صناعي">
                  <label class="form-check-label" for="inlineRadio1">صناعي</label>
              </div>
             
             
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label for="lname" class="form-label"> <span class="text-danger"></label>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="الايميل" id="email" name="email" value="">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label for="lname" class="form-label"> <span class="text-danger"></label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="رقم الهاتف" id="phone" name="phone" value="">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label for="lname" class="form-label"> <span class="text-danger"></label>
            <div class="input-group">
              <input type="password" class="form-control" placeholder="كلمة المرور " id="password" name="password" value="">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label for="lname" class="form-label"> <span class="text-danger"></label>
            <div class="input-group">
              <input type="password" class="form-control" placeholder=" تاكيد كلمة المرور  " id="password_verified_at" name="password_verified_at" value="">
            </div>
          </div>
          
        <div class="col-4">
            <div class="d-grid">
            </div>
          </div>
          <div class="col-4">
            <div class="d-grid">
            </div>
          </div>
        <div class="col-4">
            <div class="">
            </div>
          </div>
          <button type="submit" class="btn contectus-form-but " >إنشاء الحساب</button>

    </form>

  </div>
</div>
  </div>  
<!-- partial -->

      
         
      
  
  

  {{-- regester --}}


  
  {{--  --}}
</section>
{{--  --}}
</body>

</html>
