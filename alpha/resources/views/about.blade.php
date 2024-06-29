<!DOCTYPE html>
<html lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="منصة الفا التعليمية هي منصة الكترونية فلسطينية تقدم دورات تعليمية لمرحلة التوجيهي على المنهاج الفلسطيني وتهدف لتوفير الجهد والوقت على الطلبة
">
    <meta name="keywords" content="حول منصفة الفا التعليمية ,  دورات تعليمية, توجيهي">

</head>
@extends('layouts.app')
<?php session('windowW'); ?>
<livewire:breakpoints />

@section('content')
    {{-- slider about --}}
    <section>
        <div class="slider dir " style=" margin-top: 70px;">
            <div class="row">
                @windowWidthGreaterThan(481)

                <div class="col ring">
                    <div>

                        <p class="font48px">حول منصّة ألفا التعليميّة</p>
                        @foreach ($aboutalpha as $aboutalphas)
                            <p class="font18px  aboutalpha">{{ $aboutalphas->aboutalpha }}</p>
                        @endforeach
                    </div>

                    <div>
                        <div class="row dir " style="margin-top:10%">
                            <div class="col">
                                <a href="{{ url('/courses') }}"><button class="btnhome btn">ابدأ الآن</button></a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-9 mt"><i class="fa fa-play-circle-o font24px"
                                            style="color:#27AC1F"></i>
                                        <span class="font20px" style="color:#27AC1F; font-weight:700;">تعرّف أكثر</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    @foreach ($slider as $slider)
                        <img class=" img-about2 img-about1" src="{{ asset('img/slider/' . $slider->img) }}" alt="">
                    @endforeach
                </div>
            </div>
            @endif
            @windowWidthLessThan(480)
            <div class="col">
                @foreach ($slider as $slider)
                    <img class="img-about" src="{{ asset('img/slider/' . $slider->img) }}" alt="">
                @endforeach
            </div>
            <div class="col ring">
                <div>

                    <p class="font48px" style="text-align: center">حول منصّة ألفا التعليميّة</p>
                    @foreach ($aboutalpha as $aboutalphas)
                        <p class="font18px aboutalpha">{{ $aboutalphas->aboutalpha }}</p>
                    @endforeach

                </div>
                <div>
                    <div class="row dir " style="margin-top:50px">
                        <div class="col">
                            <a href="{{ url('/courses') }}"><button class="btnhome btn">ابدأ الآن</button></a>
                        </div>
                        <div class="col">
                            <div class="row" style="margin:auto">
                                <div class="col-sm-9 mt"><i class="fa fa-play-circle-o font20px" style="color:#27AC1F"></i>
                                    <span class="font20px" style="color:#27AC1F; font-weight:700;">تعرّف أكثر</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endif
        </div>
    </section>
    {{-- end slider about --}}
    <!--  -->
    <section style="margin-top: 30px">
        <div class="slider-cource dir ">
            <div>
                <h1 class=" text-bold font32px"> <img style="margin-left:3%" src="img/aboutv.png" alt="">رؤيتنا :
                </h1>
                @foreach ($vision as $vision)
                    <p class="vision font18px">{{ $vision->our_vision }}</p>
            </div>
            @endforeach
            <div class="">
                <h1 class="text-bold font32px"><img style="margin-left:3%" src="img/aboutm.png" alt="">مهمتنا :</h1>
                <div class="mission">
                    <p class="font18px">تتمحور مهامنا في منصّة ألفا حول: </p>
                    @foreach ($mission as $mission)
                        <?php
                        echo $mission->summernote;
                        ?>
                    @endforeach
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
