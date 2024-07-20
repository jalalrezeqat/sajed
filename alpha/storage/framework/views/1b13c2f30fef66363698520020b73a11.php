<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.courses')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>
        <a href="<?php echo e(route('admin.courses.courseschabtaradd', $courses->id)); ?>"><button class="btnaboutadd btn btn-dark">اضافة
                الى الفصول</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الفصل</th>
                    <th scope="col">اسم الدورة</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $chabter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chabter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($chabter->name); ?> </td>
                        <td class=""><?php echo e($courses->name); ?> </td>

                        <td class="">
                            <a href="<?php echo e(route('admin.courses.lesson', $chabter->id)); ?>"
                                class="btn btn-success editdelete">مشاهدة الدروس</a>
                            <a href="<?php echo e(url('admin/chabter/edit/' . $chabter->id, $courses->id)); ?>"
                                class="btn btn-dark editdelete">تعديل
                            </a>

                            <a href="<?php echo e(route('admin.chabtar.destroy', $chabter->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/courses/courses/courseschabtar.blade.php ENDPATH**/ ?>