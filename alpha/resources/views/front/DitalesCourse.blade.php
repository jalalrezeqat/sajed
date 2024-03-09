@extends('layouts.app')

    @section('content')
    <div class="namecourse  float-right mb-2">
        <p class="namebranch-text"> الدورات > {{$b->branche}} > {{$b->name}} </p>
    </div>
<br>
<br>

<div class="box-ditalescourse" id="box-ditalescourse">
  
  <div class="column1">
   
  <form action="{{url('codesend/'.$user)}}" method="POST">
  @csrf
  @method('PUT')


    <div class="row coursename mt-5">
     
      <p class="user_name h3 "> {{$b->name}}</p>
      <p class="user_name h3">{{$b->branche}} - الفصل الاول </p>
    </div>
    <div class="row coursedetales mt-5">
      <p class="mt-3  col-lg-4" style="color: blanchedalmond"> مدرس الدورة : {{$b->teacher_name}} </p> 
      <p class="mt-3  col-lg-4" style="color: blanchedalmond"> عدد دروس الدورة  : {{$lessoncount}} درساً مسجلاً</p> 
    </div>
    <div class="row coursedetales mt-5">
      <button class=" btncouresdetales  col-lg-6">اطلب بطاقتك</button>
      <p class="mt-3 mr-3 col-lg-5" style="color: blanchedalmond"> أدخل كود البطاقة وابدأ بالتّعلّم</p> 
    </div>
    <div class="row coursedetales">

      <p class="mt-3  col-lg-3" style="color: #85FE78"> السعر : {{$b->price}} ₪</p>
      <input class="mt-3 inputorder col-lg-4" required @error('error') is-invalid @enderror placeholder="حافظ على سريّة معلوماتك..." name="code" type="text">  
      @error('error')
      <span class="text-danger dandermasseg inputorder col-lg-4">{{ $message }}</span>
       @enderror
      <button type="submit" class=" btnsubmitorder mt-3 col-lg-6">إدخال </button>
      </div>
      @if (session('message'))
      <div class="alert dandermasseg  col-lg-4 text-danger">{{ session('message') }}</div>
    @endif
    @if (session('message1'))
    <div class="alert dandermasseg  col-lg-4 text-success">{{ session('message1') }}</div>
  @endif
  @if (session('message3'))
  <div class="alert dandermasseg  col-lg-4 text-danger">{{ session('message3') }}</div>
@endif
      </form>
      <br>
      <br>
  </div>

  <div class="column2">
    <img class="" src="/../img/det.png" alt=""> 
   </div>
  </div>

{{-- navbar  --}}
<nav class="navbar navbar-expand-lg navbarcourse dir navbar-light bg-light">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#about">حول الدورة </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tetcher">مدرّس الدورة</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#how">ماذا سأتعلم؟ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#dd">أسئلة شائعة  </a>
      </li>
     
    
    </ul>
  </div>
</nav>
{{-- course about --}}
<div class="ditelspage">
<h3 class="dir mt-5 mr-5" id="about">حول الدورة:</h3>
<p class="dir ditelspageinsaid">{{$b->aboutcourse}}</p>
<button class="btncouresdetales">اطلب بطاقتك</button>
</div>
{{-- end --}}
{{-- about tatcher --}}
<div class="ditelspage dir" id="tetcher">
  <h3 class="dir">مدرّس الدورة</h3>
    <div class="shadow p-3 row mt-5 bg-white rounded">
      <div class="col-6 col-md-2">
        @foreach($teatcher as $teatchers)
        <img  class="imgtatecher " src="{{asset('/img/teacher/'.$teatchers->img)}}" alt="" >
        <p style="color: #27AC1F;margin-right:6%;">{{$teatchers->name}}</p>
        @endforeach 
      </div>
      <div class="col-12 sdwd col-md-10">
        <p style="font-size:18px">
          <?php
          echo     $teatchers->summernote
          ?>
        </p>
       </div>

    </div>
</div>

{{-- <div class="col-sm">
        @foreach($teatcher as $teatchers)
        <img  class="imgtatecher " src="{{asset('/img/teacher/'.$teatchers->img)}}" alt="" >
        @endforeach 
      </div>
      <div class="col-sm">
        <div class="">
          <p style="font-size:18px">حاصل على درجة الماجيستير في الرياضيات من جامعة الخليل</p>
          <p>حاصل على درجة الماجيستير في الرياضيات من جامعة الخليل</p>
          <p>حاصل على درجة الماجيستير في الرياضيات من جامعة الخليل</p>
        </div>
      </div> 
      <div class="col-sm">

      </div> --}}
{{-- end --}}

{{-- leeson --}}
<div class="ditelspage" id="how">
<h3 class="dir mb-5">ماذا سأتعلم؟</h3>

  <div class="boxditales dir">
   

    @foreach ($chbter as $chbters)
    <?php
    $countoflesson=0;

$count=0;
          foreach($lesson as $lessons)
          {

              if($lessons->chabters == $chbters->name)
              {
                  $countoflesson++;

              };
              $count=$countoflesson;

          };

   
?>
    <div class="boxcolabss">
      <div class="">
         <div class="chabternamecollabs">
              <button class="btn  qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$chbters->id}}" aria-expanded="false" aria-controls="collapseExample"></button>
              <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$chbters->id}}" aria-expanded="false" aria-controls="collapseExample" class="btn qustion-text ">  {{$chbters->name}} </button>
              <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$chbters->id}}" aria-expanded="false" aria-controls="collapseExample " class="btn qustion-text " id="countleeson">  {{$count}} دروس </button>

         </div>
      </div>
    </div>
    <div class="collapse  scroll-section" id="collapse{{$chbters->id}}">
    {{-- <div class="collapse" id="collapse{{$chbter->id}}"> --}}
      @foreach ($lesson as $key => $lessons)
      <?php $count=0;
      $month = date('m');
      $day = date('d');
      $year = date('Y');
      $today = $year . '-' . $month . '-' . $day;

      ?>
      
           @if($lessons->chabters == $chbters->name)
          
             <div class="card card-body" id="">
                <div class="ditelsco">
                    <?php  if (Auth::user()): ?>
                       @if($key == 0)
                                  <i style="font-size:24px;color:27AC1F" class="fa">&#xf144;</i>
                                    <a href="#we3"><button  style="border: none;background-color:#f8fafc
                                       ">{{$lessons->name}}</button></a>
                      @endif
                       @foreach ($code as $codes)
                      @if($key > 0)        

                           <?php if($codes->user ==  Auth::user()->name & $codes->endcode >= $today) : ?>
                              <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                <a href="#we3"><button style="border: none;background-color:#f8fafc
                                  ">{{$lessons->name}}</button></a>

                            <?php else:?>
                               <i style="font-size:24px;color:" class="fa">&#xf144;</i>
                                  <a href="#we3"><button disabled style="border: none;background-color:#f8fafc
                                    ">{{$lessons->name}}</button></a>

                          <?php endif; ?>
                  
                      @endif
                        @endforeach
                         
                           <?php endif; ?>

                             <?php  if (!Auth::user()): ?>
                              @if($key == 0)
                                  <i style="font-size:24px;color:27AC1F" class="fa">&#xf144;</i>
                                    <a href="#we3"><button  style="border: none;background-color:#f8fafc
                                       ">{{$lessons->name}}</button></a>
                                @endif
                             @if($key > 0)        

                                  <i style="font-size:24px;color:" class="fa">&#xf144;</i>
                                    <a href="#we3"><button disabled style="border: none;background-color:#f8fafc
                                       ">{{$lessons->name}}</button></a>
                            @endif
                             <?php endif; ?>

                  </div>
                </div> 
         @endif
     
      @endforeach

    </div>

    @endforeach
  </div>
  
  <div class="col text-center">
    <button class=" btncouresdetales mt-5 text-center">اطلب بطاقتك</button>
    </div>
  </div>
 
  <div class=" m-3 dir card-text-home" id="dd">
    <h2 class="card-text-home"style="font-size: 262.5%">الاسئلة الشائعة</h2>
    @foreach ($questionscours as $questionscourss)
      <div class="qustion1">   
  <p>
    <button class="btn  qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$questionscourss->id}}" aria-expanded="false" aria-controls="collapseExample"></button>
    <button  type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$questionscourss->id}}" aria-expanded="false" aria-controls="collapseExample" class="btn qustion-text ">{{$questionscourss->question}}</button>
  </p>
  <div class="collapse " id="collapse{{$questionscourss->id}}">
    <div class="  qustion-box card-body">
    {{-- <p style="font-size: 87.5%">{{$questionscourss->question_text}}</p>   --}}
    <p style="font-size: 87.5%">
    <?php
    echo     $questionscourss->summernote
    ?>
    </p>
    </div>
  </div>
</div> 
  @endforeach
   </div>
   <div class="col text-center">
    <button class=" btncouresdetales mt-5 text-center">اطلب بطاقتك</button>
    </div>
  </div>
{{--  --}}
    @endsection

    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/button.js','resources/css/custom.css','resources/css/login.css','resources/css/regestar.css'])


   {{--  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">حول الدورة </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">مدرّس الدورة</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ماذا سأتعلم؟ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">أسئلة شائعة  </a>
      </li>
     
    
    </ul>


     @foreach ($chbter as $chbter)
    <div class="qustion1">   
<p>
  <button class="btn  qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$chbter->id}}" aria-expanded="false" aria-controls="collapseExample"></button>
  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$chbter->id}}" aria-expanded="false" aria-controls="collapseExample" class="btn qustion-text ">  {{$chbter->name}} </button>
</p>
<div class="collapse " id="collapse{{$chbter->id}}">
  <div class="  qustion-box card-body">
    
   @foreach ($lesson as $lessons )
   @if($lessons->chabters == $chbter->name)
   {{$lessons->name}}
   @endif
   @endforeach
  </div>
</div>
</div>

@endforeach
   --}}