<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()->stutes == 1): ?>
        <br><br><br>
        <p class="text-center dir font18px " style="color: #27AC1F">مرحبا بك استاذ <?php echo e(Auth::user()->name); ?></p>
        <div class="content-wrapper dir">


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
                    <div class="col-md-4 stretch-card grid-margin">
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
                                    ->where('startcode', '>=', $start)
                                    ->where('startcode', '<=', $end)
                                    ->get();
                                
                                ?>
                                <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة من تاريخ : <p><?php echo e($start); ?> -
                                        <?php echo e($end); ?></p>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/profile/couresserch.blade.php ENDPATH**/ ?>