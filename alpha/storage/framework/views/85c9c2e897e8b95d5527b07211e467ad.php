  <!DOCTYPE html>
  <html lang="ar">
  <?php $iconfav = DB::table('favoriteicons')->where('name', '=', 'icon')->get();
  $width = '<script>document.write(screen.width); </script>';
  
  ?>

  <head>
      <meta name="viewport" content="width=device-width">
      <meta name="description"
          content="استكشف دورات التوجيهي على منصة ألفا التعليمية، دورات اون لاين مُصمّمة للفرعين العلمي والادبي، شرح شامل للمواد ومتاح في أي وقت وعلى أيدي أمهر الأساتذة في فلسطين
">
      <style>
          body {
              background-color: #f8f8f8;

          }
      </style>
      <meta name="keywords" content="تعلم في أي وقت وأي مكان,  دورات توجيهي أون لاين, منصة ألفا
">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <meta name="<?php echo e($coursess->name); ?>" content="<?php echo e(url('coursesditels' . '/' . $coursess->id)); ?>" />
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/mediaipad.css', 'resources/css/vedio.css']); ?>
      <?php $__currentLoopData = $iconfav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iconfavs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
          <link rel="stylesheet" type="text/css" href="<?php echo e(asset('img/Favoriteicon/' . $iconfavs->img)); ?>">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </head>
  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-776431003-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
  
  <?php $__env->startSection('content'); ?>
      <?php
      
      ?>

      <section class="homepage">
          <div id="ac-wrapper" style='display:none' onClick="hideNow(event)">
              <div id="popup">
                  <div class="lightbox">
                      <div class="toolbarLB">
                          <span class="closeLB" onClick="PopUp('hide')">
                              <p class="sss">X</p>
                          </span>

                      </div>
                  </div>

              </div>
          </div>
          <div class="slider dir " style=" margin-top: 70px;">
              <div class="row">

                  <?php if($agent->isDesktop()): ?>
                      <div class="col float-right ring">
                          <div>

                              <p class="font55px"><span style="color: #27AC1F">تعلّم في </span> أي وقت، وأي مكان</p>
                          </div>
                          <div>
                              <p style="font-size: 1.23vw;margin-top:50px;    font-weight:700 ;
">نحن نقدم لك كافة دورات
                                  مرحلة
                                  التوجيهي التي تحتاجها
                                  للحـصـول عـلى مـعـدل
                                  تحلم به وعلى ايدي امهر الاساتذة.</p>

                          </div>

                          <div>
                              <div class="row dir " style="margin-top:50px">
                                  <div class="col">

                                      <a href="<?php echo e(url('/courses')); ?> "><button class="button1 ">ابدأ الآن
                                          </button></a>
                                  </div>
                                  <div class="col ">

                                      <div class="row">
                                          <label class=" button3" style="color:#27AC1F; " aria-current="page"
                                              for="modal-toggle-vedio">
                                              تعرف اكثر
                                          </label>


                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <div class="col  float-left">
                          <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <img id="" class="img-home" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>"
                                  alt="">
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
              </div>
          </div>
          <?php endif; ?>

          
          <?php if($agent->isMobile()): ?>
              <div class="col ">
                  <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <img class="img-home" src="<?php echo e(asset('img/slider/' . $sliders->img)); ?>" alt="">
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="col float-right ring">
                  <div>

                      <p class="font55px"><span style="color: #27AC1F">تعلّم في </span> أي وقت، وأي مكان</p>
                  </div>
                  <div>
                      <p class="font18px">نحن نقدم لك كافة دورات مرحلة
                          التوجيهي التي تحتاجها
                          للحـصـول عـلى مـعـدل
                          تحلم به وعلى ايدي امهر الاساتذة.</p>
                  </div>
                  <div>
                      <div class="row dir " style="margin-top:20px">
                          <div class="col">
                              <a href="<?php echo e(url('/courses')); ?> "><button class="button1 ">ابدأ الآن
                                  </button></a>
                          </div>
                          <div class="col mt-2">

                              <div class="row">
                                  <div class="col ">

                                      <div class="row">
                                          <label class="btncouresdetale button3"
                                              style="color:#27AC1F; font-weight:700;font-size:1.25vw;
                                            "
                                              aria-current="page" for="modal-toggle-vedio">
                                              تعرف اكثر
                                          </label>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          <?php endif; ?>
      </section>

      <?php if(Auth::user()): ?>
          <?php if(Auth::user()->stutes != 1): ?>
              <?php $course = DB::table('codecards')
                  ->where('user_id', '=', Auth::user()->id)
                  ->get();
              ?>
              <?php $__currentLoopData = $coursename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursesss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <div class="dir profile-coures " id="">
                  <p class="mb-5 font18px">الدورات المسجل بها</p>

                  <div class="row row-cols-1 mt-5  card-w dir   row-cols-md-3 ">
                      <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php $__currentLoopData = $coursename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursenames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($coursenames->id == $coursess->courses): ?>
                                  <?php $auth = 1; ?>

                                  <div class="col colcard">
                                      <div class="card-home card  " id="">
                                          <img src="<?php echo e(asset('img/courses/' . $coursenames->img_name)); ?>"
                                              class="card-img-top-home" alt="...">
                                          <div class="card-body">
                                              <?php $__currentLoopData = $lessonidds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lessonidsa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <?php if($coursenames->id == $lessonidsa->idcoures): ?>
                                                      <p class="card-title-home font14px "><a
                                                              href="<?php echo e(url('courseshow' . '/' . $coursenames->id . '/' . $lessonidsa->idlesson)); ?>"
                                                              class="card-title-home  text-center"><?php echo e($coursenames->name); ?></a>
                                                      </p>
                                                      <?php $auth = 0; ?>
                                                  <?php endif; ?>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php if($auth == 1): ?>
                                                  <p class="card-title-home font14px ">
                                                      <a class="nav-link"
                                                          href="<?php echo e(url('courseshow' . '/' . $coursenames->id . '/1')); ?>"
                                                          class="card-title-home "><?php echo e($coursenames->name); ?></a>
                                                  </p>
                                              <?php endif; ?>
                                          </div>
                                      </div>
                                  </div>
                              <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          <?php endif; ?>
      <?php endif; ?>

      

      
      <section class="mt100px">
          <div class="contener  ">
              <div class="m-1">
                  <h3 class="text-center font48px">دورات التوجيهي الأكثر طلباً </h3>
                  <p class="text-center font18px mt"style="">اختر دورات التوجيهي التي تناسبك وتساعدك على زيادة معدلك
                  </p>
              </div>
              
              <div class=" card-box-home  card-w  mtb00px  ">
                  <div class="row row-cols-1  card-w dir ovarflow  row-cols-md-3 ">
                      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col colcard ">
                              <div class="card-home card card-home " id="card-home">
                                  <img src="<?php echo e(asset('img/courses/' . $courses->img_name)); ?>" class="card-img-top-home"
                                      alt="...">
                                  <div class="card-body">
                                      <p class="card-title-home font18px margin-b4"><?php echo e($courses->name); ?></p>
                                      <p class=" font14px "><?php echo e($courses->summary); ?></p>
                                      <a class="card-button font14px margin-t4"
                                          href="<?php echo e(url('coursesditels' . '/' . $courses->id)); ?>">
                                          قراءة المزيد ></a>
                                      <label class="but-card font14px margin-t4 "><?php echo e($courses->price); ?>₪ </label>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>
                  <div class="card-btn-allcourse ">
                      <a href="<?php echo e(url('/courses')); ?> "><button class="button1 ">جميع الدورات
                          </button></a>
                  </div>
              </div>
          </div>
          </div>
      </section>
      

      <section class="mt100px">

          <div class="m-1 ">
              <h3 class="text-center font48px">معلمي منصة الفا </h3>
              <p class="text-center font18px mb-4 mt">نفتخر في ألفا بتواجد أفضل المُدرسين على مستوى
                  الوطن!
              </p>
          </div>
          <?php if($agent->isDesktop()): ?>
              
              <div id="carousel" class="carousel shadow-lg slider-tet slide">
                  <img src="<?php echo e(asset('img/Vector.png')); ?>" id ="shapetetcher1" alt="">

                  <div class="carousel-inner">
                      <?php $__currentLoopData = $sliderteacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sliderteachers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                              <img class="d-block d-block   img-slider-teacher"
                                  src="<?php echo e(asset('img/slider/' . $sliderteachers->img)); ?>" alt="صورة معلومات عن المعلم">
                          </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
                  <img src="<?php echo e(asset('img/Vector.png')); ?>" id ="shapetetcher2" alt="">
              </div>
          <?php endif; ?>

          <?php if($agent->isMobile()): ?>
              <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('breakpoints', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-776431003-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


              <style>
                  @media (max-width: 480px) {

                      /* .img-1 {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  position: relative;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  width: 200px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  height: auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  border-radius: 50%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  top: -127px !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  /* box-shadow: 3px 15px 20px rgba(0, 0, 0, 0.5) */
                      /* } */


                      .carousel-indicators li {
                          cursor: pointer;
                          border-radius: 50% !important;
                          width: 15px;
                          height: 15px;
                          opacity: 0.5;
                          margin: 0 15px 18px 15px;
                          color: #27AC1F;
                          background-color: #27AC1F !important;
                          bottom: -30px;
                          position: relative
                      }


                      .carousel-indicators li::marker {
                          visibility: hidden;
                          color: #cd1e27;
                          font-size: 0px
                      }

                      #carouselExample {
                          box-shadow: -0px 5px 10px rgba(7, 7, 7, 0.5) !important
                      }

                      .carousel-inner {
                          border-radius: 15px !important
                      }
                  }

                  @media (min-width: 481px) and (max-width: 769px) {
                      .img-1 {
                          position: relative;
                          width: 600px;
                          height: auto;
                          top: -17px !important;
                          /* box-shadow: 3px 15px 20px rgba(0, 0, 0, 0.5) */
                      }

                      .carousel-indicators li {
                          cursor: pointer;
                          border-radius: 50% !important;
                          width: 25px;
                          height: 25px;
                          opacity: 0.5;
                          margin: 0 15px 18px 15px;
                          color: #27AC1F;
                          background-color: #27AC1F !important;
                          bottom: -30px;
                          position: relative
                      }

                      .carousel-indicators li::marker {
                          visibility: hidden;
                          color: #cd1e27;
                          font-size: 0px
                      }

                      #carouselExample {
                          box-shadow: -0px 5px 10px rgba(7, 7, 7, 0.5) !important
                      }

                      .carousel-inner {
                          border-radius: 15px !important
                      }
                  }
              </style>
              <div class="container px-2 px-md-4 py-5 mx-auto ">
                  <div class="row d-flex justify-content-center ">
                      <div class="col-lg-5 col-md-7 col-sm-9 ">

                          <div id="carouselExample" class="carousel  shadow-sm  slide">
                              <div class="carousel-inner">
                                  <?php $__currentLoopData = $sliderteachermob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sliderteachermobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                          <img class="d-block d-block   img-slider-teacher"
                                              src="<?php echo e(asset('img/sliderphone/' . $sliderteachermobs->img)); ?>"
                                              alt="صورة معلومات عن المعلم">
                                      </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                  data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                  data-bs-slide="next">
                                  <span class="carousel-control-next-icon"></span>
                                  <span class="visually-hidden">Next</span>
                              </button>
                              
                          </div>

                      </div>
                  </div>
              </div>
          <?php endif; ?>

          
      </section>
      
      

      

      

      
      <section class="mt100px">
          <div class=" m-3 dir mtb00px mt100px card-text-home">
              <h2 class="card-text-home font48px ">الاسئلة الشائعة</h2>
              <?php $__currentLoopData = $CommonQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="qustion1">
                      <p>
                          <a class="purple-head hover-black plusand-" onclick="changeIcon(this)">
                              <i data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($question->id); ?>qu"
                                  aria-expanded="false" aria-controls="collapseExample"
                                  class="fa colorg fa-plus font-xs"></i>
                              <button type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapse<?php echo e($question->id); ?>qu" aria-expanded="false"
                                  aria-controls="collapseExample"
                                  class="btn qustion-text font18px"><?php echo e($question->question); ?></button></a>
                      </p>
                      <div class="collapse " id="collapse<?php echo e($question->id); ?>qu">
                          <div class="  qustion-box card-body">
                              <p style="font-size: 87.5%"><?php echo e($question->question_text); ?></p>
                          </div>
                      </div>
                  </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>

      </section>
      <section>
          <div class="rt-container">
              <div class="col-rt-12">
                  <div class="Scriptcontent">

                      <!-- Login Form Popup HTML -->

                      <input id="modal-toggle-vedio" type="checkbox">
                      <label class="modal-backdrop" data-bs-backdrop="static" tabindex="-1"
                          for="modal-toggle-vedio"></label>
                      <div class="modal-content-vedio">
                          <label class="modal-close-btn" for="modal-toggle-vedio">
                              <svg width="30" height="30">
                                  <line x1="5" y1="5" x2="20" y2="20" />
                                  <line x1="20" y1="5" x2="5" y2="20" />
                              </svg>
                          </label>
                          <!--  LOG IN  -->

                          <div class="col-12 dir" style="margin: auto;">

                              <div class="vidio " style="height: 50%;width: 80%;margin: auto;">
                                  <?php $__currentLoopData = $aboutmore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutmores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <video style="height: 50%;width: 80%;margin: auto;" controls autoplay
                                          style="--plyr-color-main: #1ac266; " crossorigin playsinline poster="">
                                          <source src="<?php echo e(asset('img/aboutmore/' . $aboutmores->vedio)); ?>"
                                              type="video/mp4" size="576">
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              </div>
                          </div>
                      </div>
      </section>
  <?php $__env->stopSection(); ?>
  <?php $c = 'show'; ?>
  <script>
      function changeIcon(anchor) {
          var icon = anchor.querySelector("i");
          icon.classList.toggle('fa-plus');
          icon.classList.toggle('fa-minus');

          anchor.querySelector("span").textContent = icon.classList.contains('fa-plus') ? "Read more" : "Read less";
      }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </script>
  <script>
      //   $('.carousel').carousel({
      //       interval: 50
      //   });

      //   let timer = setInterval(() => {
      //       $('.carousel').carousel('dispose')
      //       $('.carousel').carousel({
      //           interval: 89
      //       });
      //   }, 900)

      lightBoxClose = function() {
          document.querySelector(".lightbox").classList.add("closed");
      }

      function PopUp(hideOrshow) {
          if (hideOrshow == 'hide') {
              document.getElementById('ac-wrapper').style.display = "none";
          } else if (localStorage.getItem("popupWasShown") == null) {
              localStorage.setItem("popupWasShown", 1);
              document.getElementById('ac-wrapper').removeAttribute('style');
          }
      }
      var c = <?php echo json_encode($c); ?>;



      //   window.onload = function() {
      //       setTimeout(function() {
      //           PopUp(c);
      //       }, 0);
      //   }


      function hideNow(e) {
          if (e.target.id == 'ac-wrapper') document.getElementById('ac-wrapper').style.display = 'none';
      }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/welcome.blade.php ENDPATH**/ ?>