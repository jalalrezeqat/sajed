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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('انشاء اختبار')); ?></h1>
                    <a href="<?php echo e(route('admin.categories.index')); ?>"
                        class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('رجوع')); ?></a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.categories.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name"><?php echo e(__('اسم الاختبار')); ?></label>
                        <input type="text" class="form-control" id="name" placeholder="<?php echo e(__('اسم الاختبار')); ?>"
                            name="name" value="<?php echo e(old('name')); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="name"><?php echo e(__('اسم الدورة')); ?></label>
                        <select class="form-control" name="courses" id="courses">
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($courses->id); ?>"><?php echo e($courses->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name"><?php echo e(__('اسم الوحدة')); ?></label>
                        <div class="form-group">
                            <select class="form-control" name="chabters" id="chabters">
                                <?php $__currentLoopData = $chabters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chabters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($chabters->id); ?>"><?php echo e($chabters->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('حفظ')); ?></button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/categories/create.blade.php ENDPATH**/ ?>