<?php $__env->startSection('content'); ?>
    <br><br>
    <div class="formaddm">
        <form action="<?php echo e(route('admin.dashbord.serchstudant')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="form-grou col-8">
                    <select class="form-control" name="studant" id="courses">
                        <option value="1">الطلاب المشتركين</option>
                        <option value="2">الطلاب الغير مشتركين</option>
                    </select>
                </div>
                <div class="  col-3">
                    <button type="submit" class="btn btn-info">بحث</button>
                </div>
            </div>
        </form>
    </div>
    <div>
        <h2><?php echo e($msg); ?><?php echo e($usercount); ?></h2>
    </div>
    <?php
    $c = 0;
    foreach ($code as $codes) {
        foreach ($user as $users) {
            if ($codes->user_id == $users->id) {
                $a = $users->name;
            }
        }
    }
    ?>
    <div class=" table-responsive">

        <table class=" table-admin-connectus  ">
            <thead class="thead-green-connectus">
                <tr class="">
                    <th scope="col ">#</th>
                    <th scope="col ">الاسم</th>
                    <th scope="col"> الايمل</th>
                    <th scope="col"> الهاتف </th>
                    <th scope="col"> الفرع </th>
                    <th scope="col"> المحافظة </th>
                    <th scope="col"> عدد الدورات التي يشترك فيها </th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=""><?php echo e($users->id); ?> </td>
                        <td class="tdnamecontectus"><?php echo e($users->name); ?> </td>
                        <td class=""><?php echo e($users->email); ?> </td>
                        <td class=""><?php echo e($users->phone); ?> </td>
                        <td class=""><?php echo e($users->branch); ?> </td>
                        <td class=""><?php echo e($users->Governorate); ?> </td>
                        <?php $count = 0; ?>

                        <?php $__currentLoopData = $code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($codes->user_id == $users->id): ?>
                                <?php $c++;
                                $count = 0;
                                $count = $count + $c;
                                ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $c = 0; ?>

                        <td class=""><?php echo $count; ?> </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/chart/studant.blade.php ENDPATH**/ ?>