<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.codegenaret.add')); ?>"><button class="btnaboutadd btn btn-dark">انشاء كود</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الكود</th>
                    <th scope="col"> الدورة</th>
                    <th scope="col"> اسم الطالب</th>
                    <th scope="col"> تاريخ البداية</th>
                    <th scope="col"> تاريخ النهاية</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($code->code); ?> </td>
                        <td class=""><?php echo e($code->courses); ?> </td>
                        <td class=""><?php echo e($code->user); ?> </td>
                        <td class=""><?php echo e($code->startcode); ?> </td>
                        <td class=""><?php echo e($code->endcode); ?> </td>

                        <td class="">
                            <a href="<?php echo e(route('admin.codegenaret.edit', $code->id)); ?>" class="btn btn-dark editdelete">تعديل
                            </a>
                            <a href="<?php echo e(route('admin.codegenaret.destroy', $code->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/courses/genaratcode/codeindex.blade.php ENDPATH**/ ?>