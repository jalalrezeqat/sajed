@extends('layouts.app')

@section('content')
    {{-- slider about --}}
    <section>
        <div class="slider dir " style=" margin-top: 70px;">
            <div class="row">
                <div class="col ring">
                    <div>

                        <p style="font-size: 42px">حول منصّة ألفا التعليميّة</p>
                        <p class="font18px">منصّة ألفا التعليميّة والتي أُنشأت في عام 2023م، على يد رائديّ الأعمال
                            الفلسطينيّين تقي الأطرش،
                            وساجد أبورميلة، تُقدّم المنصّة لطلابها المُنتسبين دورات تعليميّة لمرحلة التوجيهي مع الحرص على
                            تقديمها بأفضل جودة مُمكنة بوجود أفضل الأساتذة وأشهرهم في فلسطين والشرح عبر أحدث التقنيات
                            وأوضحها.</p>
                    </div>

                    <div>
                        <div class="row dir " style="margin-top:50px">
                            <div class="col">
                                <a href="{{ url('/courses') }}"><button class="btnhome btn">ابدأ الآن</button></a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-3"> <i class="fa fa-play-circle-o"
                                            style="font-size:48px;color:#27AC1F"></i>
                                    </div>
                                    <div class="col-sm-9 mt">
                                        <p style="font-size: 18px;color:#27AC1F; font-weight:700;">تعرّف أكثر</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    @foreach ($slider as $slider)
                        <img class="img-about" src="{{ asset('img/slider/' . $slider->img) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- end slider about --}}
    <!--  -->
    <section class="mt100px">
        <div class="slider-cource dir ">
            <div>
                <h1 class=" text-bold" style="font-size: 32px"> <img style="margin-left:3%" src="img/aboutv.png"
                        alt="">رؤيتنا :</h1>
                @foreach ($vision as $vision)
                    <p class="vision font18px">{{ $vision->our_vision }}</p>
            </div>
            @endforeach
            <div class="">
                <h1 class="text-bold" style="font-size: 32px"><img style="margin-left:3%" src="img/aboutm.png"
                        alt="">مهمتنا :</h1>
                <div class="mission">
                    <p class="font18px">تتمحور مهامنا في منصّة ألفا حول: </p>

                    <ul>
                        @foreach ($mission as $mission)
                            <li><span class="text-bold font18px">{{ $mission->our_mission_titel . ' : ' }}</span>
                                <span class="font18px">{{ $mission->our_mission_text }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endsection

</section>
{{-- 
      <div id="carouselExampleSlidesOnly" class="carousel slider-cource  slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach ($slider as $slider)
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
    </div> --}}
