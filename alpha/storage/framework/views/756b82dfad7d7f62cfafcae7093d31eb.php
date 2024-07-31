<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.about')); ?>"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/about/update/' . $about->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="container">
                <div class="row">

                    <div class="form-group">
                        <label for="inputtitelmistion"> نص السؤال </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea">
                            <?php echo e($about->summernote); ?>

                        </textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info">تعديل</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/about/edit.blade.php ENDPATH**/ ?>