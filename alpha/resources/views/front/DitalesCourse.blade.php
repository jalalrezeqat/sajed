@extends('layouts.app')

    @section('content')
    <div class="namecourse  float-right mb-2">
        <p class="namebranch-text"> الدورات > {{$branch->name}} > {{$b->name}} </p>
    </div>
<br>
<br>

<div class="box-ditalescourse" id="box-ditalescourse">
        <div class="row"  id="">
            <!--Grid column-->
            
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-12 styledetales ">
    
                <ul class="list-unstyled user_name  ">
                    <li class="mb-2   ">
                      <h3> {{$b->name}}</h3>
                      <h3 class="mt-4">{{$branch->name}} - الفصل </h3>
                    </li>
                   <li class="mb-2 row  nameteacher-detales">
                    <p class="mt-4  col-lg-6"> مدرس الدورة : {{$b->teacher_name}} </p> 
                    <p class="mt-4 col-lg-6">عدد دروس الدورة: 21 درساً مسجلاً</p>
                   </li>
                   <li class="mb-2 row  nameteacher-detales">
                    <p class="mt-4  col-lg-6"> أدخل كود البطاقة وابدأ بالتّعلّم </p> 
                    <input  class=" col-lg-6" type="text">
                   </li>
                  </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 ">
    
              {{-- <ul class="list-unstyled  information-dashbord">
                  <li>
                      <a class="link-edit" href="{{route('profile.edit',Auth::user()->id)}}">تعديل الملف الشّخصي</a>
                  </li>
                <li class="mb-2">
                  <p> <img src="img/address-dashbord.png" alt=""> المحافظة :  {{ Auth::user()->Governorate }}</p>
                  <p> <img src="img/email-dashbord.png"> الايميل  : {{ Auth::user()->email }}  </p>   
                </li>
              
              </ul> --}}
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
           
          </div>
    </div>
    @endsection



   

