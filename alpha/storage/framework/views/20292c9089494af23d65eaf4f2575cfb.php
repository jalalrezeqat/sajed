<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()->stutes != 1): ?>
        <div class="user-dashbord mt100px" id="user-dashbord">
            <div class="box-dashbord" id="box-dashbord">
                <div class="row" id="">
                    <!--Grid column-->
                    <div class="col-lg-2 ">

                        <div class="  d-flex align-items-center justify-content-center mb-4 mx-auto">
                            <img src="<?php echo e(asset('img/user_profile/' . Auth::user()->user_img)); ?>"
                                class="img-dashbord rounded-circle" alt="" loading="lazy" />
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-5  ">

                        <ul class="list-unstyled user_name">
                            <li class="mb-2">
                                <h3>مرحباً بعودتك، </h2>
                                    <h3> <?php echo e(Auth::user()->name); ?></h2>
                            </li>
                            <li class="mb-2">
                                <p> <img src="img/branch.png" alt=""> الفرع : <?php echo e(Auth::user()->branch); ?> </p>
                                <p> <img src="img/phone-dashbord.png" alt=""> رقم الهاتف : <?php echo e(Auth::user()->phone); ?>

                                </p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-5 ">

                        <ul class="list-unstyled  information-dashbord">
                            <li>
                                <a class="link-edit" href="<?php echo e(route('profile.edit', Auth::user()->id)); ?>">تعديل الملف
                                    الشّخصي</a>
                            </li>

                            <li class="mb-2">
                                <p> <img src="img/address-dashbord.png" alt=""> المحافظة :
                                    <?php echo e(Auth::user()->Governorate); ?></p>
                                <p> <img src="img/email-dashbord.png"> الايميل : <?php echo e(Auth::user()->email); ?> </p>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->

                </div>
            </div>
        </div>
        <div class="dir profile-coures " id="">
            <p class="mb-5 font18px">الدورات المسجل بها</p>

            <div class="row row-cols-1  card-w dir   row-cols-md-3 ">
                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $coursename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursenames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($coursenames->id == $courses->courses): ?>
                            <?php $auth = 1; ?>

                            <div class="col colcard">
                                <div class="card-home card  " id="card-profile">
                                    <img src="<?php echo e(asset('img/courses/' . $coursenames->img_name)); ?>"
                                        class="card-img-top-profile" alt="...">
                                    <div class="card-body">
                                        <?php $__currentLoopData = $lessonid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lessonids): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($coursenames->id == $lessonids->idcoures): ?>
                                                <p class="card-title-home font14px "><a
                                                        href="<?php echo e(url('courseshow' . '/' . $coursenames->id . '/' . $lessonids->idlesson)); ?>"
                                                        class="card-title-home  text-center"><?php echo e($coursenames->name); ?></a>
                                                </p>
                                                <?php $auth = 0; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($auth == 1): ?>
                                            <p class="card-title-home font14px ">
                                                <a class="nav-link"
                                                    href="<?php echo e(url('courseshow' . '/' . $coursenames->id . '/1')); ?>"
                                                    class="card-title-home  text-center"><?php echo e($coursenames->name); ?></a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="dir profile-coures " id="cc">
            <p class="mb-5 font18px">علامات الامتحانات</p>
            <div>
                <table class="tabel-profile">
                    <thead>

                    </thead>
                    <tbody style="border: 1px solid green;">
                        <tr style="border: 1px solid
                    green;border-bottom: 0px ;width:400px">
                            <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th rowspan="2"
                                    style="border: 1px solid black; border-bottom: 0px ; border-right: 0; ;width:230px;">
                                    <?php $__currentLoopData = $coursename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursenames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($coursenames->id == $courses->courses): ?>
                                            <?php echo e($coursenames->name); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </th>
                                <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quizs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($quizs->courses == $courses->courses): ?>
                                        <td class="font14px"
                                            style="border: 1px solid black;  border-bottom: 0px ;width:120px;text-align: center;font-size:14px;    font-weight: bolder;

">
                                            <?php echo e($quizs->name); ?>

                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <tr style="border: 1px solid black;border-top: 0px  ;border-left: 1px solid black;width:40px
">
                            <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quizs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $quizreselt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quizreselts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($quizs->id == $quizreselts->namequiz): ?>
                                        <td class="font14px"
                                            style="border: 1px solid black; border-top: 0px;width:120px;margin:auto   ; text-align: center;color:#27AC1F; font-size:14px;   font-weight: bolder;">
                                            <?php if($quizreselts->courses == $courses->courses): ?>
                                                <?php echo e($quizreselts->total_points); ?>

                                            <?php else: ?>
                                                ??
                                            <?php endif; ?>
                                            /20
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
    </table>
    </div>

    </div>
    <br><br>
    <?php endif; ?>
    <?php if(Auth::user()->stutes == 1): ?>
        <br><br><br>
        <p class="text-center dir font18px " style="color: #27AC1F">مرحبا بك استاذ <?php echo e(Auth::user()->name); ?></p>
        <div class="content-wrapper  dir">
            <div class=" mb-5">
                <form action="<?php echo e(route('dashbord.serchscoures1')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-grou col-3">
                            <label for="inputtitelmistion"> من تاريخ</label>
                            <input type="date" name="start" class="form-control" required>
                        </div>
                        <div class="form-grou col-3">
                            <label for="inputtitelmistion">الى تاريخ </label>
                            <input type="date" name="end" class="form-control" required>
                        </div>
                        <div class="  col-3">
                            <label for="inputtitelmistion"></label>
                            <button type="submit" class="btn btn-info form-control">بحث</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <?php $__currentLoopData = $coures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $couress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 stretch-card grid-margin mb-5">
                        <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                                <h4 class="font-weight-normal mb-4">عدد المشتركين في دورة<i
                                        class="mdi mdi-chart-line mdi-24px float-right"></i>
                                </h4>
                                <h6 class="mb-4"><?php echo e($couress->name); ?></h6>
                                <?php
                                $code = DB::table('codecards')
                                    ->where('user_id', '!=', null)
                                    ->where('courses', '=', $couress->id)
                                    ->get();
                                
                                ?>
                                <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة : <?php echo e($code->count()); ?>

                                </h6>


                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <br><br><br>
    <?php endif; ?>

<?php $__env->stopSection(); ?>












<!--Grid row-->


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/dashboard.blade.php ENDPATH**/ ?>