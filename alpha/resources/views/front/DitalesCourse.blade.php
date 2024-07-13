@extends('layouts.app')
@vite(['resources/css/vedio.css', 'resources/css/order.css', 'resources/css/massage.css'])

@section('content')
    <?php session('windowW'); ?>
    <livewire:breakpoints />

    <section>

        <div class="namecourse  float-right mb-2">
            <p class="namebranchshow-text"> <a class=" text-dark" href="{{ url('courses') }}">الدورات</a> > <a
                    class=" text-dark" href="{{ url('courses/' . $b->id) }}">{{ $b->branche }}</a>
                > {{ $b->name }} </p>
        </div>

        <br>
        <br>




        <div class="box-ditalescourse" id="box-ditalescourse">
            @if($agent->isDesktop()||$agent->isTablet())

            <div class="column1">

                <form action="{{ url('codesend/' . $user) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div id="mr2">
                        <div class="row coursename mt-5 ">

                            <p class="user_name h3 font481px"> {{ $b->name }}</p>
                            <p class="user_name h3 font481px">{{ $b->branche }} - {{ $b->chabters }} </p>
                        </div>
                        <div class="row coursedetales mt-5">
                            <p class="mt-3  col-lg-4 font14px" style="color: #F8F8F8"> <span> <i class="fa  fa-user"
                                        style="font-size:14px;color:#F8F8F8"></i>
                                </span> مدرس الدورة :
                                @foreach ($teatcher as $teatchers)
                                    {{ $teatchers->name }}
                            </p>
                            @endforeach

                            <p class="mt-3  col-lg-5 font14px" style="color: #F8F8F8"> <span><i class="fa fa-list"
                                        style="font-size:14px;"></i>
                                </span> عدد دروس الدورة :
                                {{ $lessoncount }} درساً مسجلاً</p>
                        </div>
                        @if($agent->isDesktop())

                        <div class="row coursedetales mt-5">
                            <button type="button1" class=" btncouresdetales  col-lg-6"><label class="font14px "
                                    aria-current="page" for="modal-toggle-order"> اطلب بطاقتك </label></button>
                            <p class=" mr-3 col-lg-5" style="color: #F8F8F8;margin-right: 90px;"> أدخل كود البطاقة
                                وابدأ
                                بالتّعلّم</p>
                        </div>
                        <div class="row coursedetales">

                            <p class="mt-3 font14px col-lg-3" style="color: #85FE78; "> السعر :
                                {{ $b->price }} ₪
                            </p>
                            @endif
                            @if($agent->isTablet()
                            )
                            <div class="row coursedetales mt-5">

                                <button type="button1" class=" btncouresdetales  col-lg-6"><label class="font14px "
                                        aria-current="page" for="modal-toggle-order"> اطلب بطاقتك </label></button>
                                <p class="mt-3 font14px col-lg-3" style="color: #85FE78; "> السعر :
                                    {{ $b->price }} ₪
                                </p>
                                <p class=" mr-3 col-lg-5" style="color: #F8F8F8;margin-right: 0px;"> أدخل كود البطاقة
                                    وابدأ
                                    بالتّعلّم</p>
                                @endif

                                <input class="mt-3 inputorder col-lg-4" required @error('error') is-invalid @enderror
                                    placeholder="حافظ على سريّة معلوماتك..." name="code" type="text">

                                <button type="submit" class=" btnsubmitorder mt-3 col-lg-6">إدخال </button>
                            </div>

                </form>
                <br>
                <br>
            </div>
        </div>
        <div class="column2">
            <img class="imgditels " src="{{ asset('/img/teatcher_course/' . $b->img_teatcher) }}" alt="">

        </div>

        @endif
        @if($agent->isMobile())
        <div class="row mobiw">

            <div class="col-12">
                <form action="{{ url('codesend/' . $user) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mobiw">
                        <div class="row coursename mt-5 ">

                            <p class="user_name h3 font48px"> {{ $b->name }}</p>
                            <p class="user_name h3 font48px">{{ $b->branche }} - {{ $b->chabters }} </p>
                        </div>
                        <div class="row coursedetales mt-5">
                            <p class="mt-3  col-lg-4 font18px" style="color: blanchedalmond;"><span> <i class="fa   fa-user"
                                        style="font-size:18px;color:blanchedalmond"></i>
                                </span> مدرس الدورة :
                                @foreach ($teatcher as $teatchers)
                                    {{ $teatchers->name }}
                            </p>
                            @endforeach

                            <p class="mt-3  col-lg-4 font18px" style="color: blanchedalmond"><span><i class="fa fa-list"
                                        style="font-size:18px;"></i>
                                </span> عدد دروس الدورة :
                                {{ $lessoncount }} درساً مسجلاً</p>
                        </div>
                        <div class="row coursedetales mt-5">
                            <button type="button" class=" btncouresdetales  col-lg-6"><label class=" "
                                    aria-current="page" for="modal-toggle-order"> اطلب بطاقتك </label></button>
                            <p class="mt-3  col-lg-3" style="color: #85FE78; margin-right: 10px;"> السعر :
                                {{ $b->price }} ₪
                            </p>
                        </div>
                        <div class="row coursedetales">


                            <p class=" mr-3 col-lg-5" style="color: blanchedalmond;margin-top: 10px;"> أدخل كود البطاقة
                                وابدأ
                                بالتّعلّم</p>
                            <input class="mt-3 inputorder col-lg-4" required @error('error') is-invalid @enderror
                                placeholder="حافظ على سريّة معلوماتك..." name="code" type="text">

                            <button type="submit" class=" btnsubmitorder mt-3 col-lg-6">إدخال </button>
                        </div>

                </form>

            </div>

        </div>
        <div class="column2">
            <img class="imgditels " src="{{ asset('/img/teatcher_course/' . $b->img_teatcher) }}" alt="">
        </div>
        @endif

        </div>
    </section>
    <section>

        {{-- navbar  --}}
        <nav class=" navbar-expand-lg navbarcourse dir navbar-light bg-light mt-5">


            <div class=" navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav  mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">حول الدورة </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tetcher">مدرّس الدورة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how">ماذا سأتعلم؟ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dd">أسئلة شائعة </a>
                    </li>


                </ul>
            </div>
        </nav>
    </section>
    <section class="mt100px">
        {{-- course about --}}
        <div class="ditelspage">
            <h3 class="dir mt-5 mr-5 font24px" id="about">حول الدورة:</h3>
            <p class="font18px aboutalpha ditelspageinsaid dir">{{ $b->aboutcourse }}</p>
            <button class="btncouresdetaless"><label class="btncouresdetale " aria-current="page"
                    for="modal-toggle-vedio">شاهد
                    درس مجّاني</label>
            </button>

        </div>
    </section>
    <section class="mt100px">
        {{-- end --}} {{-- about tatcher --}} <div class=" dir " id="tetcher">
            <h3 class="dir ditelspage font24px">مدرّس الدورة</h3>
            <div class="shadow p-3 ditelspagetet row mt-5 bg-white rounded">
                <img src="{{ asset('img/Vector.png') }}" id ="shapetetcher4" alt="">
                <div class="row">

                    <div class="col-2"></div>
                    <div class="col-2">
                        <div class="row" style="--bs-gutter-x:0">
                            @if($agent->isDesktop())

                            @foreach ($teatcher as $teatchers)
                                <img class="imgtatecher " src="{{ asset('/img/teacher/' . $teatchers->img) }}"
                                    alt="">
                            @endforeach
                        </div>
                        <div class="row">
                            <p class="nametetcher" style="color: #27AC1F;margin-right:15%;">{{ $teatchers->name }}</p>
                        </div>
                        @endif
                        @if($agent->isTablet())
                        @foreach ($teatcher as $teatchers)
                            <img class="imgtatecher " src="{{ asset('/img/teacher/' . $teatchers->img) }}"
                                alt="">
                        @endforeach
                    </div>
                    <div class="row">
                        <p class="nametetcher">{{ $teatchers->name }}</p>
                    </div>
                    @endif
                    @if($agent->isMobile())

                    @foreach ($teatcher as $teatchers)
                        <img class="imgtatecher " src="{{ asset('/img/teacher/' . $teatchers->img) }}" alt="">
                    @endforeach
                </div>
                <div class="row">
                    <p class="nametetcher">{{ $teatchers->name }}</p>
                </div>
                @endif
            </div>
            <div class="col-8 det-cour " style="">
                <p class="">
                    <?php
                    echo $teatchers->summernote;
                    ?>
                </p>
            </div>
        </div>
        </div>
        <img src="{{ asset('img/Vector.png') }}" id ="shapetetcher3" alt="">

        </div>
        </div>
    </section>
    {{-- <div class="col-sm">
  
        @foreach ($teatcher as $teatchers)
        <img  class="imgtatecher " src="{{asset('/img/teacher/'.$teatchers->img)}}" alt="" >
        @endforeach 
      </div>
      <div class="col-sm">
        <div class="">
          <p style="font-size:18px">حاصل على درجة الماجيستير في الرياضيات من جامعة الخليل</p>
          <p>حاصل على درجة الماجيستير في الرياضيات من جامعة الخليل</p>
          <p>حاصل على درجة الماجيستير في الرياضيات من جامعة الخليل</p>
        </div>
      </div> 
      <div class="col-sm">

      </div> --}}
    {{-- end --}}


    {{-- leeson --}}


    <section class="mt100px">
        <div class="ditelspage" id="how">
            <h3 class="dir mb-5 font24px">ماذا سأتعلم؟</h3>

            <div class="boxditales dir">


                @foreach ($chbter as $chbters)
                    <?php
                    $countoflesson = 0;
                    $auth = 1;
                    
                    $count = 0;
                    foreach ($lesson as $lessons) {
                        if ($lessons->chabters == $chbters->id) {
                            $countoflesson++;
                        }
                        $count = $countoflesson;
                    }
                    
                    ?>
                    <div class="boxcolabss">
                        <div class="">
                            <div class="chabternamecollabs">
                                <a class="purple-head hover-black plusand-" onclick="changeIcon(this)" id="myBtn">
                                    <i data-bs-toggle="collapse" data-bs-target="#collapse{{ $chbters->id }}"
                                        aria-expanded="false" aria-controls="collapseExample"
                                        class="fa colorg fa-plus font-xs"></i>
                                    <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                        aria-controls="collapseExample" class="btn qustion-text font18px ">
                                        {{ $chbters->name }} </button>
                                    <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                        aria-controls="collapseExample " class="btn qustion-text font18px "
                                        id="countleeson">
                                        {{ $count }} دروس </button>

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
                                    <div class="ditelsco  ">
                                        <?php  if (Auth::user()): ?>
                                        @if ($key == 0)
                                            <?php
                                            $path = 'img/vedio/' . $lessons->vedio;
                                            $file = $id3->analyze($path);
                                            $auth = 1;
                                            
                                            ?>

                                            @foreach ($code as $codes)
                                                @if (
                                                    ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today) & ($codes->courses == $b->id) ||
                                                        ($codes->courses == 'جميع الدورات') & ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today))
                                                    <?php $auth = 0; ?>
                                                @endif
                                            @endforeach
                                            @if ($auth == 0)
                                                <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                                <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                        style="border: none;background-color:#f8fafc
                                                            ">{{ $lessons->name }}</button></a>
                                            @endif
                                            @if ($auth != 0)
                                                <span id="ditelsco1">مشاهدة مجانيّة</span>
                                                <i style="font-size:24px;color:27AC1F" class="fa">&#xf144;</i>
                                                <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                        style="border: none;background-color:#f8fafc
                                                                                                             "><label
                                                            class=" font14px" aria-current="page"
                                                            for="modal-toggle-vedio">
                                                            {{ $lessons->name }}
                                                        </label></button></a>
                                            @endif
                                            {{-- <p class="mindet"><?php echo $file['playtime_string']; ?> دقيقة</p> --}}

                                            <?php endif;?>


                                            @if ($key > 0)
                                                @foreach ($code as $codes)
                                                    <?php $insid = 0; ?>
                                                    @if (
                                                        ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today) & ($codes->courses == $b->id) ||
                                                            ($codes->courses == 'جميع الدورات') & ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today))
                                                        <?php $insid = 1; ?>
                                                        <?php $auth = 0; ?>
                                                    @endif
                                                @endforeach
                                                @if ($auth == 0)
                                                    <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                                    <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                            style="border: none;background-color:#f8fafc
                                                             ">{{ $lessons->name }}</button></a>
                                                    <?php $insid1 = 1; ?>
                                                @endif
                                                @if ($auth != 0)
                                                    <i style="font-size:24px;color:" class="fa">&#xf144;</i>
                                                    <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                            disabled
                                                            style="border: none;background-color:#f8fafc
                                                            ">{{ $lessons->name }}</button></a>
                                                    <?php
                                                    $path = 'img/vedio/' . $lessons->vedio;
                                                    $file = $id3->analyze($path);
                                                    ?>
                                                    <p class="mindet"><?php echo $file['playtime_string']; ?> دقيقة</p>

                                                    <?php $insid = 0; ?>
                                                @endif
                                            @endif
                                            <?php endif; ?>


                                            {{-- not auth --}}
                                            <?php  if (!Auth::user()): ?>
                                            @if ($key == 0)
                                                <span id="ditelsco1">مشاهدة مجانيّة</span>

                                                <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                                <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                        style="border: none;background-color:#f8fafc
                                       "><label
                                                            class=" " aria-current="page" for="modal-toggle-vedio">
                                                            {{ $lessons->name }} </label></button></a>
                                               
                                            @endif
                                            @if ($key > 0)
                                                <i style="font-size:24px;color:" class="fa">&#xf144;</i>
                                                <a href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}"><button
                                                        class="font14px" disabled
                                                        style="border: none;background-color:#f8fafc
                                       ">{{ $lessons->name }}</button></a>
                                                {{-- <?php
                                                $path = 'img/vedio/' . $lessons->vedio;
                                                $file = $id3->analyze($path);
                                                ?>
                                                <p class="mindet font14px"><?php echo $file['playtime_string']; ?> دقيقة</p> --}}
                                            @endif

                                            <?php endif; ?>

                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <?php $count = 0;
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');
                        $today = $year . '-' . $month . '-' . $day;
                        
                        ?>

                        <?php  if (!Auth::user()): ?>

                        @foreach ($quiz as $key => $quizs)
                            @if (($quizs->chabters == $chbters->id) & ($quizs->courses == $b->id))
                                <div class="card card-body" id="">
                                    <div class="ditelsco">
                                        <i class="fa  fa-book" style="font-size:24px;color:#" aria-hidden="true"></i>
                                        {{ $quizs->name }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <?php endif; ?>

                        {{--  --}}
                        <?php  if (Auth::user()): ?>

                        {{-- @foreach ($code as $codes)
                            <?php $insi1 = 0;
                            ?>

                            @if (($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today) & ($codes->courses == $b->id) || ($codes->courses == 'جميع الدورات') & ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today))
                            @endif
                        @endforeach --}}
                        @if ($auth == 0)
                            @foreach ($quiz as $key => $quizs)
                                <?php $insi1 = 1; ?>

                                @if (($quizs->chabters == $chbters->id) & ($quizs->courses == $b->id))
                                    <div class="card card-body" id="">
                                        <div class="ditelsco">
                                            <i class="fa  fa-book" style="font-size:24px;color:#27AC1F"
                                                aria-hidden="true"></i>
                                            {{ $quizs->name }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if (($codes->user_id != Auth::user()->id) & ($auth != 0))
                            @foreach ($quiz as $key => $quizs)
                                @if (($quizs->chabters == $chbters->id) & ($quizs->courses == $b->id))
                                    <div class="card card-body" id="">
                                        <div class="ditelsco">
                                            <i class="fa  fa-book" style="font-size:24px;" aria-hidden="true"></i>
                                            {{ $quizs->name }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <?php endif; ?>

                        {{--  --}}
                    </div>
                @endforeach
            </div>
            </a>
            <div class="col text-center">
                <button class=" btncouresdetales mt-5 text-center"><label class=" " aria-current="page"
                        for="modal-toggle-order"> اطلب بطاقتك </label>
                </button>


            </div>
        </div>
    </section>
    <section class="mt100px">
        <div class=" m-3 dir card-text-home" id="dd">
            <h2 class="card-text-home font24px">الاسئلة الشائعة</h2>
            @foreach ($questionscours as $questionscourss)
                <div class="qustion1">
                    <p>
                        <a class="purple-head hover-black plusand-" onclick="changeIcon(this)" id="myBtn">
                            <i data-bs-toggle="collapse" data-bs-target="#collapse{{ $questionscourss->id }}qu"
                                aria-expanded="false" aria-controls="collapseExample"
                                class="fa colorg fa-plus font-xs"></i>
                            <button type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $questionscourss->id }}qu" aria-expanded="false"
                                aria-controls="collapseExample"
                                class="btn qustion-text font18px">{{ $questionscourss->question }}</button>
                    </p>
                    <div class="collapse " id="collapse{{ $questionscourss->id }}qu">
                        <div class="  qustion-box card-body">
                            {{-- <p style="font-size: 87.5%">{{$questionscourss->question_text}}</p>   --}}
                            <p style="font-size: 87.5%">
                                <?php
                                echo $questionscourss->summernote;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </a>


    </section>

    {{--  --}}
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Login Form Popup HTML -->

                <input id="modal-toggle-vedio" type="checkbox">
                <label class="modal-backdrop" data-bs-backdrop="static" tabindex="-1" for="modal-toggle-vedio"></label>
                <div class="modal-content">
                    <label class="modal-close-btn" for="modal-toggle-vedio">
                        <svg width="30" height="30">
                            <line x1="5" y1="5" x2="20" y2="20" />
                            <line x1="20" y1="5" x2="5" y2="20" />
                        </svg>
                    </label>
                    <!--  LOG IN  -->

                    <div class="col-12 dir" style="margin: auto;">

                        <div class="vidio " style="height: 80%;width: 80%;margin: auto;">
                            @foreach ($lesson as $iframe)
                                @if (($lesson[0]->vedio != null) & ($lesson[0]->iframe == null))
                                    <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline
                                        poster="">
                                        <source src="{{ asset('img/vedio/' . $lesson[0]->vedio) }}" type="video/mp4"
                                            size="576">
                                        <source src="{{ asset('img/vedio/' . $lesson[0]->vedio) }}" type="video/mp4"
                                            size="720">
                                        <source src="{{ asset('img/vedio/' . $lesson[0]->vedio) }}" type="video/mp4"
                                            size="1080">
                                    @else
                                        <iframe src="{{ $lesson[0]->iframe }}" frameborder="0"
                                            style="border:0;height:400px;width:880px;max-width:100%"
                                            allowFullScreen="true" allow="encrypted-media"></iframe>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="rt-container">
                    <div class="col-rt-12">
                        <div class="Scriptcontent">

                            {{--  --}}


                            {{--  --}}
                            <div class="rt-container">
                                <div class="col-rt-12">
                                    <div class="Scriptcontent">

                                        {{--  --}}

                                        <!-- Login Form Popup HTML -->

                                        <input id="modal-toggle-order" type="checkbox">
                                        <label class="modal-backdrop" for="modal-toggle-order"></label>
                                        <div class="modal-content-order">
                                            <label class="modal-close-btn" for="modal-toggle-order">
                                                <svg width="30" height="30">
                                                    <line x1="5" y1="5" x2="20" y2="20" />
                                                    <line x1="20" y1="5" x2="5" y2="20" />
                                                </svg>
                                            </label>
                                            <h1 class="mb-3 dir text-center ">{{ $b->name }}</h1>
                                            <h2 class="mb-3 dir text-center ">{{ $b->branche }} -
                                                {{ $b->chabters }}
                                            </h2>

                                            <div class="row justify-content-around">
                                                <div class="col-12 col-md-5">
                                                    @error('password_verified_at')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row dir  coursedetales mt-3">
                                                <p class=" mr-5  col-12 col-md-5" style="color: "> مدرس الدورة :
                                                    {{ $b->teacher_name }} </p>
                                                <p class=" col-12 col-md-5" style="color: "> عدد دروس الدورة :
                                                    {{ $lessoncount }} درساً مسجلاً</p>
                                            </div>

                                            <!--  regester  -->
                                            <form class="contectus-form dir" method="POST"
                                                action="{{ route('order.store') }}">
                                                @csrf
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @elseif (session('error'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif

                                                <div class="row gy-4 gy-xl-2 p-4 p-xl-5 d-flex justify-content-around">

                                                    <div class="col-12 col-md-4">
                                                        <label for="fname" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <h5>ادخل اسمك الرباعي : </h5>
                                                        </div>
                                                    </div>
                                                    <?php  if (Auth::user()): ?>
                                                    <div class="col-12 col-md-8">
                                                        <label for="email" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <input type="name" class="form-control"
                                                            placeholder="الاسم الرباعي" id="name" name="name"
                                                            value="{{ Auth::user()->name }}" required>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php  if (!Auth::user()): ?>
                                                    <div class="col-12 col-md-8">
                                                        <label for="email" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <input type="name" class="form-control"
                                                            placeholder="الاسم الرباعي" id="name" name="name"
                                                            value="" required>
                                                    </div>
                                                    <?php endif; ?>

                                                    <div class="col-12 col-md-4">
                                                        <label for="fname" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <h5>اختر الدورة المطلوبة :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8 select1">
                                                        <label for="email" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <select class="form-control select1 " name="course"
                                                            id="course">
                                                            <option placeholder=" " id="course" name="course"
                                                                value="{{ $b->id }}" required>
                                                                {{ $b->name }}
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <label for="fname" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <h5>حدّد موقعك: </h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <label for="fname" class=""><span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <input type="gavarment" class="form-control"
                                                                placeholder="المحافظة" id="gavarment" name="gavarment"
                                                                value="" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-5">
                                                        <label for="fname" class=""><span
                                                                class="text-danger"></span> </label>
                                                        <div class="input-group">
                                                            <input type="addres" class="form-control"
                                                                placeholder="العنوان بالتفصيل" id="addres"
                                                                name="addres" value="" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <label for="fname" class="form-label"> <span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <h5>أدخل رقم هاتفك:</h5>
                                                        </div>
                                                    </div>
                                                    <?php  if (Auth::user()): ?>
                                                    <div class="col-12 col-md-3">
                                                        <label for="lname" class="form-label"> <span
                                                                class="text-danger"></label>
                                                        <div class="input-group">
                                                            <input type="phone" class="form-control"
                                                                placeholder="رقم الهاتف" id="phone"
                                                                value="{{ Auth::user()->phone }}" name="phone" required
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php  if (!Auth::user()): ?>
                                                    <div class="col-12 col-md-3">
                                                        <label for="lname" class="form-label"> <span
                                                                class="text-danger"></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="رقم الهاتف" id="phone" name="phone"
                                                                required value="">
                                                        </div>
                                                    </div>
                                                    <?php endif ?>
                                                    <div class="col-12 col-md-5">
                                                        <label for="lname" class="form-label"> <span
                                                                class="text-danger"></label>
                                                        <div class="input-group">


                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-md-12 d-flex but-regester justify-content-center">
                                                        <label for="lname" class="form-label"> <span
                                                                class="text-danger"></label>
                                                        <p class="order-text">ستصلك الـبـطـاقــة خلال 48 ســـــاعة من
                                                            إتمام
                                                            طلبك</p>
                                                    </div>
                                                    <div class="col-12 col-md-6 d-flex  justify-content-center">
                                                        <label for="lname" class="form-label"> <span
                                                                class="text-danger"></label>
                                                        <button type="submit" class="btn detel-form-but ">تآكيد الطلب
                                                        </button>
                                                    </div>
                                                    <div class="col-12 col-md-12 d-flex  justify-content-center">
                                                        <label for="lname" class="form-label"> <span
                                                                class="text-danger"></label>
                                                        <h5 class="price-order">السعر : {{ $b->price }} ₪</h5>
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--  --}}
                            <div class="rt-container">
                                <div class="col-rt-12">
                                    <div class="Scriptcontent">

                                        {{--  --}}


                                        {{--  --}}
                                        <div class="rt-container">
                                            <div class="col-rt-12">
                                                <div class="Scriptcontent">

                                                    {{--  --}}

                                                    <!-- Login Form Popup HTML -->

                                                    <input id="modal-toggle-massage" type="checkbox">
                                                    <label class="modal-backdrop" for="modal-toggle-massage"></label>
                                                    <div class="modal-content-massage">
                                                        <label class="modal-close-btn" for="modal-toggle-massage">
                                                            <svg width="30" height="30">
                                                                <line x1="5" y1="5" x2="20"
                                                                    y2="20" />
                                                                <line x1="20" y1="5" x2="5"
                                                                    y2="20" />
                                                            </svg>
                                                        </label>
                                                        @if (session('message'))
                                                            <div class="alert dandermasseg font18px  text-danger">
                                                                {{ session('message') }}</div>
                                                        @endif
                                                        @if (session('message1'))
                                                            <div class="alert dandermasseg font18px text-success">
                                                                {{ session('message1') }}</div>
                                                        @endif
                                                        @if (session('message3'))
                                                            <div class="alert dandermasseg font18px  text-danger">
                                                                {{ session('message3') }}</div>
                                                        @endif
                                                        @if (session('message65'))
                                                            <div class="alert dandermasseg font18px  text-success">
                                                                {{ session('message65') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}
                                        @if (session('message65') || session('message1') || session('message3') || session('message'))
                                            <script>
                                                $('#modal-toggle-massage').click();
                                            </script>
                                        @endif
                                        <script>
                                            function changeIcon(anchor) {
                                                var icon = anchor.querySelector("i");
                                                icon.classList.toggle('fa-plus');
                                                icon.classList.toggle('fa-minus');

                                                anchor.querySelector("span").textContent = icon.classList.contains('fa-plus') ? "Read more" : "Read less";

                                            }
                                        </script>
                                    @endsection
                                    <script></script>
                                    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/button.js', 'resources/css/custom.css', 'resources/css/login.css', 'resources/css/regestar.css'])
                                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
