<?php $__env->startSection('content'); ?>
    
<?php $__env->startSection('content'); ?>
    <br><br>


    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">#</th>
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th scope="col"> الهاتف </th>
                    <th scope="col"> الفرع </th>
                    <th scope="col"> المحافظة </th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=""><?php echo e($users->id); ?> </td>
                        <td class="tdnamecontectus"><?php echo e($users->name); ?> </td>
                        <td class=""><?php echo e($users->email); ?> </td>
                        <td class=""><?php echo e($users->phone); ?> </td>
                        <td class=""><?php echo e($users->branch); ?> </td>
                        <td class=""><?php echo e($users->Governorate); ?> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/chart/countstudant.blade.php ENDPATH**/ ?>