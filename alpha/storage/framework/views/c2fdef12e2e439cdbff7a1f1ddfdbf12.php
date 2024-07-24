<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" type="image/x-icon" href="/img/fiveicon.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title><?php echo e('Admin Panel ALPHA'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript" src="https://cdn.bitmovin.com/player/web/8/bitmovinplayer.js"></script>
    <script type="text/javascript" src="https://cdn.bitmovin.com/analytics/web/beta/2/bitmovinanalytics.min.js"></script>
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css', 'resources/admin/assets/vendors/css/vendor.bundle.base.css', 'resources/admin/assets/css/style.css', 'resources/admin/assets/images/favicon.ico', 'resources/css/custom.css']); ?>
    <?php $iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();
    $headericon = DB::table('favoriteicons')->where('name', '=', 'header')->get();
    
    ?>
    <?php $__currentLoopData = $iconfav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iconfavs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>

<body class="dir">
    <div class="container-scroller  ">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <?php $__currentLoopData = $iconfav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iconfavs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="navbar-brand brand-logo" href="<?php echo e(route('admin.dashboard')); ?>"><img
                            style="height: 50px;width:50px" src="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>"
                            alt="">
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown ">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"><?php echo e(Auth::guard('admin')->user()->name); ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown nav-item nav-profile dropdown"
                            aria-labelledby="profileDropdown">
                            <form method="get" class="dropdown-item" action="">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('admin/dashboard/profile', Auth::guard('admin')->user()->id)); ?>"
                                    class="nav-link text-primary">الملف
                                    الشخصي</a>

                            </form>
                            <div class="dropdown-divider"></div>
                            <form method="POST" class="dropdown-item" action="<?php echo e(route('admin.logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button class="btn text-primary nav-link ">تسجيل الخروج</button>
                            </form>
                        </div>
                    </li>

                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2"><?php echo e(Auth::guard('admin')->user()->name); ?></span>
                            </div>
                        </a>
                        <?php if(Auth::guard('admin')->user()->stutes == 0): ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                            <span class="menu-title font-weight-bold mb-2">لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.branch')); ?>">
                            <span class="menu-title font-weight-bold mb-2">الفروع</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">الدورات</span>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('admin.courses')); ?>">اضافة
                                        دورة</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('admin.codegenaret')); ?>">انشاء
                                        كود </a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('admin.teacher')); ?>">اضافة
                                        معلم</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.questionscours')); ?>">اضافة اسئلة شائعة</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.categories.index')); ?>">اضافة
                                        اختبار </a></li>

                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.order')); ?>">
                            <span class="menu-title font-weight-bold mb-2">طلبات البطاقات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#slider" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">سلايدر</span>
                        </a>
                        <div class="collapse" id="slider">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('admin.slider')); ?>">سلايدر
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.sliderteacher')); ?>">سلايدر المعلم </a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.addAdmin')); ?>">
                            <span class="menu-title font-weight-bold mb-2">اضافة مسؤول </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#Favoriteicon" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">حول الموقع</span>
                        </a>
                        <div class="collapse" id="Favoriteicon">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.Favoriteicon')); ?>">ايقونة
                                        مفضلة
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('admin.socials')); ?>">مواقع
                                        تواصل الاجتماعي</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.ConnectWithUs')); ?>">معلومات الموقع
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.policies')); ?>">سياسات الموقع
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.teacher.dashbord')); ?>">انشاء
                                        مدرس
                                    </a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#chart" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">تحليل</span>
                        </a>
                        <div class="collapse" id="chart">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.dashbord.studant')); ?>">معلومات
                                        الطلاب
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?php echo e(route('admin.dashbord.coures')); ?>">الدورات</a></li>
                                
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.about')); ?>">
                            <span class="menu-title font-weight-bold mb-2">حول المنصة</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.CommonQuestions')); ?>">
                            <span class="menu-title font-weight-bold mb-2">الاسئلة الشائعة</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.Connectus')); ?>">
                            <span class="menu-title font-weight-bold mb-2">اتصل بنا</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(Auth::guard('admin')->user()->stutes == 1): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                                <span class="menu-title font-weight-bold mb-2">لوحة التحكم</span>
                            </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('admin.codegenaret')); ?>">انشاء
                                كود </a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.order')); ?>">
                                <span class="menu-title font-weight-bold mb-2">طلبات البطاقات</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.Connectus')); ?>">
                                <span class="menu-title font-weight-bold mb-2">اتصل بنا</span>
                            </a>
                        </li>
                    <?php endif; ?>


                </ul>
            </nav>
            <main class="main-panel">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>

    </div>

</body>

</html>


<?php echo app('Illuminate\Foundation\Vite')(['resources/admin/assets/vendors/js/vendor.bundle.base.js', 'resources/admin/assets/vendors/chart.js/Chart.min.js', 'resources/admin/assets/js/jquery.cookie.js', 'resources/admin/assets/js/off-canvas.js', 'resources/admin/assets/js/hoverable-collapse.js', 'resources/admin/assets/js/misc.js', 'resources/admin/assets/js/dashboard.js', 'resources/admin/assets/js/todolist.js']); ?>

<script>
    $('#summernote').summernote();
</script>














<?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/app.blade.php ENDPATH**/ ?>