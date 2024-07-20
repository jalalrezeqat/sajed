<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(route('admin.courses.courseschabtar', $chabter->id)); ?>"><button class="btnaboutadd btn btn-dark">رجوع
            </button></a>
        <a href="<?php echo e(route('admin.courses.lessonadd', $chabter->id)); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى
                الدرس</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الدرس</th>
                    <th scope="col">اسم الفصل</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($lesson->name); ?> </td>
                        <td class=""><?php echo e($chabter->name); ?> </td>

                        <td class="">
                            <a href="<?php echo e(route('admin.courses.lesson.viwe1', $lesson->id)); ?>"
                                class="btn btn-info editdelete">مشاهدة الدرس </a>
                            <a href="<?php echo e(route('admin.lesson.edit', $lesson->id)); ?>" class="btn btn-success editdelete">تعديل
                            </a>
                            <a href="<?php echo e(route('admin.lesson.destroy', $lesson->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/courses/courses/lesson.blade.php ENDPATH**/ ?>