
@extends('layouts.app')

    @section('content')
    {{-- slider home --}}
    <div id="carouselExampleSlidesOnly" class="carousel slider  slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block  w-100" src="img/slide1.png" alt="First slide">
        </div>
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
      <h3 class="text-center ">الدورات الاكثر طلبا </h3>
      <h5 class="text-center ">اختر دورات التوجيهي التي تناسبك وتساعدك على زيادة معدلك</h5>
    {{-- card course --}}
    <div class=" card-box  card-w   slider">
      <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
        @foreach($courses as $courses)
        <div class="col  ">
          <div class="card  ">
            <img src="img/img_avatar.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title ">{{$courses->name}}</h5>
              <p class="card-text">{{$courses->summary}}</p>
              <button class="card-button"> قراءة المزيد ></button>
              <button class="but-card">{{$courses->price}}₪   </button>
            </div>
          </div>
        </div>
        @endforeach
       
    </div>
  </div>
</div>
</div>
    
    {{-- end card course --}}
    <div class="m-1">
      <h3 class="text-center ">معلمي منصة الفا </h3>
      <h5 class="text-center ">نفتخر في ألفا بتواجد  أفضل المُدرسين على مستوى الوطن!</h5>
    </div>

    {{-- slide tetcher --}}
    <div id="carouselExampleIndicators" class="carousel slider  slide" data-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block  w-100" src="img/slide2.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block  w-100" src="img/slide2.png" alt="Third slide">
        </div>
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
    {{-- end slide tetcher --}}
    {{-- qustion  --}}

    <div class=" m-3  card-text">
     <h2 class="card-text">الاسئلة الشائعة</h2>
     @foreach ($questions as $question)
          
   <p>

     <button class="btn  qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></button>
     <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn ">  {{$question->question}} </button>
   </p>
   <div class="collapse" id="collapseExample">
     <div class=" qustion-box card-body">
       {{$question->question_text}}
     </div>
   </div>

   @endforeach


    </div>
    {{-- end qustion --}}
@endsection

