<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.policies.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى سياسات الموقع
            </button> </a>
    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">سياسات الموقع</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policiess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="">

                            <?php
                            echo $policiess->summernote;
                            ?>
                        </td>


                        <td class=""> <a href="<?php echo e(route('admin.policies.edit', $policiess->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.policies.destroy', $policiess->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/policies/index.blade.php ENDPATH**/ ?>