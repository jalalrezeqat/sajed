<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.policies')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/policies/update/' . $policies->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> سياسات الموقع </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea">
                          <?php echo e($policies->summernote); ?>

                        </textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">تحديث</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/policies/edit.blade.php ENDPATH**/ ?>