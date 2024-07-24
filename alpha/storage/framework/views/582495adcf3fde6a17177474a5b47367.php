<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.socials')); ?>"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/socials/update/' . $socials->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="inputtitelmistion">اسم الحساب</label>
                <input type="text" class="form-control" name='nameofpage' id="nameofpage"
                    value="<?php echo e($socials->nameofpage); ?>">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">صورة </label>
                <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" name='img'
                    id="img">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">رابط حسابك </label>
                <input class="form-control" type="url" id="url" name="url" value="<?php echo e($socials->url); ?>">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">نشط او غير نشط </label>
                <select name="status" id="status" class="form-control">
                    <option class="form-control" value="1">نشط</option>
                    <option class="form-control" value="0">غير نشط</option>

                </select>
            </div>

            <button type="submit" class="btn btn-info">حفظ</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/Social/edit.blade.php ENDPATH**/ ?>