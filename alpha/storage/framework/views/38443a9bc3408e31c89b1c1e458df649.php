<?php $__env->startSection('content'); ?>
    <div class="namecourse mt-5   float-right mb-2">
        <p class="namebranchshow-text" style="font-size:14px;margin-top:2%"> الدورات > <?php echo e($b->branche); ?> >
            <?php echo e($b->name); ?> -
            <?php echo e($b->branche); ?> - <?php echo e($b->chabters); ?> </p>
    </div>

    <br>
    <br>
    <br>
    <br>
    <?php if($agent->isMobile() || $agent->isTablet()): ?>
        <br><br>
        <div class="col-sm-8">
            <div>
                
                <div class="vidio">
                    <?php $__currentLoopData = $vedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(($vedios->vedio != null) & ($vedios->iframe == null)): ?>
                            <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                                <source src="<?php echo e(asset('img/vedio/' . $vedios->vedio)); ?>" type="video/mp4" size="576">
                                <source src="<?php echo e(asset('img/vedio/' . $vedios->vedio)); ?>" type="video/mp4" size="720">
                                <source src="<?php echo e(asset('img/vedio/' . $vedios->vedio)); ?>" type="video/mp4" size="1080">
                            <?php else: ?>
                                <iframe src="<?php echo e($vedios->iframe); ?>" frameborder="0"
                                    style="border:0;height:400px;width:880px;max-width:100%" allowFullScreen="true"
                                    allow="encrypted-media"></iframe>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- Caption files -->
                    <!-- Fallback for browsers that don't support the <video> element -->
                    </video>

                </div>
    <?php endif; ?>
    <?php $__currentLoopData = $vedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedioss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $shado = 'shadoplay';
        ${'shado' . $vedioss->id} = 'shadoplay';
        // dd(${'shado' . $vedioss->id});
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row mt-5 dir">
        <div class="col-sm-4">
            <div class="sidbarshowcourse">

                <div>
                    <p class="text-center mt-3" style="font-size: 25.38px">اهلا بك : <?php echo e(Auth::user()->name); ?></p>
                    <p class="text-center" style="font-size: 12.69px">هل أنتَ مُستعد للحصول على العلامة التي تحلُم
                        بها؟ </p>
                    <?php if($mark == null): ?>
                        <h2 class="text-center mb-3">0</h2>
                    <?php else: ?>
                        <h2 class="text-center mb-3"><?php echo e($mark->mark); ?></h2>
                    <?php endif; ?>

                </div>

                <?php $__currentLoopData = $chbter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chbters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $vedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedioss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $vedioend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedioends): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($vedioends->idlesson == $lessons->id): ?>
                            <?php $endleeson = 0;
                            
                            // dd($vedioends->idlesson . '/' . $lessons->id);
                            
                            ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($vedioss->chabters == $chbters->id): ?>
                        <div class="boxcolabssshow shadoplay">
                            <div class="">
                                <div class="chabternamecollabsshow ">
                                    <button class="btn  qustion" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($chbters->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample"></button>
                                    <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($chbters->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample" class="btn qustion-text  ">
                                        <p class="buttonshow font18px "><?php echo e($chbters->name); ?> </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="boxcolabssshow ">
                            <div class="">
                                <div class="chabternamecollabsshow ">
                                    <button class="btn  qustion" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($chbters->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample"></button>
                                    <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($chbters->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample" class="btn qustion-text font18px ">
                                        <p class="buttonshow font18px "><?php echo e($chbters->name); ?> </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="collapse  scroll-section" id="collapse<?php echo e($chbters->id); ?>">
                        
                        <?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lessons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                            <?php if($lessons->chabters == $chbters->id): ?>
                                <?php if($lessons->id == $vedioss->id): ?>
                                    <div class="">
                                        <div class="card shadoplay card-body" id="">
                                            <div class="ditelsco">


                                                <i style="font-size:14px;color:#27AC1F" class="fa">&#xf144;</i>
                                                <a class="text-dark "
                                                    href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><?php echo e($lessons->name); ?></a>

                                                <?php
                                                $num = 1;
                                                
                                                $playback = $key;
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div>
                                        <div class="card card-body" id="">
                                            <div class="ditelsco">
                                                <?php $__currentLoopData = $vedioend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedioends): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($vedioends->idlesson == $lessons->id): ?>
                                                        <?php $noplay = 0; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($noplay == 0): ?>
                                                    <i style="font-size:14px;color:black" class="fa">&#xf144;</i>
                                                    <a class="text-dark font14px"
                                                        href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><?php echo e($lessons->name); ?></a>
                                                <?php endif; ?>
                                                <?php if($noplay != 0): ?>
                                                    <i style="font-size:14px;color:#27AC1F" class="fa">&#xf144;</i>
                                                    <a class="text-dark font14px"
                                                        href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><?php echo e($lessons->name); ?></a>
                                                <?php endif; ?>
                                                


                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quizs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($quizs->chabters == $chbters->id): ?>
                                <div class="card card-body" id="">
                                    <div class="ditelsco">
                                        <i class="fa  fa-book" style="font-size:24px;color:#27AC1F" aria-hidden="true"></i>
                                        <a href="<?php echo e(url('quiz' . '/' . $quizs->id . '/' . $b->id)); ?>"><button
                                                style="border: none;background-color:#f8fafc
                                  "><?php echo e($quizs->name); ?></button></a>
                                        <?php $m = 'order'; ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <p class="text-center mt-3" style="font-size:18px">قيّم الدورة</p>
                </div>
            </div>
        </div>
        <?php $__currentLoopData = $vedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($agent->isDesktop()): ?>
            <div class="col-sm-8">
                <div>
                    
                    <div class="vidio">
                        <?php $__currentLoopData = $vedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(($vedios->vedio != null) & ($vedios->iframe == null)): ?>
                                <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                                    <source src="<?php echo e(asset('img/vedio/' . $vedios->vedio)); ?>" type="video/mp4"
                                        size="576">
                                    <source src="<?php echo e(asset('img/vedio/' . $vedios->vedio)); ?>" type="video/mp4"
                                        size="720">
                                    <source src="<?php echo e(asset('img/vedio/' . $vedios->vedio)); ?>" type="video/mp4"
                                        size="1080">
                                <?php else: ?>
                                    <iframe src="<?php echo e($vedios->iframe); ?>" frameborder="0" loading="lazy"
                                        allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;"
                                        allowfullscreen="true" style="border:0;height:400px;width:880px;max-width:100%"
                                        allowFullScreen="true" allow="encrypted-media"></iframe>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Caption files -->
                        <!-- Fallback for browsers that don't support the <video> element -->
                        </video>

                    </div>
        <?php endif; ?>
        <div class="btn-show  marginr5 mt-5 ">
            <br>
            <?php 
                            $num=0;
                             if(  $playback < count($lesson)-1) :   ?>

            <a
                href="<?php echo e(url('endles' . '/' . $b->id . '/' . $lesson[$playback]->id . '/' . $lesson[$playback + 1]->id)); ?>">
                <button class="btn btn-danger">تم انهاء
                    المشاهدة</button></a>

            <?php else :?>
            <a href=" <?php echo e(url('endles' . '/' . $b->id . '/' . $lesson[$playback]->id . '/' . $num)); ?>">
                <button class="btn btn-danger">تم انهاء
                    المشاهدة</button>
            </a>
            <?php endif?>



        </div>
        <div class="row mt-5  ">
            <div class="col marginr5 ">
                <?php $__currentLoopData = $chbter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chbter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($chbter->id == $vedios->chabters): ?>
                        <p class=" font18px "> <?php echo e($chbter->name); ?></p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col">
                
            </div>
        </div>
        <div class="row dir">
            <div class="col marginr5">
                <p class="font18px "><?php echo e($vedios->name); ?></p>
            </div>
            <?php if($vedios->file != null): ?>
                <div class="col">
                    <a href="<?php echo e(url('download' . '/' . $vedios->id)); ?>" class="flo font18px limkdown">تحميل ملخّص
                        المُحاضرة</a>
                </div>
            <?php endif; ?>
        </div>


        <form action="<?php echo e(url('markofcourse' . '/' . $b->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row dir">
                <div class="col">
                    <div class="row marginr5">
                        <p class="col-5 font18px" style="padding: 0%;margin-left:2%;">حدد معدّل تطمح
                            في الوصول إليه : </p>
                        <input type="text" class="inpoutcours" name="mark" required maxlength="2">
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

    
<?php $__env->stopSection(); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/front/ShowCourse.blade.php ENDPATH**/ ?>