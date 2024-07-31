<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.courses')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>

    <div class="formaddm">
        <form action="<?php echo e(url('admin/courses/update/' . $courses->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="inputtitelmistion">اسم الدورة</label>
                <input type="text" class="form-control" name='name' id="name" value="<?php echo e($courses->name); ?>">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion"> ملخص عن الدورة </label>
                <input type="textarea" class="form-control" name='summary' id="summary	" value="<?php echo e($courses->summary); ?>">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion"> حول الدورة </label>
                <textarea type="textarea" class="form-control" name='aboutcourse' rows="3" id="aboutcourse	"
                    value="<?php echo e($courses->aboutcourse); ?>"><?php echo e($courses->aboutcourse); ?></textarea>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">السعر </label>
                <input type="number" class="form-control" name='price' id="price	" value="<?php echo e($courses->price); ?>">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img_name' id="img_name">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفرع</label>
                <select class="form-control" name="branche" id="branche">
                    <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($branch->name); ?>"><?php echo e($branch->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفصل</label>
                <select class="form-control" name="chabters" id="chapter">
                    <option name="chapter" value="الفصل الاول">الفصل الاول</option>
                    <option name="chapter" value="الفصل الثاني">الفصل الثاني</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">المعلم</label>
                <select class="form-control" name="teacher_name" id="teacher_name">
                    <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">صورة المعلم</label>
                <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" name='img_teatcher'
                    id="img_teatcher">
            </div>
            <button type="submit" class="btn btn-info">تحديث</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/courses/updateviwe.blade.php ENDPATH**/ ?>