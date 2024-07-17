<?php $__env->startSection('content'); ?>
    <div class="formaddm">
        <a href="<?php echo e(route('admin.courses.lesson', $lesson->chabters)); ?>"><button class="btnaboutadd btn btn-dark">رجوع
            </button></a>
        <form action="<?php echo e(url('admin/lesson/update/' . $lesson->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="inputtitelmistion">اسم الدرس</label>
                <input type="text" class="form-control" name='name' id="name" value="<?php echo e($lesson->name); ?>"
                    placeholder="اسم الدرس ">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفيديو</label>
                <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name='vedio'
                    id="vedio">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفيديو من منصة خارجية </label>
                <input type="text" class="form-control" name='iframe' id="iframe" value="<?php echo e($lesson->iframe); ?>"
                    placeholder="اسم الدرس ">
            </div>

            <div class="form-group">
                <label for="inputtitelmistion">ملخص المحاضرة</label>
                <input type="file" accept="application/pdf" class="form-control" name='file' id="file">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الوحدة</label>
                <select class="form-control" name="chabters" id="chabters">
                    <?php $__currentLoopData = $chabter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chabter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($chabter->id); ?>"><?php echo e($chabter->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/courses/lessonedit.blade.php ENDPATH**/ ?>