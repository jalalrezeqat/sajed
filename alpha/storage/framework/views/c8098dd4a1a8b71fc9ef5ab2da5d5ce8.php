<?php $__env->startSection('content'); ?>


<div>

    <a href="<?php echo e(route('admin.CommonQuestions.add')); ?>"><button  class="btnaboutadd btn btn-dark">اضافة الى الاسئلة الشائعة</button> </a>
  </div>
  <div class=" table-responsive">
  
        <table class=" table-admin-connectus  ">
          <thead class="thead-green-connectus">
            <tr class="">
              <th scope="col ">السؤال</th>
              <th scope="col">نص السؤال</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="tdnamecontectus"><?php echo e($question->question); ?> </td>
              <td class=""><?php echo e($question->question_text); ?> </td>
  
              <td class="">  <a href="<?php echo e(route('admin.CommonQuestions.edit',$question->id)); ?>"  class="btn btn-success editdelete">تعديل</a>
                    <a href="<?php echo e(route('admin.CommonQuestions.destroy',$question->id)); ?>" onclick="return confirm(' هل انت متاكد سيتم الحدف') " class="btn btn-danger editdelete">حذف</a>
              </td>
            
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/CommonQuestions/CommonQuestions.blade.php ENDPATH**/ ?>