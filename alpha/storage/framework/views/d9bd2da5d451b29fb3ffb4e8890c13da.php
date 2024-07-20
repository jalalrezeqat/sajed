<?php $__env->startSection('content'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Ajax File Upload With Progress Bar Example Tutorial -- ItErrorSolution.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <div class="formaddm">
        <a href="<?php echo e(route('admin.courses.lesson', $chabterid)); ?>"><button class="btnaboutadd btn btn-dark">رجوع
            </button></a>

        <form id="fileUploadForm" action="<?php echo e(route('admin.courses.lessonadd1', $chabterid)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="inputtitelmistion">اسم الدرس</label>
                <input type="text" class="form-control" name='name' id="name" placeholder="اسم الدرس ">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفيديو</label>
                <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name='vedio'
                    id="vedio">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفيديو من منصة خارجية </label>
                <input type="text" class="form-control" name='iframe' id="iframe" placeholder="اسم الدرس ">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">ملخص المحاضرة</label>
                <input type="file" accept="application/pdf" class="form-control" name='file' id="file">
            </div>

            <div class="form-group">
                <label for="inputtitelmistion">الوحدة</label>
                <select class="form-control" name="chabters" id="chabters">
                    <?php $__currentLoopData = $chabter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chabter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($chabter->id); ?>"><?php echo e($chabter->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(function () {
            $(document).ready(function () {
                $('form').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress.progress-bar').css("width", percentage+'%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        alert('File has uploaded successfully!');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Bootstrap 5 Progress Bar Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="max-width: 900px">
         
        <div class="alert alert-primary mb-4 text-center">
           <h2 class="display-6">Laravel File Upload with Ajax Progress Bar Example - ItSolutionStuff.com</h2>
        </div>  
        <form id="fileUploadForm" method="POST" action="<?php echo e(route('admin.courses.lessonadd1', $chabterid)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group mb-3">
                <input name="vedio" type="file" class="form-control">
            </div>
            <div class="form-group">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
            </div>
            <div class="d-grid mt-4">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        alert('File has uploaded successfully!');                    }
                });
            });
        });
    </script>
</body>
</html>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/admin/layouts/courses/courses/lessonadd.blade.php ENDPATH**/ ?>