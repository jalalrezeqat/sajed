  <!DOCTYPE html>
  <html lang="ar">

  <head>
      <meta name="description"
          content="اشترك الآن في دورات التوجيهي على منصة ألفا التعليمية، دورات شاملة للفرعين العلمي والادبي مع امكانية مشاهدة الدروس وتكرارها في أي وقت وأي مكان">
      <meta name="keywords" content="دورات التوجيهي للفرعين العلمي والادبي, شرح كامل للمواد">
      <?php $__currentLoopData = $coursces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courscess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <meta name='<?php echo e($courscess->name); ?>' content=' <?php echo e(url('coursesditels' . '/' . $courscess->id)); ?>'>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <meta name="<?php echo e($branch->name); ?>" content='<?php echo e(url('courses/1')); ?>' />
      <meta name="viewport" content="width=device-width">
      <meta name="googlebot" content="index,follow">
      <meta name="robots" content="index,follow">
      <meta name="viewport" content="width=640, initial-scale=.5, user-scalable=no" />

      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/mediaipad.css']); ?>

  </head>
  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1734212884-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
  <?php session('windowW'); ?>
  

  <?php $__env->startSection('content'); ?>
      <div class="namebranch  float-right mb-2">
          <p class="namebranch-text"><a class="text-dark" href="<?php echo e(url('courses')); ?>">الدورات</a> > <a class="text-dark"
                  href="<?php echo e(url('courses/' . $branch->id)); ?>"><?php echo e($branch->name); ?></a></p>

      </div>
      <div class="carousel-inner">
          <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="carousel-item active">
                  <img class="d-block  slider-cource " src="<?php echo e(asset('img/slider/' . $slider->img)); ?>" alt="First slide">
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
      <h3 class="text-center font42px mt-3"> دورات التوجيهي </h3>
      <h3 class="text-center font42px font-weight-bold"> <?php echo e($branch->name); ?> </h3>

      <div class="d-flex justify-content-center mt-5 dir">
          <div id="butcour">
              <a href="<?php echo e(route('front.FrontCourcse', $branch->id)); ?>" class="btn btnfcou ">الفصل الاول </a>

          </div>
          <div class="mr-5">
              <a href="<?php echo e(route('front.FrontCourcse1', $branch->id)); ?>" class="btn btnfcous">الفصل الثاني</a>
          </div>
      </div>

      <div class="  ">

          
          <div class=" card-box-home  card-w  mtb00px  ">
              <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
                  <?php $__currentLoopData = $coursces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursces): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col colcard">
                          <div class="card-home card card-home " id="card-home">
                              <img src="<?php echo e(asset('img/courses/' . $coursces->img_name)); ?>" class="card-img-top-home"
                                  alt="...">
                              <div class="card-body">
                                  <p class="card-title-home font18px margin-b4"><?php echo e($coursces->name); ?></p>
                                  <p class=" font18px "><?php echo e($coursces->summary); ?></p>
                                  <a class="card-button font14px margin-t4"
                                      href="<?php echo e(url('coursesditels' . '/' . $coursces->id)); ?>">
                                      قراءة المزيد ></a>
                                  <button class="but-card font14px margin-t4 "><?php echo e($coursces->price); ?>₪ </button>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>

          </div>
          <br><br><br>
      <?php $__env->stopSection(); ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sajed\alpha\resources\views/front/FrontCourcse.blade.php ENDPATH**/ ?>