<?php $__env->startSection('content'); ?>
    <div class="table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th scope="col"> الهاتف </th>
                    <th scope="col"> المحافظة </th>
                    <th scope="col">العنوان </th>
                    <th scope="col">الدورة </th>
                    <th scope="col">تاريخ الطلب </th>
                    <th scope="col">الحالة</th>
                    <th scope="col">حذف</th>






                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($orders->name); ?> </td>
                        <td class=""><?php echo e($orders->email); ?> </td>
                        <td class=""><?php echo e($orders->phone); ?> </td>
                        <td class=""><?php echo e($orders->gavarment); ?> </td>
                        <td class=""><?php echo e($orders->addres); ?> </td>
                        <td class="">
                            <?php $__currentLoopData = $coureses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $couresess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($orders->course == $couresess->id): ?>
                                    <?php echo e($couresess->name); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>

                        <td class=""><?php echo e($orders->created_at); ?> </td>
                        <td><a href="<?php echo e(route('admin.order.destroy', $orders->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">تم
                                الطلب</a></td>
                        <td><a href="<?php echo e(route('admin.order.destroy', $orders->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/order.blade.php ENDPATH**/ ?>