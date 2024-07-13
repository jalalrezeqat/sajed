  <!DOCTYPE html>
  <html lang="ar">

  <head>
      <meta name="viewport" content="width=device-width">
      <meta name="description"
          content="استكشف دورات التوجيهي على منصة ألفا التعليمية، دورات اون لاين مُصمّمة للفرعين العلمي والادبي، شرح شامل للمواد ومتاح في أي وقت وعلى أيدي أمهر الأساتذة في فلسطين
">
      <meta name="keywords" content="تعلم في أي وقت وأي مكان,  دورات توجيهي أون لاين, منصة ألفا
">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <meta name="<?php echo e($coursess->name); ?>" content="<?php echo e(url('coursesditels' . '/' . $coursess->id)); ?>" />
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/mediaipad.css']); ?>
      <style>
          /* #ac-wrapper {

              width: 100%;
              height: 100%;
              background: url("images/pop-bg.png") repeat top left transparent;
              position: fixed;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              display: flex;
              align-items: center;
              justify-content: center;
              background: rgba(0, 0, 0, .5);

          }

          .toolbarLB {
              text-align: right;
              padding: 10px;

          }

          .closeLB {
              color: #27AC1F;
              cursor: pointer;

          }
*/
          /* #popup {
              background: none repeat scroll 0 0 #FFFFFF;
              border-radius: 18px;
              -moz-border-radius: 18px;
              -webkit-border-radius: 18px;
              height: 361px;
              margin: 5% auto;
              position: relative;
              width: 597px;
          } */

          /* .lightbox.closed {
              display: none;
          }

          * {
              padding: 0;
              margin: 0;
          } */



          .float {
              position: fixed;
              width: 60px;
              height: 60px;
              bottom: 40px;
              right: 40px;
              background-color: #12181e;
              color: #FFF;
              border-radius: 50px;
              text-align: center;
              box-shadow: 2px 2px 3px #999;
          }

          .my-float {
              margin-top: 22px;
          }
      </style>
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
                  <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 1024)): ?>

                  <div class="col float-right ring">
                      <div>

                          <p class="font55px"><span style="color: #27AC1F">تعلّم في </span> أي وقت، وأي مكان</p>
                      </div>
                      <div>
                          <p style="font-size: 1.23vw;margin-top:50px;    font-weight:700 ;
">نحن نقدم لك كافة دورات مرحلة
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
                              <div class="col">
                                  <div class="row">
                                      <div class="col-sm-3"> <i class="fa fa-play-circle-o"
                                              style="font-size:48px;color:#27AC1F"></i>
                                      </div>
                                      <div class="col-sm-9 mt">
                                          <p style="font-size: 20px;color:#27AC1F; font-weight:700;">تعرّف أكثر</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col  float-left">
                      <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <img id="img-about" class="img-home" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>"
                              alt="">
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          </div>
          <?php endif; ?>
          <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthBetween', 480, 1028)): ?>

          <div class="col float-right ring">
              <div>

                  <p class="font55px"><span style="color: #27AC1F">تعلّم في </span> أي وقت، وأي
                      مكان</p>
              </div>
              <div>
                  <p class="font18px" style="margin-top:20px;    font-weight:700 ;
">نحن نقدم لك كافة دورات مرحلة
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
                      <div class="col">
                          <div class="row">
                              <div class="col-sm-9 mt"><i class="fal fa-play-circle font20px" style="color:#27AC1F"></i>
                                  <span class="font20px" style="color:#27AC1F; font-weight:700;">تعرّف أكثر</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col  float-left">
              <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <img class="img-home" src="<?php echo e(asset('img/slider/' . $slider->img)); ?>" alt="">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          </div>
          </div>
          <?php endif; ?>
          
      </section>
      <?php if(Auth::user()): ?>
          <?php $course = DB::table('codecards')
              ->where('user_id', '=', Auth::user()->id)
              ->get();
          ?>
          <section>
              <div class="  " id="">
                  

                  <!-- <div class="row row-cols-1  card-w dir   row-cols-md-3 ">
                                                                                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $coursename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursenames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($coursenames->id == $coursess->courses): ?>
    <div class="col colcard">
                                                                                                <div class="card-home card  " id="card-profile">
                                                                                                    <img src="<?php echo e(asset('img/courses/' . $coursenames->img_name)); ?>" class="card-img-top-profile"
                                                                                                        alt="...">
                                                                                                    <div class="card-body">
                                                                                                        <?php $__currentLoopData = $lessonid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lessonids): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($coursenames->id == $lessonids->nameofcourse): ?>
    <p class="card-title-home font14px "><a
                                                                                                                        href="<?php echo e(url('courseshow' . '/' . $coursenames->id . '/' . $lessonids->idlesson)); ?>"
                                                                                                                        class="card-title-home text-center"><?php echo e($coursenames->name); ?></a>
                                                                                                                </p>
<?php else: ?>
    <p class="card-title-home font14px "><a
                                                                                                                        href="<?php echo e(url('courseshow' . '/' . $coursenames->id . '/1')); ?>"
                                                                                                                        class="card-title-home "><?php echo e($coursenames->name); ?></a></p>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </div> -->

                  <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">

                      <div class="carousel-inner">

                          <div class="carousel-item active">
                              <div class="card-wrapper container-sm d-flex  row-cols-md-3 justify-content-around">
                                  <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php $__currentLoopData = $coursename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursenames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($coursenames->id == $coursess->courses): ?>
                                              <div class="card  " style="width: 18rem;">
                                                  <img src="https://source.unsplash.com/collection/190727/1600x900"
                                                      class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>

                                                  </div>
                                              </div>
                                          <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                          </div>

                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                              data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                              data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                          </button>
                      </div>
                  </div>
              </div>
              </div>

              </div>
          </section>
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
                                      <p class=" font18px "><?php echo e($courses->summary); ?></p>
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
          <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 482)): ?>


          
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
                                  class="btn qustion-text font18px"><?php echo e($question->question); ?></button>
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
      
      <a href="https://www.google.com/" target="_blank" class="float">
          <i class="fa fa-whatsapp  my-float fa-2x"></i>
      </a>

      

      
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/welcome.blade.php ENDPATH**/ ?>