<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.branch')); ?>"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/branch/add')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="inputtitelmistion">اسم الفرع</label>
                <input type="text" class="form-control" name='name' id="name" placeholder="اسم الفرع">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الملخص </label>
                <input type="text" class="form-control" name='summary' id="summary" placeholder="الملخص">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img' id="img">
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/branch/addbranch.blade.php ENDPATH**/ ?>