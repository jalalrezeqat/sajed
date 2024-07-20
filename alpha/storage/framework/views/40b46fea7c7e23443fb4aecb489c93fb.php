<?php $__env->startSection('content'); ?>
    <div>

        <a href="<?php echo e(route('admin.questionscours')); ?>"><button class="btnaboutadd btn btn-dark">رجوع </button></a>
        <a href="<?php echo e(route('admin.courses.questionscoursadd', $courses->id)); ?>"><button class="btnaboutadd btn btn-dark">اضافة
                الى لااسئلة</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">السؤال </th>
                    <th scope="col">نص السؤال</th>
                    <th scope="col">الدورة </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $questionscours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionscours): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($questionscours->question); ?> </td>
                        <td class="tdnamecontectus"><?php echo $questionscours->summernote; ?> </td>
                        <td class="tdnamecontectus"><?php echo e($courses->name); ?> </td>


                        <td class="">
                            <a href="<?php echo e(route('admin.questionscours.edit', $questionscours->id)); ?>"
                                class="btn btn-dark editdelete">تعديل </a>

                            <a href="<?php echo e(route('admin.questionscours.destroy', $questionscours->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/questions/questioncviwe.blade.php ENDPATH**/ ?>