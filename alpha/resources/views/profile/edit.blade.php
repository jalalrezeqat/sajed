@extends('layouts.app')

@section('content') 
<div class="dir edit-user-profile">
    <a href="{{route('dashboard')}}"><button  class="btn btn-back-user btn-lg btn-success">رجوع</button></a>
    <a href="{{route('password')}}"><button  class="btn btn-password-update-user btn-lg btn-success">تغير كلمة المرور</button> </a>

<div class="form-edit-user-profile">
    <form action="{{url('profile/update/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="inputtitelmistion">الاسم </label>
            <input type="text" class="form-control" required value="{{Auth::user()->name}}" name='farestname' id="farestname" placeholder="">
          </div>
        
        <div class="form-group">
          <label for="inputtitelmistion">الايميل </label>
          <input type="text" class="form-control" required name='email' value="{{Auth::user()->email}}" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="inputtitelmistion">الهاتف </label>
            <input type="text" class="form-control" required name='phone' value="{{Auth::user()->phone}}" id="phone" placeholder="">
          </div>
        <div class="form-group">
          <label for="inputtitelmistion">الصورة </label>
          <input type="file" class="form-control"  name='user_img' id="user_img">
          
        </div>
        
        <button type="submit" class="btn  btn-lg btn-submit-user btn-success">حفظ</button>
      </form>
</div>


</div>
@endsection


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}