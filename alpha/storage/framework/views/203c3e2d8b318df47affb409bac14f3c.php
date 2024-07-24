<?php $__env->startSection('content'); ?>
    <div class="dir ">
        <a href="<?php echo e(route('admin.dashboard')); ?>"><button class="btn btn-back-user btn-lg btn-success">رجوع</button></a>
        <a href="<?php echo e(route('admin.password')); ?>"><button class="btn  btn-lg btn-success">تغير كلمة المرور</button> </a>

        <div class="form-edit-user-profile">
            <form action="<?php echo e(url('admin/profile/update/' . Auth::guard('admin')->user()->id)); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="inputtitelmistion">الاسم </label>
                    <input type="text" class="form-control" required value="<?php echo e(Auth::guard('admin')->user()->name); ?>"
                        name='name' id="name" placeholder="">
                </div>

                <div class="form-group">
                    <label for="inputtitelmistion">الايميل </label>
                    <input type="text" class="form-control" required name='email'
                        value="<?php echo e(Auth::guard('admin')->user()->email); ?>" id="email" placeholder="">
                </div>


                <button type="submit" class="btn  btn-lg btn-submit-user btn-success">حفظ</button>
            </form>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/Admin/profile.blade.php ENDPATH**/ ?>