<?php $__env->startSection('content'); ?>
    <div>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الموقع </th>
                    <th scope="col ">اسم الحساب </th>
                    <th scope="col">صورة </th>
                    <th scope="col">رابط</th>
                    <th scope="col">حالة الحساب</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    if ($socials->status == '1') {
                        $status = 'نشط';
                    } else {
                        $status = 'غير نشط';
                    }
                    ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($socials->name); ?> </td>
                        <td class="tdnamecontectus"><?php echo e($socials->nameofpage); ?> </td>

                        <td class=""> <img src="<?php echo e(asset('img/socials/' . $socials->img)); ?>" alt="">
                        </td>
                        <td class="tdnamecontectus"><?php echo e($socials->url); ?> </td>

                        <td class="tdnamecontectus"><?php echo e($status); ?> </td>

                        <td class=""> <a href="<?php echo e(route('admin.socials.edit', $socials->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/Social/social.blade.php ENDPATH**/ ?>