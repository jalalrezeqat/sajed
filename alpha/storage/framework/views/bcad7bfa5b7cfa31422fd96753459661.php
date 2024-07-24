    

    <?php $__env->startSection('content'); ?>
        <div class="dir ">
            <a href="<?php echo e(route('admin.dashbord.studant')); ?>"><button
                    class="btn btn-back-user btn-lg btn-success">رجوع</button></a>

            <div class="form-edit-user-profile">
                <form action="<?php echo e(route('admin.postChangePassworduses', $user->id)); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>


                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php elseif(session('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>


                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">كلمة المرور الجديدة</label>
                            <input name="new_password" type="password" required class="form-control"
                                <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="newPasswordInput"
                                placeholder="كلمة المرور الجديدة">
                            <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">تاكيد كلمة المرور</label>
                            <input name="new_password_confirmation" type="password" class="form-control"
                                id="confirmNewPasswordInput" placeholder="تاكيد كلمة المرور">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-submit-user btn-lg btn-success">حفظ</button>
                </form>
            </div>


        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/chart/editpassword.blade.php ENDPATH**/ ?>