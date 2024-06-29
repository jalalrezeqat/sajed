  <!DOCTYPE html>
  <html lang="ar">

  <head>
      <meta name="description"
          content="اشترك الآن في دورات التوجيهي على منصة ألفا التعليمية، دورات شاملة للفرعين العلمي والادبي مع امكانية مشاهدة الدروس وتكرارها في أي وقت وأي مكان">
      <meta name="keywords" content="دورات التوجيهي للفرعين العلمي والادبي, شرح كامل للمواد">
      <meta name="الفرع العلمي" content='{{ url('courses/1') }}' />
      <meta name="الفرع الادبي" content='{{ url('courses/2') }}' />
      <meta name="viewport" content="width=device-width">
      <meta name="googlebot" content="index,follow">
      <meta name="robots" content="index,follow">
      <meta name="viewport" content="width=640, initial-scale=.5, user-scalable=no" />


      @vite(['resources/css/mediaipad.css'])
  </head>

  @extends('layouts.app')

  <livewire:breakpoints />
  <?php session('windowW'); ?>
  @section('content')
      {{-- slider home --}}
      <section class="">
          <div id="carouselExampleSlidesOnly" class="carousel slider-cource mt  slide" data-ride="carousel">
              <div class="carousel-inner">
                  @foreach ($slider as $slider)
                      <div class="carousel-item active">
                          <img class="d-block   w-100" src="{{ asset('img/slider/' . $slider->img) }}" alt="First slide">
                      </div>
                  @endforeach
                  <div class="carousel-item">
                      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide"
                          alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide"
                          alt="Third slide">
                  </div>
              </div>
          </div>
          {{-- end slider home --}}
          <div class="mt">
              <img src="img/course-c.png" class="rounded mx-auto d-block img-fluid" alt="">
          </div>
          {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}

          {{-- card course --}}
      </section>
      <section class="mt100px">
          <div class="row row-cols-1  card-course dir ovarflow  row-cols-md-3 ">
              @foreach ($branch as $branch)
                  @windowWidthGreaterThan(1028)

                  <div class="col">
                      <div class="card-home card card-home " id="card-home-coures">
                          <img src="img/card-img.png" class="card-img-top-cource" alt="...">

                          <div class="card-body">
                              <p class="card-title-home font18px margin-b4">{{ $branch->name }}</p>
                              <p class=" font14px ">{{ $branch->summary }}</p>

                          </div>
                          <div class="card-button-courses">

                              <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button2">تفقد جميع
                                      الدورات </button></a>

                          </div>
                      </div>
                  </div>
                  {{-- <div class="col  ">
                      <div class="card "id="card-home">
                          <img src="img/card-img.png" class="card-img-top-cource" alt="...">
                          <div class="card-body">
                              <h5 class="text-center fw-bolder font18px">{{ $branch->name }}</h5>
                              <p id="card-text-home1 " class="card-text-home1 mt-4 font14px ">{{ $branch->summary }}</p>
                          </div>
                          <div class="card-button-courses">

                              <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button1 ">تفقد جميع
                                      الدورات


                          </div>
                      </div>
                  </div> --}}
              @endif
              @windowWidthBetween(480, 1028)

              <div class="col">
                  <div class="card-home card card-home " id="card-home-coures">
                      <img src="img/card-img.png" class="card-img-top-cource" alt="...">

                      <div class="card-body">
                          <p class="card-title-home font18px margin-b4">{{ $branch->name }}</p>
                          <p class=" font14px ">{{ $branch->summary }}</p>

                      </div>
                      <div class="card-button-courses">

                          <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button2">تفقد جميع
                                  الدورات </button></a>

                      </div>
                  </div>
              </div>
              @endif
              @windowWidthLessThan(481)

              <div class="col">
                  <div class="card-home card card-home " id="card-home-coures">
                      <img src="img/card-img.png" class="card-img-top-cource" alt="...">

                      <div class="card-body">
                          <p class="card-title-home font18px margin-b4">{{ $branch->name }}</p>
                          <p class=" font14px ">{{ $branch->summary }}</p>

                      </div>
                      <div class="card-button-courses">

                          <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button2">تفقد جميع
                                  الدورات </button></a>

                      </div>
                  </div>
              </div>
              @endif
              @endforeach

          </div>
          </div>
      </section>
  @endsection
