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
    <br>
    @windowWidthBetween(0, 1028)
    <br><br>
    <div class="col-sm-8">
        <div>
            {{-- <video  controls controlsList="nodownload" autoplay="autoplay" playsinline width="100%" src="{{asset('img/vedio/'.$lessons->vedio)}}">
                </video> --}}
            <div class="vidio">
                @foreach ($vedio as $vedios)
                    @if (($vedios->vedio != null) & ($vedios->iframe == null))
                        <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                            <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4" size="576">
                            <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4" size="720">
                            <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4" size="1080">
                        @else
                            <iframe src="{{ $vedios->iframe }}" frameborder="0"
                                style="border:0;height:400px;width:880px;max-width:100%" allowFullScreen="true"
                                allow="encrypted-media"></iframe>
                    @endif
                @endforeach
                <!-- Caption files -->
                <!-- Fallback for browsers that don't support the <video> element -->
                </video>

            </div>
            @endif
            @foreach ($vedio as $vedioss)
                <?php
                $shado = 'shadoplay';
                ${'shado' . $vedioss->id} = 'shadoplay';
                // dd(${'shado' . $vedioss->id});
                ?>
            @endforeach
            <div class="row mt-5 dir">
                <div class="col-sm-4">
                    <div class="sidbarshowcourse">

                        <div>
                            <p class="text-center mt-3" style="font-size: 25.38px">اهلا بك : {{ Auth::user()->name }}</p>
                            <p class="text-center" style="font-size: 12.69px">هل أنتَ مُستعد للحصول على العلامة التي تحلُم
                                بها؟ </p>
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
                            $endleeson = 1;
                            foreach ($lesson as $lessons) {
                                if ($lessons->chabters == $chbters->id) {
                                    $countoflesson++;
                                }
                                $count = $countoflesson;
                            }
                            
                            ?>
                            @foreach ($vedio as $vedioss)
                            @endforeach
                            @foreach ($vedioend as $vedioends)
                                @if ($vedioends->idlesson == $lessons->id)
                                    <?php $endleeson = 0;
                                    
                                    // dd($vedioends->idlesson . '/' . $lessons->id);
                                    
                                    ?>
                                @endif
                            @endforeach
                            @if ($vedioss->chabters == $chbters->id)
                                <div class="boxcolabssshow shadoplay">
                                    <div class="">
                                        <div class="chabternamecollabsshow ">
                                            <button class="btn  qustion" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                                aria-controls="collapseExample"></button>
                                            <button type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                                aria-controls="collapseExample" class="btn qustion-text  ">
                                                <p class="buttonshow font18px ">{{ $chbters->name }} </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="boxcolabssshow ">
                                    <div class="">
                                        <div class="chabternamecollabsshow ">
                                            <button class="btn  qustion" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                                aria-controls="collapseExample"></button>
                                            <button type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $chbters->id }}" aria-expanded="false"
                                                aria-controls="collapseExample" class="btn qustion-text font18px ">
                                                <p class="buttonshow font18px ">{{ $chbters->name }} </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="collapse  scroll-section" id="collapse{{ $chbters->id }}">
                                {{-- <div class="collapse" id="collapse{{$chbter->id}}"> --}}
                                @foreach ($lesson as $key => $lessons)
                                    <?php $count = 0;
                                    $month = date('m');
                                    $day = date('d');
                                    $year = date('Y');
                                    $today = $year . '-' . $month . '-' . $day;
                                    $noplay = 1;
                                    
                                    ?>
                                    <?php
                                    $shado = '1';
                                    ${'shado' . $lessons->id} = $lessons->id;
                                    // dd(${'shado' . $vedioss->id});
                                    ?>

                                    @if ($lessons->chabters == $chbters->id)
                                        @if ($lessons->id == $vedioss->id)
                                            <div class="">
                                                <div class="card shadoplay card-body" id="">
                                                    <div class="ditelsco">


                                                        <i style="font-size:14px;color:#27AC1F" class="fa">&#xf144;</i>
                                                        <a class="text-dark "
                                                            href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}">{{ $lessons->name }}</a>

                                                        <?php
                                                        $num = 1;
                                                        
                                                        $playback = $key;
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div>
                                                <div class="card card-body" id="">
                                                    <div class="ditelsco">
                                                        @foreach ($vedioend as $vedioends)
                                                            @if ($vedioends->idlesson == $lessons->id)
                                                                <?php $noplay = 0; ?>
                                                            @endif
                                                        @endforeach
                                                        @if ($noplay == 0)
                                                            <i style="font-size:14px;color:black"
                                                                class="fa">&#xf144;</i>
                                                            <a class="text-dark font14px"
                                                                href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}">{{ $lessons->name }}</a>
                                                        @endif
                                                        @if ($noplay != 0)
                                                            <i style="font-size:14px;color:#27AC1F"
                                                                class="fa">&#xf144;</i>
                                                            <a class="text-dark font14px"
                                                                href="{{ url('courseshow' . '/' . $b->id . '/' . $lessons->id) }}">{{ $lessons->name }}</a>
                                                        @endif
                                                        {{-- <?php
                                                        $path = 'img/vedio/' . $lessons->vedio;
                                                        $file = $id3->analyze($path);
                                                        ?>
                                                <p class="mindet"><?php echo $file['playtime_string']; ?> دقيقة</p> --}}


                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                                @foreach ($quiz as $key => $quizs)
                                    @if ($quizs->chabters == $chbters->id)
                                        <div class="card card-body" id="">
                                            <div class="ditelsco">
                                                <i class="fa  fa-book" style="font-size:24px;color:#27AC1F"
                                                    aria-hidden="true"></i>
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
                @foreach ($vedio as $vedios)
                @endforeach
                @windowWidthGreaterThan(1028)

                <div class="col-sm-8">
                    <div>
                        {{-- <video  controls controlsList="nodownload" autoplay="autoplay" playsinline width="100%" src="{{asset('img/vedio/'.$lessons->vedio)}}">
                </video> --}}
                        <div class="vidio">
                            @foreach ($vedio as $vedios)
                                @if (($vedios->vedio != null) & ($vedios->iframe == null))
                                    <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline
                                        poster="">
                                        <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4"
                                            size="576">
                                        <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4"
                                            size="720">
                                        <source src="{{ asset('img/vedio/' . $vedios->vedio) }}" type="video/mp4"
                                            size="1080">
                                    @else
                                        <iframe src="{{ $vedios->iframe }}" frameborder="0"
                                            style="border:0;height:400px;width:880px;max-width:100%"
                                            allowFullScreen="true" allow="encrypted-media"></iframe>
                                @endif
                            @endforeach
                            <!-- Caption files -->
                            <!-- Fallback for browsers that don't support the <video> element -->
                            </video>

                        </div>
                        @endif
                        <div class="btn-show  marginr5 mt-5 ">
                            <br>
                            <?php 
                            $num=0;
                             if(  $playback < count($lesson)-1) :   ?>

                            <a
                                href="{{ url('endles' . '/' . $b->id . '/' . $lesson[$playback]->id . '/' . $lesson[$playback + 1]->id) }}">
                                <button class="btn btn-info">تم انهاء
                                    المشاهدة</button></a>

                            <?php else :?>
                            <a href=" {{ url('endles' . '/' . $b->id . '/' . $lesson[$playback]->id . '/' . $num) }}">
                                <button class="btn btn-info">تم انهاء
                                    المشاهدة</button>
                            </a>
                            <?php endif?>



                        </div>
                        <div class="row mt-5  ">
                            <div class="col marginr5 ">
                                @foreach ($chbter as $chbter)
                                    @if ($chbter->id == $vedios->chabters)
                                        <p class=" font18px "> {{ $chbter->name }}</p>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col">
                                {{-- <p class="flo font14px"> {{ $duration_seconds }} دقيقة</p> --}}
                            </div>
                        </div>
                        <div class="row dir">
                            <div class="col marginr5">
                                <p class="font18px ">{{ $vedios->name }}</p>
                            </div>
                            @if ($vedios->file != null)
                                <div class="col">
                                    <a href="{{ url('download' . '/' . $vedios->id) }}"
                                        class="flo font18px limkdown">تحميل ملخّص
                                        المُحاضرة</a>
                                </div>
                            @endif
                        </div>


                        <form action="{{ url('markofcourse' . '/' . $b->id) }}" method="POST">
                            @csrf
                            <div class="row dir">
                                <div class="col">
                                    <div class="row marginr5">
                                        <p class="col-5 font18px" style="padding: 0%;margin-left:2%;">حدد معدّل تطمح
                                            في الوصول إليه : </p>
                                        <input type="text" class="inpoutcours" name="mark" required
                                            maxlength="2">
                                        <button class=" butcoresscore  " style="    margin-right: 2%;">ادخال
                                        </button>
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





                    <script>
                        function playback() {

                        };
                        var userid = $(e.relatedTarget).data('userid');
                        var u_id = document.getElementById('hdn_user_id').value = userid;

                        $.ajax({ //create an ajax request to load page.php
                            type: "GET",
                            url: "ShowCourse.blade.php",

                            data: "varabletophp=" + u_id, //Here is the value you wish to pass in to php page        
                            dataType: "html", //expect html to be returned                
                            success: function(response) {

                                alert(response);
                            }

                        });

                        <?php
                        
                        // $cookie = $_GET['name'];
                        // dd($cookie);
                        
                        use Illuminate\Support\Facades\DB;
                        use Illuminate\Support\Facades\Auth;
                        
                        use App\Models\playback;
                        use App\Models\play;
                        
                        $find = DB::table('playbacks')
                            ->where('idcoures', '=', $b->id)
                            ->where('idofstudant', '=', Auth::user()->id)
                            ->where('idlesson', '=', $vedios->id)
                            ->first();
                        
                        DB::table('playbacks')
                            ->where('idcoures', '=', $b->id)
                            ->where('idofstudant', '=', Auth::user()->id)
                            ->where('idlesson', '=', $vedios->id)
                            ->update(['idlesson' => $vedios->id]);
                        
                        $find1 = DB::table('plays')
                            ->where('idcoures', '=', $b->id)
                            ->where('idofstudant', '=', Auth::user()->id)
                            ->first();
                        
                        if ($find1 == null) {
                            $student = new play();
                            $student->idofstudant = Auth::user()->id;
                            $student->idlesson = $vedios->id;
                            $student->idcoures = $b->id;
                            $student->save();
                        } else {
                            DB::table('plays')
                                ->where('idcoures', '=', $b->id)
                                ->where('idofstudant', '=', Auth::user()->id)
                                ->update(['idlesson' => $vedios->id]);
                        }
                        ?>
                    </script>

                </div>
            </div>

        </div>
    </div>

    {{--  --}}
@endsection

<script>
    window.onload = function() {
        setTimeout(function() {
            PopUp(c);
            <?php DB::table('markcourses')
                ->where('nameofcourse', '=', $b->id)
                ->where('nameofstudant', '=', Auth::user()->id)
                ->update(['idlesson' => $vedios->id]);
            
            ?>
        }, 0);

    };
    window.onclick = function {

    };

    function myFunction() {

    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
