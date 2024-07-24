<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.addAdmin')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>
    <br>
    <div class=" table-responsive">


        <div class="form-edit-user-profile">
            <form action="<?php echo e(route('admin.addAdminPost')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="inputtitelmistion">الاسم </label>
                    <input type="text" class="form-control" required name='name' id="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">الايميل </label>
                    <input type="text" class="form-control" required name='email' id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputtitelmistion">الصلاحية </label>
                    <select class="form-control" name="stutes" id="stutes">
                        <option value="0">مسؤول</option>
                        <option value="1">محرر</option>

                    </select>
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


                <button type="submit" class="btn btn-info">حفظ</button>
            </form>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/Admin/roule/addAdminStor.blade.php ENDPATH**/ ?>