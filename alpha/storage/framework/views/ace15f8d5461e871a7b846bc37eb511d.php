<!DOCTYPE html>
<html lang="ar">
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php session('windowW'); ?>
<?php
use Tanthammar\LivewireWindowSize\HasBreakpoints;

$iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();
$headericon = DB::table('favoriteicons')->where('name', '=', 'header')->get();
$footericon = DB::table('favoriteicons')->where('name', '=', 'footer')->get();
$socials = DB::table('socials')->where('status', '=', '1')->get();
$connectwithus = DB::table('connect_with_us')->get();

?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1126335231-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<head>
    <meta name="viewport">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php $__currentLoopData = $iconfav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iconfavs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <title><?php echo e(config('app.name', 'ALPHA')); ?></title>

    <!-- Fonts -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/button.js', 'resources/css/custom.css', 'resources/css/login.css', 'resources/css/vedio.css', 'resources/css/regestar.css', 'resources/css/order.css', 'resources/css/midia.css', 'resources/css/mediaipad.css']); ?>



    </style>
</head>
<?php
$stylehome = '';
$stylecour = '';
$styleabout = '';
$stylecontactus = '';
if ($_SERVER['REQUEST_URI'] == '/') {
    $stylehome = 'reg';
} elseif ($_SERVER['REQUEST_URI'] == '/courses') {
    $stylecour = 'reg';
} elseif ($_SERVER['REQUEST_URI'] == '/about') {
    $styleabout = 'reg';
} elseif ($_SERVER['REQUEST_URI'] == '/Connectus') {
    $stylecontactus = 'reg';
}
?>


<body>

    <div id="app">

        <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 481)): ?>
        <div class="nav-background">

            <nav class="navbar navbar-home navbar-expand-lg navbar-dark">
                <div class="container-fluid">

                    <?php $__currentLoopData = $headericon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headericons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"
                            aria-label="Read more about Seminole tax hike"><img
                                src="<?php echo e(asset('img/Favoriteicon/' . $headericons->img)); ?>" alt=""></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav links justify-content-center navbar-collapse mb-2 mb-lg-0">
                            <li class="nav-item-home">
                                <a id="home" class="nav-link reghover <?php echo e($stylehome); ?> active " tabindex="1"
                                    aria-current="page" href="<?php echo e(url('/')); ?>">الرئيسية</a>
                            </li>
                            <li class="nav-item-home">
                                <a class="nav-link  <?php echo e($stylecour); ?> reghover active" href="<?php echo e(url('/courses')); ?>">

                                    الدورات</a>
                            </li>
                            <li class="nav-item-home">
                                <a class="nav-link <?php echo e($styleabout); ?> reghover active "
                                    href="<?php echo e(url('/about')); ?>">حول
                                    الفا</a>

                            </li>
                            <li class="nav-item-home">
                                <a class="nav-link <?php echo e($stylecontactus); ?> reghover active"
                                    href="<?php echo e(url('/Connectus')); ?>">اتصل
                                    بنا</a>
                            </li>
                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item-home">
                                        <label class="btn-success  regester btn-lg reg " aria-current="page"
                                            for="modal-toggle-regester">تسجيل </label>
                                        <label class="nav-link  active " id="login-nav" aria-current="page"
                                            for="modal-toggle">تسجيل الدخول</label>


                                    </li>
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item-home">
                                    <li> </li>
                                    </li>
                                <?php endif; ?>
                                </li>
                            <?php else: ?>
                                <li class="nav-item-home dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="dropdown-menu dir dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">

                                            <?php echo e(__(' الملف الشخصي')); ?>

                                        </a>

                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            <?php echo e(__('تسجيل الخروج')); ?>

                                        </a>


                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>

                                    </div>

                                </li>
                            <?php endif; ?>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <?php endif; ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthLessThan', 480)): ?>
        <nav class="navbar  navbar-expand-lg navbar-dark 
                bg-dark border-bottom-0">
            <!-- Navbar toggle button (hamburger icon) -->
            <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebar" aria-controls="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $__currentLoopData = $headericon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headericons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" aria-label="Read more about Seminole tax hike"><img
                        src="<?php echo e(asset('img/Favoriteicon/' . $headericons->img)); ?>" alt=""></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>

        <div class="offcanvas offcanvas-start 
                bg-light d-md-block" tabindex="-1" id="sidebar"
            aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-dark">ALPHA</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                </button>
            </div>
            <div class="offcanvas-body ">
                <ul class="nav flex-column ">
                    <li class="nav-item">
                        <a id="home" class="nav-link   text-dark  active " tabindex="1" aria-current="page"
                            href="<?php echo e(url('/')); ?>">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-dark  active" href="<?php echo e(url('/courses')); ?>">

                            الدورات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark  active " href="<?php echo e(url('/about')); ?>">حول
                            الفا</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark  active" href="<?php echo e(url('/Connectus')); ?>">اتصل
                            بنا</a>
                    </li>
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <label class="nav-link text-dark  active " aria-current="page"
                                    for="modal-toggle-regester">تسجيل
                                </label>
                                <label class="nav-link text-dark active " aria-current="page" for="modal-toggle">تسجيل
                                    الدخول</label>
                            </li>
                        <?php endif; ?>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item-home">
                            <li> </li>
                            </li>
                        <?php endif; ?>
                        </li>
                    <?php else: ?>
                        <li class="nav-item-home dropdown active">
                            <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dir dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">

                                    <?php echo e(__(' الملف الشخصي')); ?>

                                </a>

                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    <?php echo e(__('تسجيل الخروج')); ?>

                                </a>


                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>

                            </div>

                        </li>
                    <?php endif; ?>

                </ul>

            </div>
        </div>
    </div>

    </nav>


    <?php endif; ?>
    

    <main class="">

        <?php echo $__env->yieldContent('content'); ?>
    </main>
    </div>
</body>


<!-- Remove the container if you want to extend the Footer to full width. -->

<div class="footer   ">

    <footer class=" text-center  ">
        <!-- Grid container -->
        <div class=" p-4">
            <!--Grid row-->
            <div class="row ">
                <!--Grid column-->
                <div class="col-lg-3 ">

                    <div class="rounded-circle  d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;margin:auto">
                        <?php $__currentLoopData = $footericon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footericons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('img/Favoriteicon/' . $footericons->img)); ?>" alt=""
                                loading="lazy" />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 ">
                    <ul class="list-unstyled  marginauto">
                        <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="mb-4">

                                <p style="text-align: justify" class=" dir"> <img class="imgfooter"
                                        src="<?php echo e(asset('img/socials/' . $socialss->img)); ?>"
                                        alt="<?php echo e($socialss->name); ?>">

                                    <a target="_blank" href="<?php echo e($socialss->url); ?>"
                                        class="text-white "><?php echo e($socialss->nameofpage); ?></a>
                                </p>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 1028)): ?>

                <div class="col-lg-3 ">

                    <ul class="list-unstyled ">
                        <li class="mb-3">
                            <a href="<?php echo e(url('/')); ?>" class="text-white"><i></i>الرئيسيّة</a>
                        </li>
                        <li class="mb-3">
                            <a href="<?php echo e(url('/courses')); ?>" class="text-white "><i></i>الدورات</a>
                        </li>
                        <li class="mb-3">
                            <a href="<?php echo e(url('/about')); ?> "class="text-white"><i></i>حول ألفا</a>
                        </li>
                        <li class="mb-3">
                            <a href="<?php echo e(url('/Connectus')); ?>" class="text-white"><i></i>اتصل بنا</a>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthLessThan', 1028)): ?>
                <div class="col-lg-3 ">

                    <ul class="mt-5 mb-5 ">
                        <a class="mb-3">
                            <a href="<?php echo e(url('/')); ?>" class="text-white "><i></i>الرئيسيّة</a>
                        </a>
                        <a class="mb-3">
                            <a href="<?php echo e(url('/courses')); ?>" class="text-white  mr-2"><i></i>الدورات</a>
                        </a>
                        <a class="mb-3">
                            <a href="<?php echo e(url('/about')); ?> "class="text-white mr-2"><i></i>حول ألفا</a>
                        </a>
                        <a class="mb-3">
                            <a href="<?php echo e(url('/Connectus')); ?>" class="text-white mr-2"><i></i>اتصل بنا</a>
                        </a>
                    </ul>
                </div>
                <?php endif; ?>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 ">

                    <ul class="">
                        <li>
                            <p class="text-white"><i class="fas fa-map-marker-alt  pe-2"></i>تواصل معنا وابدأ رحلتـك
                            </p>
                            <p class="text-white"><i class="fas fa-map-marker-alt pe-2"></i>للحصول على مُعدّل 99.7</p>
                        </li>
                        <?php $__currentLoopData = $connectwithus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $connectwithus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <p class="text-white"><i class="fas"></i><?php echo e($connectwithus->email); ?></p>
                            </li>
                            <li>

                                <p class="text-white" style="direction: ltr;"><?php echo e($connectwithus->phone); ?></p>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center ">
            Copyright © 2024 alpha All Rights Reserved.
        </div>
        <!-- Copyright -->
    </footer>
</div>

<!-- End of .container -->
<!-- Footer -->






<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Login Form Popup HTML -->

                <input id="modal-toggle" type="checkbox">
                <label class="modal-backdrop" for="modal-toggle"></label>
                <div class="modal-content">
                    <label class="modal-close-btn" for="modal-toggle">
                        <svg width="30" height="30">
                            <line x1="5" y1="5" x2="20" y2="20" />
                            <line x1="20" y1="5" x2="5" y2="20" />
                        </svg>
                    </label>
                    <div class="tabs">
                        <!--  LOG IN  -->
                        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
                            <div class="col-12 col-lg-6">
                                <div class="row justify-content-xl-center">
                                    <div class="col-12 col-xl-10">
                                        <div class="d-flex mb-5">
                                            <div class="justify-content-xl-center  ">
                                                <div class="d-flex ">
                                                    
                                                    <img class="img-fluid  p-2" src="img/login.png" alt="">
                                                    
                                                    <div class="ml-auto p-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex contact-info">

                                            <div class="dir">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 dir">
                                <p class="mb-3 dir text-center ">مرحباً بك في ألفا</p>
                                <p class="dir text-center ">أنتَ الآن أحد المشاركين في رحلة الـ 99.7
                                </p>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <script>
                                        $('#modal-toggle').click();
                                    </script>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php if(session('status')): ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo e(session('status')); ?>

                                        </div>
                                    <?php elseif(session('error')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo e(session('error')); ?>

                                        </div>

                                    <?php endif; ?>
                                    <div class="row gy-4 gy-xl-2 p-4 p-xl-5">
                                        <div class="col-12 inpout-email">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="" placeholder="الايميل" required>
                                            <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>

                                        </div>
                                        <div class="col-12 inpout-email">
                                            <input type="password" class="form-control" id="password"
                                                name="password" value="" placeholder="كلمة المرور" required>

                                        </div>
                                        <div class="col-12 inpout-email">
                                            <button type="submit" class="btn-login form-control">تسجيل
                                                الدخول</button>
                                        </div>
                                        <div class="col-12">

                                            <label class="nav-link active regester-model col-6" id=""
                                                aria-current="page" for="modal-toggle-regester">انشاءحساب
                                            </label>
                                            <a class="reg-login  col-6" href="">هل نسيت كلمة
                                                المرور
                                                ؟ </a>



                                        </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->







    



    
</section>


<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Login Form Popup HTML -->

                <input id="modal-toggle-regester" style='display:none' type="checkbox">
                <label class="modal-backdrop" for="modal-toggle-regester"></label>
                <div class="modal-content">
                    <label class="modal-close-btn" for="modal-toggle-regester">
                        <svg width="30" height="30">
                            <line x1="5" y1="5" x2="20" y2="20" />
                            <line x1="20" y1="5" x2="5" y2="20" />
                        </svg>
                    </label>
                    <h1 class="mb-3 dir text-center ">مرحباً بك في ألفا</h6>
                        <p class="mb-3 dir text-center ">أنشئ حسابك وتابع دروسك بشكل إلكترونيّ وبجودة
                            عالية
                        </p>
                        <div class="row justify-content-around">
                            <div class="col-12 col-md-5">
                                <?php $__errorArgs = ['password_verified_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <script>
                                        $('#modal-toggle-regester').click();
                                    </script>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-12 col-md-5">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <script>
                                        $('#modal-toggle-regester').click();
                                    </script>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <!--  regester  -->
                        <form class="contectus-form dir" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>
                            

                            <div class="row gy-4 gy-xl-2 p-4 p-xl-5 d-flex justify-content-around">


                                <div class="col-12 col-md-8">
                                    <label for="email" class="form-label"> <span
                                            class="text-danger"></span></label>
                                    <input type="text" class="form-control " placeholder="الإسم الرباعي"
                                        id="name" name="name" value="" required>
                                </div>


                                <div class="col-12 col-md-5">
                                    <label for="fname" class="form-label"> <span
                                            class="text-danger"></span></label>
                                    <div class="input-group">
                                        <input type="fname" class="form-control" placeholder="المحافظة"
                                            id="Governorate" name="Governorate" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 float-reg dir ">
                                    <label for="fname" class="form-label"> <span
                                            class="text-danger"></span></label>
                                    <div class="input-group  form-control dir ">
                                        <label for="" class="form-check-label" for="inlineCheckbox1">الفرع
                                            :</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                id="branch1" value="ادبي">
                                            <label class="form-check-label1" for="inlineRadio1">ادبي</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                id="branch2" value="علمي">
                                            <label class="form-check-label2" for="inlineRadio1">علمي</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch"
                                                id="branch3" value="صناعي">
                                            <label class="form-check-label3" for="inlineRadio1">صناعي</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="الايميل"
                                            id="email1" name="email1" required
                                            value="
                                            ">
                                    </div>

                                </div>
                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="رقم الهاتف"
                                            id="phone" name="phone" required value="">
                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input name="password" type="password" required
                                            class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="newPasswordInput" placeholder="كلمة المرور ">

                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <div class="input-group">
                                        <input name="password_verified_at" type="password" required
                                            class="form-control" id="confirmNewPasswordInput"
                                            placeholder="تاكيد كلمة المرور">

                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex but-regester justify-content-center">
                                    <label for="lname" class="form-label"> <span class="text-danger"></label>
                                    <button type="submit" class="btn contectus-form-but ">إنشاء
                                        الحساب</button>
                                </div>


                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- partial -->


    




    



    
</section>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>



</body>


</html>
<script>
    // Change the second argument to your options:
    // https://github.com/sampotts/plyr/#options
    const player = new Plyr('video', {
        captions: {
            active: true
        }
    });

    // Expose player so it can be used from the console
    window.player = player;
    const myModalEl = document.getElementById('myModal')
    const modal = new mdb.Modal(myModalEl)
    modal.show()

    document.querySelector(".links").onclick = ev => {
        if (ev.target.tagName == "A")
            ev.target.className = "done"
    }
    jQuery(function($) {
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();

        $(window).resize(function() {
            if (windowWidth != $(window).width() || windowHeight != $(window).height()) {
                location.reload();
                return;
            }
        });
    });
</script>
<?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/layouts/app.blade.php ENDPATH**/ ?>