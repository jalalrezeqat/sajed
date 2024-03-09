
@extends('layouts.app')

    @section('content')
    {{-- slider home --}}
    <div id="carouselExampleSlidesOnly" class="carousel slider  slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($slider as $slider)
        <div class="carousel-item active">
          <img class="d-block  w-100" src="{{asset('img/slider/'.$slider->img)}}" alt="First slide">
        </div>
        @endforeach
        <div class="carousel-item">
          <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
        </div>
      </div>
    </div>
    {{-- end slider home --}}
    <div class="m">
     
    </div>
    {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}

<div class="contener ">
  <div class="m-1">
      <h3 class="text-center " style="font-size: 42px">الدورات الاكثر طلبا </h3>
      <h5 class="text-center mt"style="font-size: 18px">اختر دورات التوجيهي التي تناسبك وتساعدك على زيادة معدلك</h5>
    </div>
    {{-- card course --}}
    <div class=" card-box-home  card-w   slider">
      <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
        @foreach($courses as $courses)
        <div class="col">
          <div class="card-home card " id="card-home">
            <img src="{{asset('img/courses/'.$courses->img_name)}}" class="card-img-top-home" alt="...">
            <div class="card-body">
              <h5 class="card-title-home mb-3">{{$courses->name}}</h5>
              <p id="card-text-home1  mb-3" class="card-text-home1 ">{{$courses->summary}}</p>
              <a class="card-button mt-3" href="{{ url('coursesditels'.'/'.$courses->id) }}"> قراءة المزيد ></a>
              <button class="but-card mt-3">{{$courses->price}}₪   </button>
            </div>
          </div>
        </div>
        @endforeach
       
    </div>
    <div class="card-btn-allcourse ">
    <a  href="{{ url('/courses') }} " ><button  class="btn-allcourse">جميع الدورات</button></a>
    </div>
  </div>
</div>
</div>
    
    {{-- end card course --}}
    <div class="m-1">
      <h3 class="text-center "style="font-size: 42px">معلمي منصة الفا </h3>
      <h5 class="text-center "style="font-size: 18px">نفتخر في ألفا بتواجد  أفضل المُدرسين على مستوى الوطن!</h5>
    </div>

    {{-- slide teacher --}}
<div id="carouselExampleIndicators" class="carousel   slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($sliderteacher as $key => $sliderteacher)  
    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
      <img class="d-block h-50 img-slider-teacher" src="{{asset('img/slider/'.$sliderteacher->img)}}" alt="{{$sliderteacher->id}}">
        </div>
    @endforeach      
      </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    {{-- end slide teacher --}}
    {{-- qustion  --}}

    <div class=" m-3 dir card-text-home">
     <h2 class="card-text-home"style="font-size: 262.5%">الاسئلة الشائعة</h2>
     @foreach ($questions as $question)
       <div class="qustion1">   
   <p>
     <button class="btn  qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$question->id}}" aria-expanded="false" aria-controls="collapseExample"></button>
     <button  type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$question->id}}" aria-expanded="false" aria-controls="collapseExample" class="btn qustion-text ">{{$question->question}}</button>
   </p>
   <div class="collapse " id="collapse{{$question->id}}">
     <div class="  qustion-box card-body">
     <p style="font-size: 87.5%">{{$question->question_text}}</p>  
     </div>
   </div>
</div> 
   @endforeach


    </div>
    {{-- end qustion --}}
@endsection

