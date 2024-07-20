<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.policies')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/policies/add')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> سياسات الموقع </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/policies/create.blade.php ENDPATH**/ ?>