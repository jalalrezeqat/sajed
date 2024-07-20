<?php $__env->startSection('content'); ?>
    <div class="dir edit-user-profile">
        <a href="<?php echo e(route('dashboard')); ?>"><button class="btn btn-back-user btn-lg btn-success">رجوع</button></a>
        <a href="<?php echo e(route('password')); ?>"><button class="btn  btn-lg btn-success">تغير كلمة المرور</button> </a>

        <div class="form-edit-user-profile">
            <form action="<?php echo e(url('profile/update/' . Auth::user()->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="inputtitelmistion">الاسم </label>
                    <input type="text" class="form-control" required value="<?php echo e(Auth::user()->name); ?>" name='name'
                        id="name" placeholder="">
                </div>

                <div class="form-group">
                    <label for="inputtitelmistion">الايميل </label>
                    <input type="text" class="form-control" required name='email' value="<?php echo e(Auth::user()->email); ?>"
                        id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">الهاتف </label>
                    <input type="text" class="form-control" required name='phone' value="<?php echo e(Auth::user()->phone); ?>"
                        id="phone" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">الصورة </label>
                    <input type="file" class="form-control" name='user_img' id="user_img">

                </div>

                <button type="submit" class="btn  btn-lg btn-submit-user btn-success">حفظ</button>
            </form>
        </div>


    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/profile/edit.blade.php ENDPATH**/ ?>