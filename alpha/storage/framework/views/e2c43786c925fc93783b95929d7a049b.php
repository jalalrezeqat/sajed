<?php $__env->startSection('content'); ?>
<div class=" table-responsive">
<table class=" table-admin-connectus  ">
    <thead class="thead-green-connectus">
      <tr class="">
        <th scope="col ">الاسم</th>
        <th scope="col">الايميل</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">الرسالة</th>
        <th scope="col"></th>

      </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $connectus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $connectus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <tr>
        <td class="tdnamecontectus"> <?php echo e($connectus->firestname); ?> <?php echo e($connectus->lastname); ?></td>
        <td><?php echo e($connectus->email); ?></td>
        <td><?php echo e($connectus->phone); ?></td>
        <td class=""><?php echo e($connectus->note); ?></td>
        <td> <a href="<?php echo e(route('admin.Connectus.destroy',$connectus->id)); ?>" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger">حذف</a>
        </td>


      </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    
  </table>
  </div>
  
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/Connectus.blade.php ENDPATH**/ ?>