<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.addAdminStore')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى
                المسؤول </button></a>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($admins->name); ?> </td>
                        <td class=""><?php echo e($admins->email); ?> </td>

                        <td> <a href="<?php echo e(route('admin.admineditpassword.edit', $admins->id)); ?>"
                                class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="<?php echo e(route('admin.useradmin.destroy', $admins->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/Admin/roule/addAdmin.blade.php ENDPATH**/ ?>