<!DOCTYPE html>
<html lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description"
        content="منصة الفا التعليمية هي منصة الكترونية فلسطينية تقدم دورات تعليمية لمرحلة التوجيهي على المنهاج الفلسطيني وتهدف لتوفير الجهد والوقت على الطلبة
">
    <meta name="keywords" content="حول منصفة الفا التعليمية ,  دورات تعليمية, توجيهي">

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
                <?php if($agent->isDesktop() || $agent->isTablet()): ?>
                    <div class="col ring">
                        <div>

                            <p class="font48px">حول منصّة ألفا التعليميّة</p>
                            <?php $__currentLoopData = $aboutalpha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutalphas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="font18px  aboutalpha"><?php echo e($aboutalphas->aboutalpha); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div>
                            <div class="row dir " style="margin-top:10%">
                                <div class="col">
                                    <a href="<?php echo e(url('/courses')); ?>"><button class="btnhome btn">ابدأ الآن</button></a>
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
                                <a href="<?php echo e(url('/courses')); ?>"><button class="btnhome btn">ابدأ الآن</button></a>
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
<?php $__env->stopSection(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/about.blade.php ENDPATH**/ ?>