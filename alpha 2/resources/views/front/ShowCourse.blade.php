@extends('layouts.app')

@section('content')
    <div class="namecourse mt-5   float-right mb-2">
        <p class="namebranchshow-text" style="font-size:14px;margin-top:2%"> الدورات > {{ $b->branche }} >
            {{ $b->name }} -
            {{ $b->branche }} - {{ $b->chabters }} </p>
    </div>

    <br>
    <br>
    <br>

    <div class="row mt-5 dir">
        <div class="col-sm-4">
            <div class="sidbarshowcourse">

                <div>
                    <p class="text-center mt-3" style="font-size: 25.38px">اهلا بك : {{ Auth::user()->name }}</p>
                    <p class="text-center" style="font-size: 12.69px">هل أنتَ مُستعد للحصول على العلامة التي تحلُم بها؟ </p>
                    @if ($mark == null)
                        <h2 class="text-center mb-3">0</h2>
                    @else
                        <h2 class="text-center mb-3">{{ $mark->mark }}</h2>
                    @endif

                </div>
                @foreach ($chbter as $chbters)
                    <?php
                    $countoflesson = 0;
                    
                    $count = 0;
                    foreach ($lesson as $lessons) {
                        if ($lessons->chabters == $chbters->id) {
                            $countoflesson++;
                        }
                        $count = $countoflesson;
                    }
                    
                    ?>
                    <div class="boxcolabssshow">
                        <div class="">
                            <div class="chabternamecollabsshow">
                                <button class="btn  qustion" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                    aria-controls="collapseExample"></button>
                                <button type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                    aria-controls="collapseExample" class="btn qustion-text "style="font-size:14px;">
                                    <p class="buttonshow">{{ $chbters->name }} </p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="collapse  scroll-section" id="collapse{{ $chbters->id }}">
                        {{-- <div class="collapse" id="collapse{{$chbter->id}}"> --}}
                        @foreach ($lesson as $key => $lessons)
                            <?php $count = 0;
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $year . '-' . $month . '-' . $day;
                            
                            ?>

                            @if ($lessons->chabters == $chbters->id)
                                <div class="card card-body" id="">
                                    <div class="ditelsco">


                                        <i style="font-size:14px;color:#27AC1F" class="fa">&#xf144;</i>
                                        <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                style="border: none;background-color:#f8fafc
                                  ">{{ $lessons->name }}</button></a>
                                        <?php
                                        $path = 'img/vedio/' . $lessons->vedio;
                                        $file = $id3->analyze($path);
                                        ?>
                                        <p class="mindet"><?php echo $file['playtime_string']; ?> دقيقة</p>


                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @foreach ($quiz as $key => $quizs)
                            @if ($quizs->chabters == $chbters->id)
                                <div class="card card-body" id="">
                                    <div class="ditelsco">
                                        <i class="fa  fa-book" style="font-size:24px;color:#27AC1F" aria-hidden="true"></i>
                                        <a href="{{ url('quiz' . '/' . $quizs->id . '/' . $b->id) }}"><button
                                                style="border: none;background-color:#f8fafc
                                  ">{{ $quizs->name }}</button></a>
                                        <?php $m = 'order'; ?>

                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
                <div>
                    <p class="text-center mt-3" style="font-size:18px">قيّم الدورة</p>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div>
                {{-- <video  controls controlsList="nodownload" autoplay="autoplay" playsinline width="100%" src="{{asset('img/vedio/'.$lessons->vedio)}}">
                </video> --}}
                <div class="vidio">
                    @foreach ($vedio as $vedios)
                        <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                            <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4" size="576">
                            <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4" size="720">
                            <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4" size="1080">
                    @endforeach
                    <!-- Caption files -->
                    <!-- Fallback for browsers that don't support the <video> element -->
                    </video>

                </div>

                <div class="row mt-5  ">
                    <div class="col marginr5 ">
                        <p class="mr-5 font18px "> {{ $vedios->chabters }}</p>
                    </div>
                    <div class="col">
                        <p class="flo font14px"> {{ $duration_seconds }} دقيقة</p>
                    </div>
                </div>
                <div class="row dir">
                    <div class="col marginr5">
                        <p class="font18px ">{{ $vedios->name }}</p>
                    </div>
                    <div class="col">
                        <a href="{{ url('download' . '/' . $vedios->id) }}" class="flo font18px limkdown">تحميل ملخّص
                            المُحاضرة</a>
                    </div>
                </div>

                <form action="{{ url('markofcourse' . '/' . $b->id) }}" method="POST">
                    @csrf
                    <div class="row dir">
                        <div class="col">
                            <div class="row marginr5">
                                <p class="col-5 font18px" style="padding: 0%;margin-left:2%;">حدد معدّل تطمح
                                    في الوصول إليه في الرياضيات: </p>
                                <input type="text" class="inpoutcours" name="mark" required maxlength="2">
                                <button class=" butcoresscore  col-lg-3" style="    margin-right: 2%;">ادخال </button>
                            </div>
                        </div>
                </form>
            </div>
            <div>

                <p class="font18px marginr5">بعض النصائح المُقدّمة من ألفا لزيادة التركيز أثناء التعلّم:</p>
                <p class="font14px marginr5">
                <ul class="marginr5  font14px">
                    <li>حدد مكان هادئ وخالٍ من الانشغال حيث يمكنك التركيز بشكل جيد</li>
                    <li>قم بتجهيز أدوات الدراسة الخاصة بك مسبقًا، مثل الكمبيوتر المحمول، والأقلام، والورق</li>
                    <li>حدد جدول زمني لدراستك والتزام به بانتظام</li>
                    <li>قم بتقسيم الوقت إلى فترات قصيرة مع فترات استراحة لتجنب التعب العقلي</li>
                    <li>تفاعل مع زملائك وأستاذك من خلال طرح الأسالة ومشاركة التلاخيص على جروب الواتس آب</li>
                </ul>
                </p>

            </div>



        </div>
    </div>

    </div>
    </div>
    {{--  --}}
@endsection
