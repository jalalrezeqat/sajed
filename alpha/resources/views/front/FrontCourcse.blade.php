  <!DOCTYPE html>
  <html lang="ar">

  <head>
      <meta name="description"
          content="اشترك الآن في دورات التوجيهي على منصة ألفا التعليمية، دورات شاملة للفرعين العلمي والادبي مع امكانية مشاهدة الدروس وتكرارها في أي وقت وأي مكان">
      <meta name="keywords" content="دورات التوجيهي للفرعين العلمي والادبي, شرح كامل للمواد">
      @foreach ($coursces as $courscess)
          <meta name='{{ $courscess->name }}' content=' {{ url('coursesditels' . '/' . $courscess->id) }}'>
      @endforeach
      <meta name="{{ $branch->name }}" content='{{ url('courses/1') }}' />
      <meta name="viewport" content="width=device-width">
      <meta name="googlebot" content="index,follow">
      <meta name="robots" content="index,follow">
      <meta name="viewport" content="width=640, initial-scale=.5, user-scalable=no" />

      @vite(['resources/css/mediaipad.css'])

  </head>
  <livewire:breakpoints />
  <?php session('windowW'); ?>
  @extends('layouts.app')

  @section('content')
      <div class="namebranch  float-right mb-2">
          <p class="namebranch-text"><a class="text-dark" href="{{ url('courses') }}">الدورات</a> > <a class="text-dark"
                  href="{{ url('courses/' . $branch->id) }}">{{ $branch->name }}</a></p>

      </div>
      <div class="carousel-inner">
          @foreach ($slider as $slider)
              <div class="carousel-item active">
                  <img class="d-block  slider-cource " src="{{ asset('img/slider/' . $slider->img) }}" alt="First slide">
              </div>
          @endforeach

      </div>
      <h3 class="text-center font42px mt-3"> دورات التوجيهي </h3>
      <h3 class="text-center font42px font-weight-bold"> {{ $branch->name }} </h3>

      <div class="d-flex justify-content-center mt-5 dir">
          <div id="butcour">
              <a href="{{ route('front.FrontCourcse', $branch->id) }}" class="btn btnfcou ">الفصل الاول </a>

          </div>
          <div class="mr-5">
              <a href="{{ route('front.FrontCourcse1', $branch->id) }}" class="btn btnfcous">الفصل الثاني</a>
          </div>
      </div>

      <div class="  ">

          {{-- <div class=" card-box-home  card-w mb-5  slider">
              <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
                  @foreach ($coursces as $coursces)
                      <div class="col  ">

                          <div class="card-courseshow card "id="card-courseshow">
                              <div class="card-body">

                                  <div class="row">
                                      <div class="columncourse2"> <img src="/img/card-img.png" width="49.17px"
                                              class="card-img-top-c col-3" alt="...">
                                      </div>
                                      <div class="columncourse1">
                                          <h5 class="card-title-home col-9  font18px mb-3">{{ $coursces->name }}</h5>
                                      </div>
                                  </div>


                                  <p id="card-text-home1 mt" class="card-text-home1 mb-3 font14px mt-3 ">
                                      {{ $coursces->summary }}</p>
                                  <a class="card-button font14px mt-3"
                                      href="{{ url('coursesditels' . '/' . $coursces->id) }}"> قراءة
                                      المزيد ></a>
                                  <button class="but-card mt-3">{{ $coursces->price }}₪ </button>
                              </div>
                          </div>

                      </div>
                  @endforeach

              </div> --}}
          <div class=" card-box-home  card-w  mtb00px  ">
              <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
                  @foreach ($coursces as $coursces)
                      <div class="col colcard">
                          <div class="card-home card card-home " id="card-home">
                              <img src="{{ asset('img/courses/' . $coursces->img_name) }}" class="card-img-top-home"
                                  alt="...">
                              <div class="card-body">
                                  <p class="card-title-home font18px margin-b4">{{ $coursces->name }}</p>
                                  <p class=" font18px ">{{ $coursces->summary }}</p>
                                  <a class="card-button font14px margin-t4"
                                      href="{{ url('coursesditels' . '/' . $coursces->id) }}">
                                      قراءة المزيد ></a>
                                  <button class="but-card font14px margin-t4 ">{{ $coursces->price }}₪ </button>
                              </div>
                          </div>
                      </div>
                  @endforeach

              </div>

          </div>
          <br><br><br>
      @endsection
