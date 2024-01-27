@extends('layouts.app')

@section('content') 
    <div class="user-dashbord" id="user-dashbord">
    <div class="box-dashbord" id="box-dashbord">
        <div class="row"  id="">
            <!--Grid column-->
            <div class="col-lg-2 ">
    
              <div class="  d-flex align-items-center justify-content-center mb-4 mx-auto">
                <img src="{{asset('img/user_profile/'.Auth::user()->user_img)}}" class="img-dashbord rounded-circle"  alt=""
                     loading="lazy" />
              </div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-5 ">
    
              <ul class="list-unstyled user_name">
                <li class="mb-2">
                  <h3>مرحباً بعودتك، </h2> 
                  <h3> {{ Auth::user()->farestname .' '. Auth::user()->lastname}}</h2>
                </li>
                <li class="mb-2">
                  <p>  <img src="img/branch.png" alt=""> الفرع :  {{ Auth::user()->branch }}  </p>
                  <p> <img src="img/phone-dashbord.png" alt=""> رقم الهاتف : {{ Auth::user()->phone }} </p>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-5 ">
    
              <ul class="list-unstyled  information-dashbord">
                  <li>
                      <a class="link-edit" href="{{route('profile.edit',Auth::user()->id)}}">تعديل الملف الشّخصي</a>
                  </li>
                <li class="mb-2">
                  <p> <img src="img/address-dashbord.png" alt=""> المحافظة :  {{ Auth::user()->Governorate }}</p>
                  <p> <img src="img/email-dashbord.png"> الايميل  : {{ Auth::user()->email }}  </p>   
                </li>
              
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
           
          </div>
    </div>
    </div>

  
        

@endsection

{{-- <div>
                <img src="img/dashbord.png" class="img-fluid   img-dashbord" alt="">
            </div>

            <div class=" dir">
                <div class="user_name">
                    <h2>مرحباً بعودتك، </h2> 
                    <h2> {{ Auth::user()->farestname .' '. Auth::user()->lastname}}</h2>
                </div>
                <div class="information-dashbord dir">
                   <p>  <img src="img/branch.png" alt=""> الفرع :  {{ Auth::user()->branch }}  </p>
                    <p> <img src="img/phone-dashbord.png" alt=""> رقم الهاتف : {{ Auth::user()->phone }} </p>
                </div>
                
            </div>
            <div class=" dir">
                <div class="edit-dahbord">
                    <br>
                <a href="">تعديل الملف الشّخصي</a>
                </div>
                <div class="information-dashbord dir" id="information-dashbord1">
                <p> <img src="img/address-dashbord.png" alt=""> المحافظة :  {{ Auth::user()->Governorate }}</p>
                <p> <img src="img/email-dashbord.png"> الايميل  : {{ Auth::user()->email }}  </p>         
            </div>
                
            </div>

            </div>

            <div class="dir">
            <p>الدورات المُسجّل بها:  </p>
            </div>

            <div class="dir">
            <p>علامات الإمتحانات:</p>
            </div> --}}





            {{--  --}}


            {{-- 
        {{-- <div class=" p-4"> --}}
            <!--Grid row-->
            {{-- <div class="row"  id="">
                <!--Grid column-->
                <div class="col-lg-2 ">
        
                  <div class="rounded-circle  d-flex align-items-center justify-content-center mb-4 mx-auto">
                    <img src="img/dashbord.png"  alt=""
                         loading="lazy" />
                  </div>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-5 ">
        
                  <ul class="list-unstyled user_name">
                    <li class="mb-2">
                      <h3>مرحباً بعودتك، </h2> 
                      <h3> {{ Auth::user()->farestname .' '. Auth::user()->lastname}}</h2>
                    </li>
                    <li class="mb-2">
                      <p>  <img src="img/branch.png" alt=""> الفرع :  {{ Auth::user()->branch }}  </p>
                      <p> <img src="img/phone-dashbord.png" alt=""> رقم الهاتف : {{ Auth::user()->phone }} </p>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-5 ">
        
                  <ul class="list-unstyled information-dashbord">
                      <li>
                          <a href="">تعديل الملف الشّخصي</a>
  
                      </li>
                    <li class="mb-2">
                      <p> <img src="img/address-dashbord.png" alt=""> المحافظة :  {{ Auth::user()->Governorate }}</p>
                      <p> <img src="img/email-dashbord.png"> الايميل  : {{ Auth::user()->email }}  </p>   
                    </li>
                  
                  </ul>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
               
              </div>
          </div> --}} 