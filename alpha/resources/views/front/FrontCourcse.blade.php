
@extends('layouts.app')

    @section('content')
    <div class="namebranch  float-right mb-2">
        <p class="namebranch-text">الدورات > {{$branch->name}}</p>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slider  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block  w-100" src="{{asset('img/cona.jpeg')}}" alt="First slide">
          </div>
           <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
          </div>
        </div>
      </div>
      <h3 class="text-center mt-3">دورات الثانويّة العامّة   </h3>
      <h3 class="text-center font-weight-bold">   {{$branch->name}}  </h3>

        <div class="d-flex justify-content-center mt-5 dir"> 
            <div id="butcour">
               <a href="" class="btn btn-success">الفصل الاول </a>
            </div>
            <div class="mr-5">
            <a href="" class="btn btn-success">الفصل الثاني</a>
            </div>
        </div>
      <div class=" card-box-home  card-w mb-5  slider">
        <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
          @foreach($coursces as $coursces)
          <div class="col  ">
            <div class="card-home card ">
              <img src="/img/card-img.png" class="card-img-top-home" alt="...">
              <div class="card-body">
                <h5 class="card-title-home  ">{{$coursces->name}}</h5>
                <p id="card-text-home1 mt" class="card-text-home1 ">{{$coursces->summary}}</p>
              <a class="card-button" href="{{ url('coursesditels'.'/'.$coursces->id) }}"> قراءة المزيد ></a>
                <button class="but-card">{{$coursces->price}}₪   </button>
              </div>
            </div>
          </div>
          @endforeach
         
      </div>

    @endsection
