<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.teacher.dashbord')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>
    <br>
    <div class=" table-responsive">


        <div class="form-edit-user-profile">
            <form action="<?php echo e(url('admin/teacher/dashbord/add')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="inputtitelmistion">الاسم </label>
                    <input type="text" class="form-control" required name='name' id="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">المعلم </label>
                    <select class="form-control" name="id_teacher" id="id_teacher">
                        <?php $__currentLoopData = $tetcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tetcher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tetcher->id); ?>"><?php echo e($tetcher->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">الايميل </label>
                    <input type="text" class="form-control" required name='email' id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">كلمة المرور </label>
                    <input type="password" class="form-control" required name='password' id="password" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">تاكيد كلمة المرور </label>
                    <input type="password" class="form-control" required name='password_verified_at'
                        id="password_verified_at" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">الهاتف </label>
                    <input type="text" class="form-control" required name='phone' id="phone" placeholder="">
                </div>

                <div class="form-group">
                    <label for="inputtitelmistion">الصورة </label>
                    <input type="file" class="form-control" name='user_img' id="user_img">

                </div>

                <button type="submit" class="btn btn-info">حفظ</button>
            </form>
        </div>


    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/teacher/teaherdashbordadd.blade.php ENDPATH**/ ?>