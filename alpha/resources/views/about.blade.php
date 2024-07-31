<!DOCTYPE html>
<html lang="ar">
<?php $iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="منصة الفا التعليمية هي منصة الكترونية فلسطينية تقدم دورات تعليمية لمرحلة التوجيهي على المنهاج الفلسطيني وتهدف لتوفير الجهد والوقت على الطلبة
">

    <meta name="keywords" content="حول منصفة الفا التعليمية ,  دورات تعليمية, توجيهي">
    @foreach ($iconfav as $iconfavs)
        <link rel="icon" type="image/x-icon" href="{{ asset('img/Favoriteicon/' . $iconfavs->img) }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('img/Favoriteicon/' . $iconfavs->img) }}">
    @endforeach
</head>
@extends('layouts.app')
<?php session('windowW'); ?>
<livewire:breakpoints />

@section('content')
    {{-- slider about --}}
    <section>
        <div class="slider dir " style=" margin-top: 70px;">
            <div class="row">
                @if ($agent->isDesktop())
                    <div class="col ring">
                        <div>

                            <p class="font48px">حول منصّة ألفا التعليميّة</p>
                            @foreach ($aboutalpha as $aboutalphas)
                                <p class="font18px  aboutalpha">{{ $aboutalphas->aboutalpha }}</p>
                            @endforeach
                        </div>

                        <div>
                            <div class="row dir " style="margin-top:50px">
                                <div class="col">

                                    <a href="{{ url('/courses') }} "><button class="button1 ">ابدأ الآن
                                        </button></a>
                                </div>
                                <div class="col mt-2">

                                    <div class="row">
                                        <div style="display:inline">
                                            <div style=" width: 50%;">
                                                <label class="btncouresdetale "
                                                    style="color:#27AC1F; font-weight:700;font-size:1.25vw;float:left;
"
                                                    aria-current="page" for="modal-toggle-vedio">
                                                    تعرف اكثر
                                                </label>

                                            </div>
                                            <div style=" ">
                                                <label><img id="" style="width: 30px"
                                                        src="{{ asset('img/alphaaboutmore.png') }}" alt=""></label>
                                            </div>
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

                                <a href="{{ url('/courses') }} "><button class="button1 ">ابدأ الآن
                                    </button></a>
                            </div>
                            <div class="col mt-2">

                                <div class="row">
                                    <div style="display:inline">
                                        <div style=" width: 80%;">
                                            <label class="btncouresdetale "
                                                style="color:#27AC1F; font-weight:700;font-size:4vw;float:left;
"
                                                aria-current="page" for="modal-toggle-vedio">
                                                تعرف اكثر
                                            </label>

                                        </div>
                                        <div style=" ">
                                            <label><img id="" style="width: 30px"
                                                    src="{{ asset('img/alphaaboutmore.png') }}" alt=""></label>
                                        </div>
                                    </div>

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
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- Login Form Popup HTML -->

                    <input id="modal-toggle-vedio" type="checkbox">
                    <label class="modal-backdrop" data-bs-backdrop="static" tabindex="-1" for="modal-toggle-vedio"></label>
                    <div class="modal-content-vedio">
                        <label class="modal-close-btn" for="modal-toggle-vedio">
                            <svg width="30" height="30">
                                <line x1="5" y1="5" x2="20" y2="20" />
                                <line x1="20" y1="5" x2="5" y2="20" />
                            </svg>
                        </label>
                        <!--  LOG IN  -->

                        <div class="col-12 dir" style="margin: auto;">

                            <div class="vidio " style="height: 50%;width: 80%;margin: auto;">
                                @foreach ($aboutmore as $aboutmores)
                                    <video style="height: 50%;width: 80%;margin: auto;" controls autoplay
                                        style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                                        <source src="{{ asset('img/aboutmore/' . $aboutmores->vedio) }}" type="video/mp4"
                                            size="576">
                                @endforeach

                            </div>
                        </div>
                    </div>
    </section>
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
{{-- --}}
