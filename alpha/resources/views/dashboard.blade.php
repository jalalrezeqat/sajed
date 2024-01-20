@extends('layouts.app')

@section('content') 
    <div class="user-dashbord">
    <div class="box-dashbord" id="box-dashbord">

            <div>
                <img src="img/dashbord.png" class="img-fluid   img-dashbord" alt="">
            </div>

            <div class=" dir">
                <div class="user_name">
                    <h2>مرحباً بعودتك، </h2> 
                    <h2> {{ Auth::user()->name }}</h2>
                </div>
                <div class="information-dashbord dir">
                    <p>الفرع :  {{ Auth::user()->branch }}  </p>
                    <p>رقم الهاتف : {{ Auth::user()->phone }} </p>
                </div>
                
            </div>
            <div class=" dir">
                <div class="edit-dahbord">
                    <br>
                <a href="">تعديل الملف الشّخصي</a>
                </div>
                <div class="information-dashbord dir">
                <p> المحافظة :  {{ Auth::user()->Governorate }}</p>
                <p>الايميل : {{ Auth::user()->email }}  </p>         
            </div>
                
            </div>

            </div>

            <div class="dir">
            <p>الدورات المُسجّل بها:  </p>
            </div>

            <div class="dir">
            <p>علامات الإمتحانات:</p>
            </div>
    </div>

@endsection