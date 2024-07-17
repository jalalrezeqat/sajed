<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.teacher.dashbord.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى
                المعلم</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الصورة</th>
                    <th scope="col">اسم المدرس </th>
                    <th scope="col">الايميل </th>
                    <th scope="col">رقم الهاتف </th>

                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tetcher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tetchers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus "><img src="<?php echo e(asset('img/user_profile/' . $tetchers->user_img)); ?>"
                                class="img-dashbord rounded-circle" alt="" loading="lazy" /></td>
                        <td class=""><?php echo e($tetchers->name); ?> </td>
                        <td class=""><?php echo e($tetchers->email); ?> </td>
                        <td class=""><?php echo e($tetchers->phone); ?> </td>



                        <td class=""> <a href="<?php echo e(route('admin.teacherdashbord.edit', $tetchers->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.teacherdashbord.destroy', $tetchers->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/teacher/teacherdashbord.blade.php ENDPATH**/ ?>