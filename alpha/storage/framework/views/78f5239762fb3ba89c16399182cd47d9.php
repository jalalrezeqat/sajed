<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(route('admin.sliderteacher.add')); ?>"><button class="btnaboutadd btn btn-dark">اضافة الى سلايدر
                المعلم</button></a>

    </div>

    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الصورة</th>
                    <th scope="col">كمبيوتر او هاتف </th>
                    <th scope="col">الصفحة </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($teacher->mobile_dsktop == 1): ?>
                            <td class="tdnamecontectus "><img class="img-slider"
                                    src="<?php echo e(asset('img/slider/' . $teacher->img)); ?>" alt=""></td>
                            <td class="">

                                <p>كمبيوتر</p>
                            </td>
                        <?php endif; ?>
                        <?php if($teacher->mobile_dsktop == 2): ?>
                            <td class="tdnamecontectus "><img class="img-slider"
                                    src="<?php echo e(asset('img/sliderphone/' . $teacher->img)); ?>" alt=""></td>
                            <td class="">

                                <p>هاتف</p>
                            </td>
                        <?php endif; ?>

                        
                        <td class=""><?php echo e($teacher->page); ?> </td>

                        <td class=""> <a href="<?php echo e(route('admin.sliderteacher.edit', $teacher->id)); ?>"
                                class="btn btn-success editdelete">تعديل</a>
                            <a href="<?php echo e(route('admin.slider.destroy', $teacher->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/slider/sliderteacher.blade.php ENDPATH**/ ?>