<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.courses.courseschabtar', $chabterid)); ?>"><button class="btnaboutadd btn btn-dark">
                رجوع</button></a>

    </div>


    <div class="formaddm">
        <form action="<?php echo e(url('admin/courseschabtar/add')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="inputtitelmistion">اسم الفصل</label>
                <input type="text" class="form-control" name='name' id="name	" placeholder="اسم الفصل ">
            </div>

            <div class="form-group">
                <label for="inputtitelmistion">الدورة</label>
                <select class="form-control" name="course" id="course">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($courses->id); ?>"><?php echo e($courses->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>



            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/courses/courseschabtaradd.blade.php ENDPATH**/ ?>