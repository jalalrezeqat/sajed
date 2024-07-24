<?php $__env->startSection('content'); ?>

    <div>

    <a href="<?php echo e(route('admin.teacher')); ?>"><button  class="btnaboutadd btn btn-dark">رجوع  </button></a>
   
    </div>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/teacher/add')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="form-group">
                <label for="inputtitelmistion">اسم المعلم</label>
                <input type="text" class="form-control" name='name' id="name	" placeholder="اسم المعلم ">
              </div>
            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img' id="img">
              </div>
              <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> معلومات المعلم  </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea"></textarea>
                    </div>    
                </div>
            </div>
            
           
            <button type="submit" class="btn btn-info">اضافة</button>
          </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/courses/teacher/viweaddteacher.blade.php ENDPATH**/ ?>