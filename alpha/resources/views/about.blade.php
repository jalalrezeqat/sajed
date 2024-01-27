
@extends('layouts.app')

    @section('content')
    
    {{-- slider about --}}
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
    {{-- end slider about --}}
    <!--  -->
    <div class="slider-cource dir ">
      <div>
        <h1 class=" text-bold">  <img src="img/aboutv.png" alt="">رؤيتنا :</h1>
        @foreach ($vision as $vision)
        <p>{{$vision->our_vision}}</p>
        </div>
        @endforeach
        <div>
            <h1 class="text-bold"><img src="img/aboutm.png" alt="">مهمتنا :</h1>
            <p>تتمحور مهامنا في منصّة ألفا حول: </p>

            <ul>
              @foreach ($mission as $mission)

                <li><span class="text-bold">{{$mission->our_mission_titel .' : '}}</span>{{$mission->our_mission_text}}</li>
              @endforeach
            </ul>
        </div>
    </div>
    @endsection
