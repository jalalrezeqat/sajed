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
                  <h3> {{ Auth::user()->name }}</h2>
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

  <div class="dir" id="cc">
    <p>الدورات المسجل بها</p>
  
      <div class="row row-cols-1  card-w dir   row-cols-md-3 ">
             @foreach ($course as $courses) 

 @foreach ($coursename as  $coursenames)
         @if ($coursenames->id == $courses->courses_id)  
        <div class="col">
          <div class=" card " id="card-profile">
            <div class="card-body">
 <div class="row">
    <div class="col-3">
            <img src="{{asset('img/courses/'.$coursenames->img_name)}}" class="card-img-profile" alt="...">
    </div>
    <div class="col-9">
               <a href="{{ url('coursesditels'.'/'.$coursenames->id) }}" class="card-title-home mt-3">{{$coursenames->name}}</a>
    </div>
  </div>                
              {{-- <a class="card-button mt-3" href="{{ url('coursesditels'.'/'.$courses->id) }}"> قراءة المزيد ></a> --}}

            </div>
          </div>
        </div>
     
        @endif
      @endforeach

   @endforeach       
    </div>

  </div>        
<div class="dir "  id="cc">
  <p>علامات الامتحانات</p>
  <div>
    <table class="tabel-profile">
  <thead>

  </thead>
  <tbody>
   <tr>
     @foreach ($course as $courses) 
  <th rowspan="2">{{$courses->courses}}</th>
      @foreach ($quizreselt as $quizreselts )
         @if($quizreselts->courses == $courses->courses)

  <td>{{$quizreselts->namequiz}} </td>
  @endif
  @endforeach
 </tr>
 <tr>
   @foreach ($quizreselt as $quizreselts )
         @if($quizreselts->courses == $courses->courses)
  <td> {{$quizreselts->total_points}}/ {{$quizreselts->option_total_point}}</td>
  @endif
  @endforeach
 </tr>
   @endforeach

  </tbody>
    </table>
  </div>
  
</div>
@endsection

{{--  @foreach ($course as $courses)  
    <tr>
      <th rowspan="2" >{{$courses->courses}}</th>
    </tr>

    @foreach ($quizreselt as $quizreselts )
         @if($quizreselts->courses == $courses->courses)
 <tr>

         <td>{{$quizreselts->namequiz}}  / {{$quizreselts->total_points}}/ {{$quizreselts->option_total_point}}</td>

 </tr>

         @endif

    @endforeach
    @endforeach
  --}}
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