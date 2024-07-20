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
                @if ($agent->isDesktop() || $agent->isTablet())
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
                            <img class="img-about" src="{{ asset('img/slider/' . $slider->img) }}" alt="">
                        @endforeach
                    </div>
            </div>
            @endif
            @if ($agent->isMobile())
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
                                    <div class="col-sm-9 mt"><i class="fa fa-play-circle-o font20px"
                                            style="color:#27AC1F"></i>
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

    <section style="margin-top: 30px; ">
        <div class="slider-aboutalpha dir ">
            <div>
                <h1 class=" text-bold font32px"> <img style="margin-left:3%" src="img/aboutv.png" alt="">رؤيتنا :
                </h1>
                @foreach ($vision as $vision)
                    <p class="vision font18px">{{ $vision->our_vision }}</p>
            </div>
            @endforeach
        </div>

    </section>
    <div class="slider-aboutalpha dir">
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
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
{{-- --}}
