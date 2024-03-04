@extends('layouts.app')

    @section('content')
    <div class="namecourse  float-right mb-2">
        <p class="namebranch-text"> الدورات > {{$branch->name}} > {{$b->name}} </p>
    </div>
<br>
<br>

<div class="box-ditalescourse" id="box-ditalescourse">
  
  <div class="column1">
    <div class="row coursename mt-5">

      <p class="user_name h3 "> {{$b->name}}</p>
      <p class="user_name h3">{{$branch->name}} - الفصل الاول </p>
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
      <input class="mt-3 inputorder col-lg-4" placeholder="حافظ على سريّة معلوماتك..." type="text">  
      <button class=" btnsubmitorder mt-3 col-lg-6">إدخال </button>
      </div>
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
  </div>
</nav>
{{-- course about --}}
<div class="ditelspage">
<h3 class="dir mt-5 mr-5">حول الدورة:</h3>
<p class="dir ditelspageinsaid">{{$b->aboutcourse}}</p>
</div>
{{-- end --}}
{{-- about tatcher --}}
<div class="ditelspage">
  <h3 class="dir">مدرّس الدورة</h3>
  @foreach($teatcher as $teatchers)
  <img class="img-fluid text-center p-2"  src="{{asset('img/slidertetcher/'.$teatchers->sliders_teacher)}}" alt="" >
  @endforeach
</div>

{{-- end --}}

{{-- leeson --}}
<div class="ditelspage" >
<h3 class="dir mb-5">ماذا سأتعلم؟</h3>

  <div class="boxditales dir">
   

    @foreach ($chbter as $chbters)
    <?php
    $countoflesson=0;


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
      @foreach ($lesson as $lessons )
      <?php $count=0;?>

          @if($lessons->chabters == $chbters->name)

            <div class="card card-body" id="">
             <div class="ditelsco">
              <i style="font-size:24px" class="fa">&#xf144;</i>
              {{$lessons->name}}
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