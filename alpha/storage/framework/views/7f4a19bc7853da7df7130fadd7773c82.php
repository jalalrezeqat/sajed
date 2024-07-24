<?php $__env->startSection('content'); ?>
    <br><br>
    <form action="<?php echo e(route('admin.dashbord.orderserch')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="form-grou col-3">
                <label for="inputtitelmistion"> من تاريخ</label>
                <input type="date" name="start" class="form-control" required>
            </div>
            <div class="form-grou col-3">
                <label for="inputtitelmistion">الى تاريخ </label>
                <input type="date" name="end" class="form-control" required>
            </div>
            <div class="  col-3">
                <label for="inputtitelmistion"></label>
                <button type="submit" class="btn btn-info  form-control">بحث</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th scope="col"> الهاتف </th>
                    <th scope="col"> المحافظة </th>
                    <th scope="col">العنوان </th>
                    <th scope="col">الدورة </th>
                    <th scope="col">تاريخ الطلب </th>
                    <th scope="col">الحالة</th>
                    <th scope="col">حذف</th>






                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="tdnamecontectus"><?php echo e($orders->name); ?> </td>
                        <td class=""><?php echo e($orders->email); ?> </td>
                        <td class=""><?php echo e($orders->phone); ?> </td>
                        <td class=""><?php echo e($orders->gavarment); ?> </td>
                        <td class=""><?php echo e($orders->addres); ?> </td>
                        <td class="">
                            <?php $__currentLoopData = $coureses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $couresess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($orders->course == $couresess->id): ?>
                                    <?php echo e($couresess->name); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>

                        <td class=""><?php echo e($orders->created_at); ?> </td>
                        <td>
                            <?php if($orders->stetus == 1): ?>
                                <a href="<?php echo e(route('admin.order.todelevary', $orders->id)); ?>"
                                    onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى التوصيل') "
                                    class="btn btn-secondary editdelete">تم
                                    الطلب</a>
                            <?php endif; ?>
                            <?php if($orders->stetus == 2): ?>
                                <a href="<?php echo e(route('admin.order.tosucsses', $orders->id)); ?>"
                                    onclick="return confirm(' هل انت متاكد سيتم تحويل الطلب الى تم الاستلام ') "
                                    class="btn btn-info editdelete">تم
                                    الارسال الى التوصيل</a>
                            <?php endif; ?>
                            <?php if($orders->stetus == 3): ?>
                                <p class="btn btn-success editdelete">تم الاستلام</p>
                            <?php endif; ?>
                        </td>
                        <td><a href="<?php echo e(route('admin.order.destroy', $orders->id)); ?>"
                                onclick="return confirm(' هل انت متاكد سيتم الحدف') "
                                class="btn btn-danger editdelete">حذف</a></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/chart/orderserch.blade.php ENDPATH**/ ?>