<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.slider')); ?>"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="<?php echo e(url('admin/slider/add')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>


            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img' id="img">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الرابط</label>
                <input type="text" class="form-control" name='url' id="url" placeholder="الرابط ">
            </div>
            <div class="form-group">
                <label for="cars">اختار الصفحة :</label>
                <select class="form-control" name="page" id="page">
                    <option name="page" value="الرئيسية">الرئيسية</option>
                    <option name="page" value="الدورات">الدورات</option>
                    <option value="حول الفا">حول الفا</option>
                    <option value="اتصل بنا">اتصل بنا</option>
                    <option value="تسجيل الدخول">تسجيل الدخول </option>

                </select>
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/slider/addslider.blade.php ENDPATH**/ ?>