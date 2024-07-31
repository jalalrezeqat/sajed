<?php $__env->startSection('content'); ?>
    <div class="formaddm mb-5">
        <a href="<?php echo e(route('admin.aboutmore')); ?>"><button class="btnaboutadd btn btn-dark">رجوع
            </button></a>
        <form action="<?php echo e(url('admin/aboutmore/update/' . $admin->id)); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group mt-5">
                <label for="inputtitelmistion">الفيديو</label>
                <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name='vedio'
                    id="vedio">
            </div>



            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/about/aboutmore/edit.blade.php ENDPATH**/ ?>