<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<!-- Content Row -->
        <div class="card shadow dir">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('اضافة سؤال')); ?></h1>
                    <a href="<?php echo e(route('admin.questions.index',$category_id)); ?>" class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('رجوع')); ?></a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.questions.store',$category_id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="question_text"><?php echo e(__('نص السؤال')); ?></label>
                        <input type="text" class="form-control" id="question_text" placeholder="<?php echo e(__('نص السؤال ')); ?>" name="question_text" value="<?php echo e(old('question_text')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="category"><?php echo e(__('اسم الاختبار')); ?></label>
                        <select class="form-control" name="category_id" id="category">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('حفظ')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/questions/create.blade.php ENDPATH**/ ?>