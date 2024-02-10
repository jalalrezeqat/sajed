
@extends('layouts.app')

    @section('content')
    {{-- slider home --}}
    <div id="carouselExampleSlidesOnly" class="carousel slider-cource  slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($slider as $slider)
        <div class="carousel-item active">
          <img class="d-block   w-100" src="{{asset('img/slider/'.$slider->img)}}" alt="First slide">
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
    <div class="mt">
     <img src="img/course-c.png" class="rounded mx-auto d-block img-fluid" alt="">
    </div> 
    {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}

    {{-- card course --}}

     
    <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
      @foreach($branch as $branch)
      <div class="col  ">
        <div class="card-home card ">
          <img src="img/card-img.png" class="card-img-top-home" alt="...">
          <div class="card-body">
            <h5 class="text-center ">{{$branch->name}}</h5>
            <p id="card-text-home1 " class="card-text-home1 ">{{$branch->summary}}</p>
          </div>
          <div class="card-button-courses">
            <a  href="{{ route('front.FrontCourcse',$branch->id) }} " ><button  class="button1 ">تفقّد الدورات</button></a>
          </div>
        </div>
      </div>
      @endforeach
     
  </div>
  </div>



    @endsection

  