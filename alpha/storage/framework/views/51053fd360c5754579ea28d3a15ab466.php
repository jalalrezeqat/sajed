<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.teacher.viweaddteacher')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى
                المعلم</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الصورة</th>
                    <th scope="col">اسم المدرس </th>
                    <th scope="col">معلومات المدرس </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tetcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tetchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus "><img class="img-slider"
                                src="<?php echo e(asset('img/teacher/' . $tetchers->img)); ?>" alt=""></td>
                        <td class=""><?php echo e($tetchers->name); ?> </td>
                        <td class=" ">
                            <?php
                            echo $tetchers->summernote;
                            ?>
                        </td>

                        <td class=""> <a href="<?php echo e(route('admin.teacher.edit', $tetchers->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.teacher.destroy', $tetchers->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/teacher/teacher.blade.php ENDPATH**/ ?>