<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.branch.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى الفروع</button> </a>
    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">اسم الفرع</th>
                    <th scope="col">ملخص عن الفرع</th>
                    <th scope="col">الصورة</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($branch->name); ?> </td>
                        <td class=""><?php echo e($branch->summary); ?> </td>
                        <td class=""><img class="img-slider" src="<?php echo e(asset('img/branch/' . $branch->img)); ?>"
                                alt=""> </td>


                        <td class=""> <a href="<?php echo e(route('admin.branch.edit', $branch->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.branch.destroy', $branch->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/branch/branch.blade.php ENDPATH**/ ?>