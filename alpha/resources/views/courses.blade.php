
@extends('layouts.app')

    @section('content')
    {{-- slider home --}}
    <div id="carouselExampleSlidesOnly" class="carousel slider-cource  slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block   w-100" src="img/course.png" alt="First slide">
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
    <div class="mt">
     <img src="img/course-c.png" class="rounded mx-auto d-block img-fluid" alt="">
    </div>
    {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}

    {{-- card course --}}

      <div class="row row-cols-1 card-w dir ovarflow slider   row-cols-md-3 ">
        @foreach($branch as $branch)
        <div class="col">
          <div class="card-home card  ">
            <img src="img/img_avatar.png" class="card-img-top-home" alt="...">
            <div class="card-body">
              <h5 class="card-title-home ">{{$branch->name}}</h5>
              <p class="card-text-home">{{$branch->summary}}</p>
              <div class="card-button-courses">
                <button class="btn btn-lg">تفقد الدورات</button>
              </div>
              
            </div>
          </div>
        </div>
        @endforeach
       
    </div>
  </div>



    @endsection

