  <!DOCTYPE html>
  <html lang="ar">

  <head>
      <meta name="description"
          content="اشترك الآن في دورات التوجيهي على منصة ألفا التعليمية، دورات شاملة للفرعين العلمي والادبي مع امكانية مشاهدة الدروس وتكرارها في أي وقت وأي مكان">
      <meta name="keywords" content="دورات التوجيهي للفرعين العلمي والادبي, شرح كامل للمواد">
      <meta name="الفرع العلمي" content='<?php echo e(url('courses/1')); ?>' />
      <meta name="الفرع الادبي" content='<?php echo e(url('courses/2')); ?>' />
      <meta name="viewport" content="width=device-width">
      <meta name="googlebot" content="index,follow">
      <meta name="robots" content="index,follow">
      <meta name="viewport" content="width=640, initial-scale=.5, user-scalable=no" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/mediaipad.css']); ?>

      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/mediaipad.css']); ?>
  </head>

  

  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-435311464-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
  <?php $__env->startSection('content'); ?>
      
      <section class="">
          <div id="carouselExampleSlidesOnly" class="carousel  mt  " data-ride="carousel">
              <div class="carousel-inner">
                  <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="carousel-item active">
                          <img class="d-block  slider-cource " src="<?php echo e(asset('img/slider/' . $slider->img)); ?>"
                              alt="First slide">
                      </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
          </div>
          
          <?php if($agent->isDesktop()||$agent->isTablet()): ?>

          <div class="mt">
              <img src="img/course-c.png" class="rounded mx-auto d-block img-fluid" alt="">
          </div>
          <?php endif; ?>
          

          
      </section>
      <section class="mt100px">
          <div class="row row-cols-1  card-course dir ovarflow  row-cols-md-3 ">
              <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if($agent->isDesktop()): ?>


                  <div class="col colcard">
                      <div class="card-home card card-home " id="card-home-coures">
                          <img src="img/card-img.png" class="card-img-top-cource" alt="...">

                          <div class="card-body">
                              <p class="card-title-home font18px margin-b4"><?php echo e($branch->name); ?></p>
                              <p class=" font14px "><?php echo e($branch->summary); ?></p>

                          </div>
                          <div class="card-button-courses">

                              <a href="<?php echo e(route('front.FrontCourcse', $branch->id)); ?> "><button class="button2">تفقد
                                      الدورات </button></a>

                          </div>
                      </div>
                  </div>
                  
              <?php endif; ?>
              <?php if($agent->isTablet()): ?>

              <div class="col colcard">
                  <div class="card-home card card-home " id="card-home-coures">
                      <img src="img/card-img.png" class="card-img-top-cource" alt="...">

                      <div class="card-body">
                          <p class="card-title-home font18px margin-b4"><?php echo e($branch->name); ?></p>
                          <p class=" font14px "><?php echo e($branch->summary); ?></p>

                      </div>
                      <div class="card-button-courses">

                          <a href="<?php echo e(route('front.FrontCourcse', $branch->id)); ?> "><button class="button2">تفقد
                                  الدورات </button></a>

                      </div>
                  </div>
              </div>
              <?php endif; ?>
              <?php if($agent->isMobile()
              ): ?>

              <div class="col colcard">
                  <div class="card-home card  " id="card-home-coures">
                      <img src="img/card-img.png" class="card-img-top-cource" alt="...">

                      <div class="card-body">
                          <p class="card-title-home font18px margin-b4"><?php echo e($branch->name); ?></p>
                          <p class=" font18px "><?php echo e($branch->summary); ?></p>

                      </div>
                      <div class="card-button-courses">

                          <a href="<?php echo e(route('front.FrontCourcse', $branch->id)); ?> "><button class="button2">تفقد
                                  الدورات </button></a>

                      </div>
                  </div>
              </div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          </div>
      </section>
  <?php $__env->stopSection(); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/courses.blade.php ENDPATH**/ ?>