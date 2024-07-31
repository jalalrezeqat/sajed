<!DOCTYPE html>
<html lang="ar">
<?php $iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description"
        content="منصة الفا التعليمية هي منصة الكترونية فلسطينية تقدم دورات تعليمية لمرحلة التوجيهي على المنهاج الفلسطيني وتهدف لتوفير الجهد والوقت على الطلبة
">

    <meta name="keywords" content="حول منصفة الفا التعليمية ,  دورات تعليمية, توجيهي">
    <?php $__currentLoopData = $iconfav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iconfavs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>

<?php session('windowW'); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2129509054-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php $__env->startSection('content'); ?>
    
    <section>
        <div class="slider dir " style=" margin-top: 70px;">
            <div class="row">
                <?php if($agent->isDesktop()): ?>
                    <div class="col ring">
                        <div>

                            <p class="font48px">حول منصّة ألفا التعليميّة</p>
                            <?php $__currentLoopData = $aboutalpha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutalphas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="font18px  aboutalpha"><?php echo e($aboutalphas->aboutalpha); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div>
                            <div class="row dir " style="margin-top:50px">
                                <div class="col">

                                    <a href="<?php echo e(url('/courses')); ?> "><button class="button1 ">ابدأ الآن
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
                                                        src="<?php echo e(asset('img/alphaaboutmore.png')); ?>" alt=""></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img class="img-about" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>" alt="">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
            </div>
            <?php endif; ?>
            <?php if($agent->isMobile()): ?>
                <div class="col">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="img-about" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>" alt="">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col ring">
                    <div>

                        <p class="font48px" style="text-align: center">حول منصّة ألفا التعليميّة</p>
                        <?php $__currentLoopData = $aboutalpha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutalphas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="font18px aboutalpha"><?php echo e($aboutalphas->aboutalpha); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div>
                        <div class="row dir " style="margin-top:50px">
                            <div class="col">

                                <a href="<?php echo e(url('/courses')); ?> "><button class="button1 ">ابدأ الآن
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
                                                    src="<?php echo e(asset('img/alphaaboutmore.png')); ?>" alt=""></label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>

        </div>
        <?php endif; ?>
        </div>

    </section>

    
    <!--  -->

    <section style="margin-top: 30px; ">
        <div class="slider-aboutalpha dir ">
            <div>
                <h1 class=" text-bold font32px"> <img style="margin-left:3%" src="img/aboutv.png" alt="">رؤيتنا :
                </h1>
                <?php $__currentLoopData = $vision; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vision): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="vision font18px"><?php echo e($vision->our_vision); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </section>
    <div class="slider-aboutalpha dir">
        <h1 class="text-bold font32px"><img style="margin-left:3%" src="img/aboutm.png" alt="">مهمتنا :</h1>
        <div class="mission">
            <p class="font18px">تتمحور مهامنا في منصّة ألفا حول: </p>
            <?php $__currentLoopData = $mission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                echo $mission->summernote;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <?php $__currentLoopData = $aboutmore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutmores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <video style="height: 50%;width: 80%;margin: auto;" controls autoplay
                                        style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                                        <source src="<?php echo e(asset('img/aboutmore/' . $aboutmores->vedio)); ?>" type="video/mp4"
                                            size="576">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
    </section>
<?php $__env->stopSection(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/about.blade.php ENDPATH**/ ?>