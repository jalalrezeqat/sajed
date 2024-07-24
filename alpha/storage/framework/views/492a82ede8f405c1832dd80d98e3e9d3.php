<?php echo app('Illuminate\Foundation\Vite')(['resources/css/vedio.css', 'resources/css/order.css', 'resources/css/massage.css']); ?>

<?php $__env->startSection('content'); ?>
    <?php session('windowW'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-181203449-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <section>

        <div class="namecourse  float-right mb-2">
            <p class="namebranchshow-text"> <a class=" text-dark" href="<?php echo e(url('courses')); ?>">الدورات</a> > <a
                    class=" text-dark" href="<?php echo e(url('courses/' . $b->id)); ?>"><?php echo e($b->branche); ?></a>
                > <?php echo e($b->name); ?> </p>
        </div>

        <br>
        <br>



        <script>
            (function() {

                var viewportWidth = $(window).width();



                if (viewportWidth > 1400) {

                    $('#wrapper').load('/ajax/largeScreen.php');

                } else {

                    $('#wrapper').load('/ajax/smallScreen.php');

                }

            }());
        </script>
        <div class="box-ditalescourse" id="box-ditalescourse">
            <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 481)): ?>

            <div class="column1">

                <form action="<?php echo e(url('codesend/' . $user)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div id="mr2">
                        <div class="row coursename mt-5 ">

                            <p class="user_name h3 font481px"> <?php echo e($b->name); ?></p>
                            <p class="user_name h3 font481px"><?php echo e($b->branche); ?> - <?php echo e($b->chabters); ?> </p>
                        </div>
                        <div class="row coursedetales mt-5">
                            <p class="mt-3  col-lg-4 font18px" style="color: #F8F8F8"> <span> <i class="fa  fa-user"
                                        style="font-size:18px;color:#F8F8F8"></i>
                                </span> مدرس الدورة :
                                <?php $__currentLoopData = $teatcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teatchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($teatchers->name); ?>

                            </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <p class="mt-3  col-lg-5 font18px" style="color: white"> <span><i class="fa fa-list"
                                        style="font-size:18px;"></i>
                                </span> عدد دروس الدورة :
                                <?php echo e($lessoncount); ?> درساً مسجلاً</p>
                        </div>
                        <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 1029)): ?>

                        <div class="row coursedetales mt-5">
                            <button type="" class=" btncouresdetales  col-lg-6"><label class=""
                                    class="font14px " aria-current="page" for="modal-toggle-order"> اطلب بطاقتك
                                </label></button>
                            <p class=" inpoutlabel mr-3 col-lg-5" style="color: white;"> أدخل كود البطاقة
                                وابدأ
                                بالتّعلّم</p>
                        </div>
                        <div class="row coursedetales">

                            <p class="mt-3 font18px col-lg-3" style="color: #85FE78; "> السعر :
                                <?php echo e($b->price); ?> ₪
                            </p>
                            <?php endif; ?>
                            <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthBetween', 600, 1028)): ?>
                            <div class="row coursedetales mt-5">

                                <button type="button1" class=" btncouresdetales  col-lg-6"><label class="font14px "
                                        aria-current="page" for="modal-toggle-order"> اطلب بطاقتك </label></button>
                                <p class="mt-3 font18px col-lg-3" style="color: #85FE78; "> السعر :
                                    <?php echo e($b->price); ?> ₪
                                </p>
                                <p class=" inpoutlabel mr-3 col-lg-5" style="color:white ;margin-right: 0px;"> أدخل كود
                                    البطاقة
                                    وابدأ
                                    بالتّعلّم</p>
                                <?php endif; ?>

                                <input class="mt-3 inputorder col-lg-4" required <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    placeholder="حافظ على سريّة معلوماتك..." name="code" type="text">

                                <button type="submit" class=" btnsubmitorder mt-3 col-lg-6">إدخال </button>
                            </div>

                </form>
                <br>
                <br>
            </div>
        </div>
        <div class="column2">
            <img class="imgditels " src="<?php echo e(asset('/img/teatcher_course/' . $b->img_teatcher)); ?>" alt="">

        </div>

        <?php endif; ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthLessThan', 480)): ?>
        <div class="row mobiw">

            <div class="col-12">
                <form action="<?php echo e(url('codesend/' . $user)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="mobiw">
                        <div class="row coursename mt-5 ">

                            <p class="user_name h3 font48px"> <?php echo e($b->name); ?></p>
                            <p class="user_name h3 font48px"><?php echo e($b->branche); ?> - <?php echo e($b->chabters); ?> </p>
                        </div>
                        <div class="row coursedetales mt-5">
                            <p class="mt-3  col-lg-4 font18px" style="color: blanchedalmond;"><span> <i class="fa   fa-user"
                                        style="font-size:18px;color:blanchedalmond"></i>
                                </span> مدرس الدورة :
                                <?php $__currentLoopData = $teatcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teatchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($teatchers->name); ?>

                            </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <p class="mt-3  col-lg-4 font18px" style="color: blanchedalmond"><span><i class="fa fa-list"
                                        style="font-size:18px;"></i>
                                </span> عدد دروس الدورة :
                                <?php echo e($lessoncount); ?> درساً مسجلاً</p>
                        </div>
                        <div class="row coursedetales mt-5">
                            <button type="button" class=" btncouresdetales  col-lg-6"><label class=" "
                                    aria-current="page" for="modal-toggle-order"> اطلب بطاقتك </label></button>
                            <p class="mt-3  col-lg-3" style="color: #85FE78; margin-right: 10px;"> السعر :
                                <?php echo e($b->price); ?> ₪
                            </p>
                        </div>
                        <div class="row coursedetales">


                            <p class=" mr-3 col-lg-5" style="color: blanchedalmond;margin-top: 10px;"> أدخل كود البطاقة
                                وابدأ
                                بالتّعلّم</p>
                            <input class="mt-3 inputorder col-lg-4" required <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                placeholder="حافظ على سريّة معلوماتك..." name="code" type="text">

                            <button type="submit" class=" btnsubmitorder mt-3 col-lg-6">إدخال </button>
                        </div>

                </form>

            </div>

        </div>
        <div class="column2">
            <img class="imgditels " src="<?php echo e(asset('/img/teatcher_course/' . $b->img_teatcher)); ?>" alt="">
        </div>
        <?php endif; ?>

        </div>
    </section>
    <section>

        
        <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 1028)): ?>

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
        <?php endif; ?>
    </section>
    <section class="mt100px">
        
        <div class="ditelspage">
            <h3 class="dir mt-5 mr-5 font24px" id="about">حول الدورة:</h3>
            <p class="font18px aboutalpha ditelspageinsaid dir"><?php echo e($b->aboutcourse); ?></p>
            <button class="btncouresdetaless"><label class="btncouresdetale " aria-current="page"
                    for="modal-toggle-vedio">شاهد
                    درس مجّاني</label>
            </button>

        </div>
    </section>
    <section class="mt100px">
          <div class=" dir " id="tetcher">
            <h3 class="dir ditelspage font24px">مدرّس الدورة</h3>
            <div class="shadow p-3 ditelspagetet row mt-5 bg-white rounded">
                <img src="<?php echo e(asset('img/Vector.png')); ?>" id ="shapetetcher4" alt="">
                <div class="row">

                    <div class="col-2"></div>
                    <div class="col-2">
                        <div class="row" style="--bs-gutter-x:0">
                            <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 1028)): ?>

                            <?php $__currentLoopData = $teatcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teatchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img class="imgtatecher " src="<?php echo e(asset('/img/teacher/' . $teatchers->img)); ?>"
                                    alt="">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="row">
                            <p class="nametetcher" style="color: #27AC1F;margin-right:15%;"><?php echo e($teatchers->name); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthBetween', 600, 1028)): ?>
                        <?php $__currentLoopData = $teatcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teatchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img class="imgtatecher " src="<?php echo e(asset('/img/teacher/' . $teatchers->img)); ?>"
                                alt="">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row">
                        <p class="nametetcher"><?php echo e($teatchers->name); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthLessThan', 480)): ?>

                    <?php $__currentLoopData = $teatcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teatchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="imgtatecher " src="<?php echo e(asset('/img/teacher/' . $teatchers->img)); ?>" alt="">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <p class="nametetcher"><?php echo e($teatchers->name); ?></p>
                </div>
                <?php endif; ?>
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
        <img src="<?php echo e(asset('img/Vector.png')); ?>" id ="shapetetcher3" alt="">

        </div>
        </div>
    </section>
    
    


    


    <section class="mt100px">
        <div class="ditelspage" id="how">
            <h3 class="dir mb-5 font24px">ماذا سأتعلم؟</h3>

            <div class="boxditales dir">


                <?php $__currentLoopData = $chbter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chbters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <i data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($chbters->id); ?>"
                                        aria-expanded="false" aria-controls="collapseExample"
                                        class="fa colorg fa-plus font-xs"></i>
                                    <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($chbters->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample" class="btn qustion-text font18px ">
                                        <?php echo e($chbters->name); ?> </button>
                                    <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($chbters->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample " class="btn qustion-text font18px "
                                        id="countleeson">
                                        <?php echo e($count); ?> دروس </button>

                            </div>
                        </div>
                    </div>
                    <div class="collapse  scroll-section" id="collapse<?php echo e($chbters->id); ?>">
                        
                        <?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lessons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $count = 0;
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $year . '-' . $month . '-' . $day;
                            
                            ?>

                            <?php if($lessons->chabters == $chbters->id): ?>
                                <div class="card card-body" id="">
                                    <div class="ditelsco  ">
                                        <?php  if (Auth::user()): ?>
                                        <?php if($key == 0): ?>
                                            <?php
                                            $path = 'img/vedio/' . $lessons->vedio;
                                            $file = $id3->analyze($path);
                                            $auth = 1;
                                            
                                            ?>

                                            <?php $__currentLoopData = $code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(
                                                    ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today) & ($codes->courses == $b->id) ||
                                                        ($codes->courses == 'جميع الدورات') & ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today)): ?>
                                                    <?php $auth = 0; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($auth == 0): ?>
                                                <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                                <a href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><button
                                                        style="border: none;background-color:#f8fafc
                                                            "><?php echo e($lessons->name); ?></button></a>
                                            <?php endif; ?>
                                            <?php if($auth != 0): ?>
                                                <span id="ditelsco1">مشاهدة مجانيّة</span>
                                                <i style="font-size:24px;color:27AC1F" class="fa">&#xf144;</i>
                                                <a href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><button
                                                        style="border: none;background-color:#f8fafc
                                                                                                             "><label
                                                            class=" font14px" aria-current="page"
                                                            for="modal-toggle-vedio">
                                                            <?php echo e($lessons->name); ?>

                                                        </label></button></a>
                                            <?php endif; ?>
                                            

                                            <?php endif;?>


                                            <?php if($key > 0): ?>
                                                <?php $__currentLoopData = $code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $insid = 0; ?>
                                                    <?php if(
                                                        ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today) & ($codes->courses == $b->id) ||
                                                            ($codes->courses == 'جميع الدورات') & ($codes->user_id == Auth::user()->id) & ($codes->endcode >= $today)): ?>
                                                        <?php $insid = 1; ?>
                                                        <?php $auth = 0; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($auth == 0): ?>
                                                    <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                                    <a href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><button
                                                            style="border: none;background-color:#f8fafc
                                                             "><?php echo e($lessons->name); ?></button></a>
                                                    <?php $insid1 = 1; ?>
                                                <?php endif; ?>
                                                <?php if($auth != 0): ?>
                                                    <i style="font-size:24px;color:" class="fa">&#xf144;</i>
                                                    <a href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><button
                                                            disabled
                                                            style="border: none;background-color:#f8fafc
                                                            "><?php echo e($lessons->name); ?></button></a>
                                                    <?php
                                                    $path = 'img/vedio/' . $lessons->vedio;
                                                    $file = $id3->analyze($path);
                                                    ?>
                                                    <p class="mindet"><?php echo $file['playtime_string']; ?> دقيقة</p>

                                                    <?php $insid = 0; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php endif; ?>


                                            
                                            <?php  if (!Auth::user()): ?>
                                            <?php if($key == 0): ?>
                                                <span id="ditelsco1">مشاهدة مجانيّة</span>

                                                <i style="font-size:24px;color:#27AC1F" class="fa">&#xf144;</i>
                                                <a href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><button
                                                        style="border: none;background-color:#f8fafc
                                       "><label
                                                            class=" " aria-current="page" for="modal-toggle-vedio">
                                                            <?php echo e($lessons->name); ?> </label></button></a>

                                            <?php endif; ?>
                                            <?php if($key > 0): ?>
                                                <i style="font-size:24px;color:" class="fa">&#xf144;</i>
                                                <a href="<?php echo e(url('courseshow' . '/' . $b->id . '/' . $lessons->id)); ?>"><button
                                                        class="font14px" disabled
                                                        style="border: none;background-color:#f8fafc
                                       "><?php echo e($lessons->name); ?></button></a>
                                                
                                            <?php endif; ?>

                                            <?php endif; ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $count = 0;
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');
                        $today = $year . '-' . $month . '-' . $day;
                        
                        ?>

                        <?php  if (!Auth::user()): ?>

                        <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quizs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(($quizs->chabters == $chbters->id) & ($quizs->courses == $b->id)): ?>
                                <div class="card card-body" id="">
                                    <div class="ditelsco">
                                        <i class="fa  fa-book" style="font-size:24px;color:#" aria-hidden="true"></i>
                                        <?php echo e($quizs->name); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        
                        <?php  if (Auth::user()): ?>

                        
                        <?php if($auth == 0): ?>
                            <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quizs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $insi1 = 1; ?>

                                <?php if(($quizs->chabters == $chbters->id) & ($quizs->courses == $b->id)): ?>
                                    <div class="card card-body" id="">
                                        <div class="ditelsco">
                                            <i class="fa  fa-book" style="font-size:24px;color:#27AC1F"
                                                aria-hidden="true"></i>
                                            <?php echo e($quizs->name); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php if(($codes->user_id != Auth::user()->id) & ($auth != 0)): ?>
                            <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quizs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(($quizs->chabters == $chbters->id) & ($quizs->courses == $b->id)): ?>
                                    <div class="card card-body" id="">
                                        <div class="ditelsco">
                                            <i class="fa  fa-book" style="font-size:24px;" aria-hidden="true"></i>
                                            <?php echo e($quizs->name); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php endif; ?>

                        
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $questionscours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionscourss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="qustion1">
                    <p>
                        <a class="purple-head hover-black plusand-" onclick="changeIcon(this)" id="myBtn">
                            <i data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($questionscourss->id); ?>qu"
                                aria-expanded="false" aria-controls="collapseExample"
                                class="fa colorg fa-plus font-xs"></i>
                            <button type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo e($questionscourss->id); ?>qu" aria-expanded="false"
                                aria-controls="collapseExample"
                                class="btn qustion-text font18px"><?php echo e($questionscourss->question); ?></button></a>
                    </p>
                    <div class="collapse " id="collapse<?php echo e($questionscourss->id); ?>qu">
                        <div class="  qustion-box card-body">
                            
                            <p style="font-size: 87.5%">
                                <?php
                                echo $questionscourss->summernote;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        </a>


    </section>

    
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

                        <div class="vidio " style="height: 80%;width: 80%;margin: auto;">
                            <?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iframe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(($lesson[0]->vedio != null) & ($lesson[0]->iframe == null)): ?>
                                    <video controls style="--plyr-color-main: #1ac266; " crossorigin playsinline
                                        poster="">
                                        <source src="<?php echo e(asset('img/vedio/' . $lesson[0]->vedio)); ?>" type="video/mp4"
                                            size="576">
                                        <source src="<?php echo e(asset('img/vedio/' . $lesson[0]->vedio)); ?>" type="video/mp4"
                                            size="720">
                                        <source src="<?php echo e(asset('img/vedio/' . $lesson[0]->vedio)); ?>" type="video/mp4"
                                            size="1080">
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(($lesson[0]->vedio != null) & ($lesson[0]->iframe != null)): ?>
                                <iframe src="<?php echo e($lesson[0]->iframe); ?>" frameborder="0"
                                    style="border:0;height:400px;width:880px;max-width:100%" allowFullScreen="true"
                                    allow="encrypted-media"></iframe>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <div class="rt-container">
                    <div class="col-rt-12">
                        <div class="Scriptcontent">

                            


                            
                            <div class="rt-container">
                                <div class="col-rt-12">
                                    <div class="Scriptcontent">

                                        

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
                                            <h1 class="mb-3 dir text-center "><?php echo e($b->name); ?></h1>
                                            <h2 class="mb-3 dir text-center "><?php echo e($b->branche); ?> -
                                                <?php echo e($b->chabters); ?>

                                            </h2>

                                            <div class="row justify-content-around">
                                                <div class="col-12 col-md-5">
                                                    <?php $__errorArgs = ['password_verified_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="row dir  coursedetales mt-3">
                                                <p class=" mr-5  col-12 col-md-5" style="color: "> مدرس الدورة :
                                                    <?php echo e($b->teacher_name); ?> </p>
                                                <p class=" col-12 col-md-5" style="color: "> عدد دروس الدورة :
                                                    <?php echo e($lessoncount); ?> درساً مسجلاً</p>
                                            </div>

                                            <!--  regester  -->
                                            <form class="contectus-form dir" method="POST"
                                                action="<?php echo e(route('order.store')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php if(session('status')): ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <?php echo e(session('status')); ?>

                                                    </div>
                                                <?php elseif(session('error')): ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php echo e(session('error')); ?>

                                                    </div>
                                                <?php endif; ?>

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
                                                            value="<?php echo e(Auth::user()->name); ?>" required>
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
                                                                value="<?php echo e($b->id); ?>" required>
                                                                <?php echo e($b->name); ?>

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
                                                                value="<?php echo e(Auth::user()->phone); ?>" name="phone" required
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
                                                        <h5 class="price-order">السعر : <?php echo e($b->price); ?> ₪</h5>
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="rt-container">
                                <div class="col-rt-12">
                                    <div class="Scriptcontent">

                                        


                                        
                                        <div class="rt-container">
                                            <div class="col-rt-12">
                                                <div class="Scriptcontent">

                                                    

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
                                                        <?php if(session('message')): ?>
                                                            <div class="alert dandermasseg font18px  text-danger">
                                                                <?php echo e(session('message')); ?></div>
                                                        <?php endif; ?>
                                                        <?php if(session('message1')): ?>
                                                            <div class="alert dandermasseg font18px text-success">
                                                                <?php echo e(session('message1')); ?></div>
                                                        <?php endif; ?>
                                                        <?php if(session('message3')): ?>
                                                            <div class="alert dandermasseg font18px  text-danger">
                                                                <?php echo e(session('message3')); ?></div>
                                                        <?php endif; ?>
                                                        <?php if(session('message65')): ?>
                                                            <div class="alert dandermasseg font18px  text-success">
                                                                <?php echo e(session('message65')); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php if(session('message65') || session('message1') || session('message3') || session('message')): ?>
                                            <script>
                                                $('#modal-toggle-massage').click();
                                            </script>
                                        <?php endif; ?>
                                        <script>
                                            function changeIcon(anchor) {
                                                var icon = anchor.querySelector("i");
                                                icon.classList.toggle('fa-plus');
                                                icon.classList.toggle('fa-minus');

                                                anchor.querySelector("span").textContent = icon.classList.contains('fa-plus') ? "Read more" : "Read less";

                                            }
                                        </script>
                                    <?php $__env->stopSection(); ?>
                                    <script></script>
                                    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/button.js', 'resources/css/custom.css', 'resources/css/login.css', 'resources/css/regestar.css']); ?>
                                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/front/DitalesCourse.blade.php ENDPATH**/ ?>