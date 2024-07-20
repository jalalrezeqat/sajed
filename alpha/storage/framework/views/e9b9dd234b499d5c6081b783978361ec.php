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
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create option')); ?></h1>
                    <a href="<?php echo e(route('admin.options.index',$id)); ?>" class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('Go Back')); ?></a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.options.store',$id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="question"><?php echo e(__('question')); ?></label>
                        <select class="form-control" name="question_id" id="question">
                            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($question); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="option_text"><?php echo e(__('option text')); ?></label>
                        <input type="text" class="form-control" id="option_text" placeholder="<?php echo e(__('option text')); ?>" name="option_text" value="<?php echo e(old('option_text')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="points"><?php echo e(__('points')); ?></label>
                        <input type="number" class="form-control" id="points" placeholder="<?php echo e(__('option text')); ?>" name="points" value="<?php echo e(old('points')); ?>" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/options/create.blade.php ENDPATH**/ ?>