<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.courses.viweaddcourses')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى
                الدورات</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الدورة</th>
                    <th scope="col">ملخص عن الدورة </th>
                    <th scope="col">حول الدورة </th>
                    <th scope="col">مدرس الدورة </th>
                    <th scope="col"> سعر الدورة </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($courses->name); ?> </td>
                        <td class=""><?php echo e($courses->summary); ?> </td>
                        <td class=""><?php echo e($courses->aboutcourse); ?> </td>
                        <td class="">
                            <?php $__currentLoopData = $teatcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teatchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($courses->teacher_name == $teatchers->id): ?>
                                    <?php echo e($teatchers->name); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td class=""><?php echo e($courses->price); ?>₪</td>
                        <td class="">
                            <a href="<?php echo e(route('admin.courses.courseschabtar', $courses->id)); ?>"
                                class="btn btn-success editdelete">مشاهدة الفصول</a>
                            <a href="<?php echo e(route('admin.courses.edit', $courses->id)); ?>" class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="<?php echo e(route('admin.courses.destroy', $courses->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                                <?php if($courses->status ==1): ?>
                                <a href="<?php echo e(route('admin.courses.off', $courses->id)); ?>"
                                    onclick="return confirm(' هل انت متاكد سيتم الغاء تفعل الدورة ') "
                                    class="btn btn-success editdelete"> مفعل</a>
                                <?php endif; ?>
                                <?php if($courses->status ==0): ?>
                                <a href="<?php echo e(route('admin.courses.on', $courses->id)); ?>"
                                    onclick="return confirm(' هل انت متاكد سيتم  تفعل الدورة ') "
                                    class="btn btn-danger editdelete">غير مفعل</a>
                                <?php endif; ?>
                                    <?php if($courses->fav ==1): ?>
                                    <a href="<?php echo e(route('admin.courses.notfav', $courses->id)); ?>"
                                        onclick="return confirm(' هل انت متاكد سيتم الغاء اضافة للمفضلة ') "
                                        class="btn btn-success editdelete"> مفضلة</a>
                                    <?php endif; ?>
                                    <?php if($courses->fav ==0): ?>
                                    <a href="<?php echo e(route('admin.courses.fav', $courses->id)); ?>"
                                        onclick="return confirm(' هل انت متاكد سيتم اضافة للمفضلة ') "
                                        class="btn btn-danger editdelete"> غير مفضلة</a>
                                    <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/courses/courses/courses.blade.php ENDPATH**/ ?>