<?php $__env->startSection('content'); ?>
    <div>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الايميل </th>
                    <th scope="col">الهاتف </th>
                    <th scope="col">الموقع </th>

                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $connectwithus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $connectwithus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($connectwithus->email); ?> </td>
                        <td class="tdnamecontectus" style="direction: ltr;"><?php echo e($connectwithus->phone); ?> </td>
                        <td class="tdnamecontectus"><?php echo e($connectwithus->address); ?> </td>



                        <td class=""> <a href="<?php echo e(route('admin.ConnectWithUs.edit', $connectwithus->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/ConnectWithUs/ConnectWithUs.blade.php ENDPATH**/ ?>