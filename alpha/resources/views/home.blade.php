@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>

<div class="modal fade modal-dialog modal-dialog-centered modal-dialog modal-dialog-scrollable modal-dialog modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="conntent">
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
      </div>
    </div>
  </div>
</div>
</div>
@endsection


