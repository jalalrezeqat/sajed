<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(route('admin.aboutalpha.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى حول الفا</button>
        </a>

        <a href="<?php echo e(route('admin.about.add.vistion')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى
                رويتنا</button>
        </a>
        <a href="<?php echo e(route('admin.about.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى مهمتنا</button> </a>

    </div>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">حول الفا</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $aboutalph; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutalph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=""> <?php echo e($aboutalph->aboutalpha); ?> </td>
                        <td class="editdelete"> <a href="<?php echo e(route('admin.about.aboutalpha', $aboutalph->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.about.destroy', $aboutalph->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">رؤيتنا</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $vision; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vision): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=""> <?php echo e($vision->our_vision); ?> </td>
                        <td class="editdelete"> <a href="<?php echo e(route('admin.about.editvistion', $vision->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.about.destroy', $vision->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">مهمتنا</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=" ">
                            <?php
                            echo $mission->summernote;
                            ?>
                        </td>
                        <td class="editdelete"> <a href="<?php echo e(route('admin.about.edit', $mission->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.about.destroy', $mission->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/about/about.blade.php ENDPATH**/ ?>