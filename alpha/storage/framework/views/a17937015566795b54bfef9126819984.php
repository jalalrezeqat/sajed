<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="mb-5">

            <a href="<?php echo e(route('admin.dashbord.coures')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

        </div>

        <div class=" mb-5">
            <form action="<?php echo e(route('admin.dashbord.serchscoures')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-grou col-3">
                        <label for="inputtitelmistion"> من تاريخ</label>
                        <input type="date" name="start" required>
                    </div>
                    <div class="form-grou col-3">
                        <label for="inputtitelmistion">الى تاريخ </label>
                        <input type="date" name="end" required>
                    </div>
                    <div class="  col-3">

                        <button type="submit" class="btn btn-info">بحث</button>
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
                                    <?php echo e($end); ?>

                                </p>
                                <h6 class="mb-2"> عدد الطلاب المسجلين في الدورة : <?php echo e($code->count()); ?>

                                </h6>
                                <h6 class="mb-2"> المبلغ المالي للمنصة : <?php echo e($couress->price * 0.5 * $code->count()); ?>

                                </h6>
                                <h6 class="mb-2"> المبلغ المالي للمدرس : <?php echo e($couress->price * 0.5 * $code->count()); ?>

                                </h6>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/chart/couresserch.blade.php ENDPATH**/ ?>