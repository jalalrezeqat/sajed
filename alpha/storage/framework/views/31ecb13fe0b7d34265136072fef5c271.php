<?php $__env->startSection('content'); ?>

<div class="">
  <a href="<?php echo e(url()->previous()); ?>"><button  class="btnaboutadd btn btn-dark">رجوع </button></a>
   
</div>
<div class="formaddm">
    <h1> اسم الدرس : <?php echo e($chabter->name); ?></h1>

</div>

<div class="formaddm d-flex justify-content-center">
<video width="70%" height="100%" controls>
    <source src="<?php echo e(asset('img/vedio/'.$chabter->vedio)); ?>" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/courses/viwelesson.blade.php ENDPATH**/ ?>