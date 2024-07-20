<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.Favoriteicon')); ?>"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/favoriteicon/update/' . $favoriteicon->id)); ?>" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="inputtitelmistion">صورة </label>
                <input type="file" accept="image/png, image/gif, image/jpeg,image/ico" class="form-control" name='img'
                    id="img">
            </div>

            <button type="submit" class="btn btn-info">حفظ</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/favoriteicons/edit.blade.php ENDPATH**/ ?>