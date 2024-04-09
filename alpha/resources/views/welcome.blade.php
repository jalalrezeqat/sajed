@extends('layouts.app')

@section('content')
    {{-- slider home --}}
    {{-- <div id="carouselExampleSlidesOnly" class="carousel slider mt100px mtb00px slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slider as $slider)
                <div class="carousel-item active">
                    <img class="d-block  w-100" src="{{ asset('img/slider/' . $slider->img) }}" alt="First slide">
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
    <section>
        <div class="slider dir " style=" margin-top: 70px;">
            <div class="row">
                <div class="col ring">
                    <div>

                        <p style="font-size: 55px"><span style="color: #27AC1F">تعلّم في </span> أي وقت، وأي مكان</p>
                    </div>
                    <div>
                        <p style="font-size: 25px;margin-top:50px;    font-weight:700 ;
">نحن نقدم لك كافة دورات مرحلة
                            التوجيهي التي تحتاجها
                            للحـصـول عـلى مـعـدل
                            تحلم به وعلى ايدي امهر الاساتذة.</p>
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
                                        <p style="font-size: 20px;color:#27AC1F; font-weight:700;">تعرّف أكثر</p>
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
    {{-- end slider home --}}

    {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}
    <section class="mt100px">
        <div class="contener  ">
            <div class="m-1">
                <h3 class="text-center font48px">دورات التوجيهي الأكثر طلباً </h3>
                <h5 class="text-center font18px mt"style="">اختر دورات التوجيهي التي تناسبك وتساعدك على زيادة معدلك</h5>
            </div>
            {{-- card course --}}
            <div class=" card-box-home  card-w  mtb00px  slider">
                <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
                    @foreach ($courses as $courses)
                        <div class="col">
                            <div class="card-home card " id="card-home">
                                <img src="{{ asset('img/courses/' . $courses->img_name) }}" class="card-img-top-home"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title-home font18px margin-b4">{{ $courses->name }}</h5>
                                    <p class=" font14px ">{{ $courses->summary }}</p>
                                    <a class="card-button font14px margin-t4"
                                        href="{{ url('coursesditels' . '/' . $courses->id) }}">
                                        قراءة المزيد ></a>
                                    <button class="but-card font14px margin-t4 ">{{ $courses->price }}₪ </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="card-btn-allcourse ">
                    <a href="{{ url('/courses') }} "><button class="btn-allcourse">جميع الدورات</button></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- end card course --}}

    <section class="mt100px">
        <div class="m-1 ">
            <h3 class="text-center font48px">معلمي منصة الفا </h3>
            <h5 class="text-center font18px mb-4 mt"style="font-size: 18px">نفتخر في ألفا بتواجد أفضل المُدرسين على مستوى
                الوطن!
            </h5>
        </div>

        {{-- slide teacher --}}
        <div id="carouselExampleIndicators mtb00px mt100px" class="carousel shadow-lg  slide" data-ride="carousel">
            <img src="{{ asset('img/Vector.png') }}" id ="shapetetcher1" alt="">
            {{-- @foreach ($sliderteacher as $key => $sliderteachers)
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="{{ $key == 0 ? 'active' : '' }}">
                    </li>
                </ol>
            @endforeach --}}

            <div class="carousel-inner" role="listbox">
                @foreach ($sliderteacher as $key => $sliderteachers)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block d-block   img-slider-teacher"
                            src="{{ asset('img/slider/' . $sliderteachers->img) }}" alt="{{ $sliderteachers->id }}">
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <img src="{{ asset('img/Vector.png') }}" id ="shapetetcher2" alt="">
        </div>



    </section>
    {{-- end slide teacher --}}
    {{-- qustion  --}}
    <section class="mt100px">
        <div class=" m-3 dir mtb00px mt100px card-text-home">
            <h2 class="card-text-home font48px ">الاسئلة الشائعة</h2>
            @foreach ($CommonQuestions as $question)
                <div class="qustion1">
                    <p>
                        <a class="purple-head hover-black plusand-" onclick="changeIcon(this)" id="myBtn">
                            <i id="faPlus" class="fa colorg fa-plus font-xs"></i>
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $question->id }}"
                                aria-expanded="false" aria-controls="collapseExample"
                                class="btn qustion-text  font18px">{{ $question->question }}</button>
                    </p>
                    <div class="collapse " id="collapse{{ $question->id }}">
                        <div class="  qustion-box card-body">
                            <p style="font14px">{{ $question->question_text }}</p>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach


        </div>
    </section>
    {{-- end qustion --}}
@endsection

<script>
    function changeIcon(anchor) {
        var icon = anchor.querySelector("i");
        icon.classList.toggle('fa-plus');
        icon.classList.toggle('fa-minus');

        anchor.querySelector("span").textContent = icon.classList.contains('fa-plus') ? "Read more" : "Read less";
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel({
        interval: 1000
    });

    setInterval(() => {
        $('.carousel').carousel('dispose')
        $('.carousel').carousel({
            interval: 2000
        });
    }, 10000)
</script>
