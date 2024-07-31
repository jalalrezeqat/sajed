<?php $__env->startSection('content'); ?>
    <div class="formaddm mb-5">
        <a href="<?php echo e(route('admin.aboutmore')); ?>"><button class="btnaboutadd btn btn-dark">رجوع
            </button></a>
        <form class="mt-5" action="<?php echo e(route('admin.aboutmore.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>


            <div class="form-group mt-5">
                <label for="inputtitelmistion">الفيديو</label>
                <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name='vedio'
                    id="vedio">
            </div>



            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/about/aboutmore/add.blade.php ENDPATH**/ ?>