<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.codegenaret.add')); ?>"><button class="btnaboutadd btn btn-dark">انشاء كود</button></a>

    </div>
    <br><br>
    <form action="<?php echo e(route('admin.dashbord.codesarch')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="form-grou col-3">
                <label for="inputtitelmistion"> من تاريخ</label>
                <input type="date" name="start" class="form-control" required>
            </div>
            <div class="form-grou col-3">
                <label for="inputtitelmistion">الى تاريخ </label>
                <input type="date" name="end" class="form-control" required>
            </div>
            <div class="  col-3">
                <label for="inputtitelmistion"></label>
                <button type="submit" class="btn btn-info form-control">بحث</button>
            </div>
        </div>
    </form>


    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الكود</th>
                    <th scope="col"> الدورة</th>
                    <th scope="col"> اسم الطالب</th>
                    <th scope="col"> تاريخ البداية</th>
                    <th scope="col"> تاريخ النهاية</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($code->code); ?> </td>
                        <td class="">
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($code->courses == $coursess->id): ?>
                                    <?php echo e($coursess->name); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>

                        <td class="">
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($users->id == $code->user_id): ?>
                                    <?php echo e($users->name); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td class=""><?php echo e($code->startcode); ?> </td>
                        <td class=""><?php echo e($code->endcode); ?> </td>

                        <td class="">
                            <a href="<?php echo e(route('admin.codegenaret.edit', $code->id)); ?>" class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="<?php echo e(route('admin.codegenaret.destroy', $code->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/chart/codeserch.blade.php ENDPATH**/ ?>