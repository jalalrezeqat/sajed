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
@extends('layouts.app')
<livewire:breakpoints />
<?php session('windowW'); ?>
@section('content')
    <div class="namebranch  float-right mb-2">
        <p class="namebranch-text">الدورات > {{ $branch->name }}</p>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slider  slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block  w-100" src="{{ asset('img/cona.jpeg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            </div>
        </div>
    </div>
    <h3 class="text-center font42px mt-3">دورات الثانويّة العامّة </h3>
    <h3 class="text-center font42px font-weight-bold"> {{ $branch->name }} </h3>

    <div class="d-flex justify-content-center mt-5 dir">
        <div id="butcour">
            <a href="{{ route('front.FrontCourcse', $branch->id) }}" class="btn btnfcous">الفصل الاول </a>
        </div>
        <div class="mr-5">
            <a href="{{ route('front.FrontCourcse1', $branch->id) }}" class="btn  btnfcou">الفصل الثاني</a>
        </div>
    </div>

    <div class="  ">

        <div class=" card-box-home  card-w  mtb00px  ">
            <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
                @foreach ($coursces as $coursces)
                    <div class="col">
                        <div class="card-home card card-home " id="card-home">
                            <img src="{{ asset('img/courses/' . $coursces->img_name) }}" class="card-img-top-home"
                                alt="...">
                            <div class="card-body">
                                <p class="card-title-home font18px margin-b4">{{ $coursces->name }}</p>
                                <p class=" font14px ">{{ $coursces->summary }}</p>
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
    </div>
@endsection
