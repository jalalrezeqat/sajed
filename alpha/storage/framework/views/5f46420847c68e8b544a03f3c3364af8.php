<!DOCTYPE html>
<html lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="تواصل مع فريق الدعم في منصة الفا التعليمية، وقدم ملاحظاتك وآرائك">
    <meta name="keywords" content="تواصل معنا الآن, منصة الفا التعليمية">
    <?php $__currentLoopData = $connectwithus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $connectwithus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <meta name='og:phone_number' content='<?php echo e($connectwithus->phone); ?>'>
        <meta name='og:email' content='<?php echo e($connectwithus->email); ?>'>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</head>

<?php session('windowW'); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3955201851-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->startSection('content'); ?>
    <!-- Contact 3 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5 ff">
        <div class="container ">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
                <div class="col-12 col-lg-6">
                    <section>
                        <div class="slider dir " style=" margin-top: 70px;">
                            <div class="row">
                                <div class="col ring">
                                    <div class="text-center">
                                        <p class="font42px">تواصل معنا الآن!</p>
                                        <p class="font18px">سنكونُ سعيدين في استقبال استفساراتكُم</p>
                                    </div>
                                </div>
                                <?php if($agent->isDesktop()): ?>
                                <div class="col">
                                    <div class=" contact-img">
                                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img class="contact-img d-block" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>"
                                                class="d-block" alt="">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                </div>
                                <?php endif; ?>
                                <?php if($agent->isDesktop()||$agent->isTablet()): ?>
                                <div class="row">
                                    <div class=" contact-img">
                                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img class="img-about d-block" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>"
                                                class="d-block" alt="">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                </div>
                                <?php endif; ?>
                                <?php if($agent->isMobile()): ?>
                                <div class="col">
                                    <div class=" contact-img">
                                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img class="contact-img d-block" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>"
                                                class="d-block" alt="">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                </div>
    </section>
    </div>
    <div class="col-12 col-lg-5 ">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

            <form class="contectus-form dir" action="<?php echo e(url('Connectus')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row gy-4 gy-xl-2 p-4 p-xl-5">
                    <div class="col-12 col-md-6">
                        <label for="fname" class="form-label">الاسم الاول <span class="text-danger"></span></label>
                        <div class="input-group">
                            <input type="fname" class="form-control" id="firestname" name="firestname" value=""
                                required>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="lname" class="form-label">الاسم الاخير<span class="text-danger"></label>
                        <div class="input-group">
                            <input type="lname" class="form-control" id="lname" name="lastname" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">الايميل <span class="text-danger"></span></label>
                        <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                    <div class="col-12">
                        <label for="pohne" class="form-label">رقم الهاتف <span class="text-danger"></span></label>
                        <input type="pohne" class="form-control" id="phonenumber" name="phone" value="" required>
                    </div>
                    <div class="col-12 col-md-12">

                        <div class="col-12">
                            <label for="message" class="form-label">الرسالة <span class="text-danger"></span></label>
                            <textarea maxlength="200" class="form-control" id="message" name="note" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="">
                            <button class="btn contectus-form-but " type="submit">ارسال</button>
                        </div>
                    </div>
            </form>

        </div>
    </div>
    </div>
    </div>

    </section>
<?php $__env->stopSection(); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/Connectus.blade.php ENDPATH**/ ?>