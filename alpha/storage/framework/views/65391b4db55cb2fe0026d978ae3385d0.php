<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(route('admin.aboutmore.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة فيديو تعرف اكثر </button>
        </a>


    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">تعرف اكثر</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=""> <?php echo e($admins->id); ?> </td>
                        <td class="editdelete"> <a href="<?php echo e(route('admin.aboutmore.show', $admins->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.aboutmore.destroy', $admins->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/about/aboutmore/aboutmore.blade.php ENDPATH**/ ?>