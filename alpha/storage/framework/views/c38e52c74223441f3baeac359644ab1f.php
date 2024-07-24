<?php $__env->startSection('content'); ?>
    <?php
    
    $month = date('m');
    $day = date('d');
    $year = date('Y');
    
    $today = $year . '-' . $month . '-' . $day;
    ?>
    <a href="<?php echo e(route('admin.codegenaret')); ?>"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/codegenaret/save')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="inputtitelmistion">انشاء كود</label>
                <input type="text" class="form-control" name='code' id="code" value="<?php echo e($code); ?>" required>
            </div>

            <div class="form-group">
                <label for="inputtitelmistion">الدورة</label>
                <select class="form-control" name="courses" id="cboOptions" onchange="showDiv('div',this)">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($courses->id); ?>"><?php echo e($courses->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <option value="جميع الدورات">جميع الدورات</option>

                </select>
            </div>
            

            <div class="form-group">
                <label for="inputtitelmistion">تاريخ البداية </label>
                <input type="date" value="<?php echo $today; ?>" class="form-control" name='startcode' id="startcode"
                    required>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">تاريخ النهاية </label>
                <input type="date" class="form-control" name='endcode' id="endcode" required>
            </div>
            <button type="submit" class="btn btn-info">انشاء</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/genaratcode/codegenaretadd.blade.php ENDPATH**/ ?>