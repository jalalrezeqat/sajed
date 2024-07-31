  <!DOCTYPE html>
  <html lang="ar">
  <?php $iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();
  $width = '<script>document.write(screen.width); </script>';
  
  ?>

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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      @foreach ($iconfav as $iconfavs)
          <link rel="icon" type="image/x-icon" href="{{ asset('img/Favoriteicon/' . $iconfavs->img) }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('img/Favoriteicon/' . $iconfavs->img) }}">
      @endforeach
      @vite(['resources/css/mediaipad.css'])

      @vite(['resources/css/mediaipad.css'])
  </head>

  @extends('layouts.app')

  <livewire:breakpoints />
  @section('content')
      {{-- slider home --}}
      <section class="">
          <div id="carouselExampleSlidesOnly" class="carousel  mt  " data-ride="carousel">
              <div class="carousel-inner">
                  @foreach ($slider as $slider)
                      <div class="carousel-item active">
                          <img class="d-block  slider-cource " src="{{ asset('img/slider/' . $slider->img) }}"
                              alt="First slide">
                      </div>
                  @endforeach

              </div>
          </div>
          {{-- end slider home --}}
          @if ($agent->isDesktop() || $agent->isTablet())
              <div class="mt">
                  <img src="img/course-c.png" style="padding-right: 30px;padding-left:30px"
                      class="rounded mx-auto d-block img-fluid" alt="">
              </div>
          @endif
          {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}

          {{-- card course --}}
      </section>
      <section class="mt100px">
          <div class="row row-cols-1  card-course dir ovarflow  row-cols-md-3 ">
              @foreach ($branch as $branch)
                  @if ($agent->isDesktop())
                      <div class="col colcard">
                          <div class=" card  " id="card-home-coures">
                              <img class="card-img-top-cource" src="{{ asset('img/branch/' . $branch->img) }}"
                                  alt="">
                              <div class="card-body">
                                  <p class="card-title-home font18px margin-b4">{{ $branch->name }}</p>
                                  <p class=" font14px ">{{ $branch->summary }}</p>

                              </div>
                              <div class="card-button-courses">

                                  <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button2">تفقد
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
                  {{-- @if ($agent->isTablet())
                      <div class="col colcard">
                          <div class="card-home card card-home " id="card-home-coures">
                              <img class="card-img-top-cource" src="{{ asset('img/branch/' . $branch->img) }}"
                                  alt="">
                              <div class="card-body">
                                  <p class="card-title-home font18px margin-b4">{{ $branch->name }}</p>
                                  <p class=" font14px ">{{ $branch->summary }}</p>

                              </div>
                              <div class="card-button-courses">

                                  <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button2">تفقد
                                          الدورات </button></a>

                              </div>
                          </div>
                      </div>
                  @endif --}}
                  @if ($agent->isMobile())
                      <div class="col colcard">
                          <div class="card-home card  " id="card-home-coures">
                              <img class="card-img-top-cource" src="{{ asset('img/branch/' . $branch->img) }}"
                                  alt="">
                              <div class="card-body">
                                  <p class="card-title-home font18px margin-b4">{{ $branch->name }}</p>
                                  <p class=" font18px ">{{ $branch->summary }}</p>

                              </div>
                              <div class="card-button-courses">

                                  <a href="{{ route('front.FrontCourcse', $branch->id) }} "><button class="button2">تفقد
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
