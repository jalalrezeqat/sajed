<?php $__env->startSection('content'); ?>
<div>
    <a href="<?php echo e(route('admin.slider.add')); ?>"><button  class="btnaboutadd btn btn-dark">اضافة الى سلايدر</button></a>

  </div>
  <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">الصورة</th>
              <th scope="col">الرابط </th>
              <th scope="col">الصفحة </th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="tdnamecontectus "><img class="img-slider" src="<?php echo e(asset('img/slider/'.$slider->img)); ?>" alt=""></td>
              <td class=""><?php echo e($slider->url); ?> </td>
              <td class=""><?php echo e($slider->page); ?> </td>
  
              <td class="">  <a href="<?php echo e(route('admin.slider.edit',$slider->id)); ?>"  class="btn btn-success editdelete">تعديل</a>
                    <a href="<?php echo e(route('admin.slider.destroy',$slider->id)); ?>" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
              </td>
            
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/slider/slider.blade.php ENDPATH**/ ?>