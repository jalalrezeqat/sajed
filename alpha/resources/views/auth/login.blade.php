@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generated by Codia AI</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="index.css" />
    @vite(['resources/css/login.css'])

  </head>
  <body>
    <div class="ard text-center">
    <div class="main-container">
      <div class="wrapper"></div>
      <div class="pic"></div>
      <div class="pic-2"></div>
      <div class="img"><img class="img" src="img/login.png" alt=""></div>
      <span class="text">مرحباً بك في ألفا</span
      ><span class="text-2">أنتَ الآن أحد المشاركين في رحلة الـ 99.7</span>
      <form method="POST" action="{{ route('login') }}">
        @csrf
              <div class="group">
        {{-- <div class="box"></div> --}}
        <div class="row mb-3">
          {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

          <div class="col-md-6">

              <input id="email" type="email" class="box form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
        {{-- <input class="box "  placeholder="الايميل او دقم الهاتف" type="text" id="email" type="email"> --}}

        <div class="wrapper-2">
          {{-- <span class="text-3">الايميل او رقم الهاتف</span> --}}
        </div>
        <div class="pic-3"></div>
      </div>
      <div class="section">
        <input class="box-2 " name="password" placeholder="كلمة المرور" type="password" id="password" >
        {{-- <div class="group-2"><span class="text-4">كلمة المرور</span></div> --}}
        <div class="pic-4"></div>
      </div>
      {{-- <div class="wrapper-3"></div> --}}
      
      <button class="wrapper-3" type="submit">تسجيل الدخول</button>
      {{-- <span class="text-5">تسجيل الدخول</span> --}}
        <a class="text-6" href="{{ route('register') }}">إنشاء حساب</a>
      {{-- ><span class="text-6">إنشاء حساب</span> --}}
    </form>
    </div>
  </div>
    <!-- Generated by Codia AI - https://codia.ai/ -->
  </body>
</html>


{{--  --}}




{{--  --}}
@endsection