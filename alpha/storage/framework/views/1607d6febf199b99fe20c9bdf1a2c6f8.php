<?php $__env->startSection('content'); ?>
    <div>


    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الدورة</th>
                    <th scope="col">حول الدورة </th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($courses->name); ?> </td>
                        <td class=""><?php echo e($courses->aboutcourse); ?> </td>
                        <td class="">
                            <a href="<?php echo e(route('admin.courses.questionscours', $courses->id)); ?>"
                                class="btn btn-success editdelete">مشاهدة الاسئلة الشائعة</a>
                            <a href="<?php echo e(route('admin.courses.edit', $courses->id)); ?>" class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="<?php echo e(route('admin.courses.destroy', $courses->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/courses/questions/questionscours.blade.php ENDPATH**/ ?>