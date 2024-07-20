<?php $__env->startSection('content'); ?>
    <div>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم مكان الايقونة</th>
                    <th scope="col">صورة </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $favoriteicons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favoriteiconss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($favoriteiconss->name); ?> </td>
                        <td class=""> <img src="<?php echo e(asset('img/Favoriteicon/' . $favoriteiconss->img)); ?>" alt="">
                        </td>

                        <td class=""> <a href="<?php echo e(route('admin.Favoriteicon.edit', $favoriteiconss->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/favoriteicons/favoriteicons.blade.php ENDPATH**/ ?>