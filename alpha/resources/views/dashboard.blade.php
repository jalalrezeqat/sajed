@extends('layouts.app')

@section('content')
    <div class="user-dashbord mt100px" id="user-dashbord">
        <div class="box-dashbord" id="box-dashbord">
            <div class="row" id="">
                <!--Grid column-->
                <div class="col-lg-2 ">

                    <div class="  d-flex align-items-center justify-content-center mb-4 mx-auto">
                        <img src="{{ asset('img/user_profile/' . Auth::user()->user_img) }}"
                            class="img-dashbord rounded-circle" alt="" loading="lazy" />
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
                            <p> <img src="img/branch.png" alt=""> الفرع : {{ Auth::user()->branch }} </p>
                            <p> <img src="img/phone-dashbord.png" alt=""> رقم الهاتف : {{ Auth::user()->phone }}
                            </p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 ">

                    <ul class="list-unstyled  information-dashbord">
                        <li>
                            <a class="link-edit" href="{{ route('profile.edit', Auth::user()->id) }}">تعديل الملف
                                الشّخصي</a>
                        </li>
                        <li class="mb-2">
                            <p> <img src="img/address-dashbord.png" alt=""> المحافظة :
                                {{ Auth::user()->Governorate }}</p>
                            <p> <img src="img/email-dashbord.png"> الايميل : {{ Auth::user()->email }} </p>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->

            </div>
        </div>
    </div>
    <div class="dir profile-coures " id="">
        <p class="mb-5">الدورات المسجل بها</p>

        <div class="row row-cols-1  card-w dir   row-cols-md-3 ">
            @foreach ($course as $courses)
                @foreach ($coursename as $coursenames)
                    @if ($coursenames->id == $courses->courses)
                        <?php $auth = 1; ?>

                        <div class="col colcard">
                            <div class="card-home card  " id="card-profile">
                                <img src="{{ asset('img/courses/' . $coursenames->img_name) }}" class="card-img-top-profile"
                                    alt="...">
                                <div class="card-body">
                                    @foreach ($lessonid as $lessonids)
                                        @if ($coursenames->id == $lessonids->idcoures)
                                            <p class="card-title-home font18px "><a
                                                    href="{{ url('courseshow' . '/' . $coursenames->id . '/' . $lessonids->idlesson) }}"
                                                    class="card-title-home  text-center">{{ $coursenames->name }}</a>
                                            </p>
                                            <?php $auth = 0; ?>
                                        @endif
                                    @endforeach
                                    @if ($auth == 1)
                                        <a class="nav-link" href="{{ url('courseshow' . '/' . $coursenames->id . '/1') }}"
                                            class="card-title-home ">{{ $coursenames->name }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
    <div class="dir profile-coures " id="cc">
        <p class="mb-5">علامات الامتحانات</p>
        <div>
            <table class="tabel-profile">
                <thead>

                </thead>
                <tbody style="border: 1px solid green;">
                    <tr style="border: 1px solid
                    green;border-bottom: 0px ;width:400px">
                        @foreach ($course as $courses)
                            <th rowspan="2"
                                style="border: 1px solid black; border-bottom: 0px ; border-right: 0; ;width:230px;">
                                @foreach ($coursename as $coursenames)
                                    @if ($coursenames->id == $courses->courses)
                                        {{ $coursenames->name }}
                                    @endif
                                @endforeach


                            </th>
                            @foreach ($quiz as $quizs)
                                @if ($quizs->courses == $courses->courses)
                                    <td class="font14px"
                                        style="border: 1px solid black;  border-bottom: 0px ;width:120px;text-align: center;font-size:14px;    font-weight: bolder;

">
                                        {{ $quizs->name }}
                                    </td>
                                @endif
                            @endforeach
                    </tr>
                    <tr style="border: 1px solid black;border-top: 0px  ;border-left: 1px solid black;width:40px
">
                        @foreach ($quiz as $quizs)
                            @foreach ($quizreselt as $quizreselts)
                                @if ($quizs->id == $quizreselts->namequiz)
                                    <td class="font14px"
                                        style="border: 1px solid black; border-top: 0px;width:120px;margin:auto   ; text-align: center;color:#27AC1F; font-size:14px;   font-weight: bolder;">
                                        @if ($quizreselts->courses == $courses->courses)
                                            {{ $quizreselts->total_points }}
                                        @else
                                            ??
                                        @endif
                                        /20
                                    </td>
                                @endif
                            @endforeach
                        @endforeach

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <br><br>
@endsection

{{--  @foreach ($course as $courses)  
    <tr>
      <th rowspan="2" >{{$courses->courses}}</th>
    </tr>

    @foreach ($quizreselt as $quizreselts)
         @if ($quizreselts->courses == $courses->courses)
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
