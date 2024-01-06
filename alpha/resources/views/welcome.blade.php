
@extends('layouts.app')

    @vite(['resources/css/welcome.css'])
    @section('content')
    {{-- slider home --}}
    <div id="carouselExampleSlidesOnly" class="carousel slider  slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block  w-100" src="img/slide1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
        </div>
      </div>
    </div>
    {{-- end slider home --}}
    <div class="mt">
     
    </div>
    {{-- <span  class="w-75 p-3 border slider d-flex card-bord  justify-content-around rounded p-3 mb-2  text-white "> --}}

<div class="contener ">
      <h3 class="text-center ">الدورات الاكثر طلبا </h3>
      <h5 class="text-center ">اختر دورات التوجيهي التي تناسبك وتساعدك على زيادة معدلك</h5>
    {{-- card course --}}
    <div class=" card-box  card-w   slider">
      <div class="row row-cols-1 card-w dir ovarflow  row-cols-md-3 ">
        @foreach($courses as $courses)
        <div class="col">
          <div class="card shadow-lg  mb-5  rounded ">
            <img src="img/img_avatar.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title ">{{$courses->name}}</h5>
              <p class="card-text">{{$courses->summary}}</p>
              <button class="card-button"> قراءة المزيد ></button>
              <button class="but-card">{{$courses->price}}₪   </button>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col">
          <div class="card shadow-lg  mb-5  rounded ">
            <img src="img/img_avatar.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title "></h5>
              <p class="card-text"></p>
              <button class="card-button"> قراءة المزيد ></button>
              <button class="but-card">₪   </button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
    
    {{-- end card course --}}
    <div class="mt-1">
      <h3 class="text-center ">معلمي منصة الفا </h3>
      <h5 class="text-center ">نفتخر في ألفا بتواجد  أفضل المُدرسين على مستوى الوطن!</h5>
    </div>

    {{-- slide tetcher --}}
    <div id="carouselExampleIndicators" class="carousel slider  slide" data-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block  w-100" src="img/slide2.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block  w-100" src="img/slide2.png" alt="Third slide">
        </div>
      </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    {{-- end slide tetcher --}}
    {{-- qustion  --}}

    <div class=" mt-3  card-text">
     <h2 class="card-text">الاسئلة الشائعة</h2>

      <p>

        <button class="btn  qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></button>
        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn "> كيف يُمكنني الإلتحاق بالدورات على منصّة ألفا؟ </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class=" qustion-box card-body">
          من خلال النقر على زر “اطلب بطاقتك” المتوفّر في كافة الصفحات الخاصّة بالدورات وتعبئة المعلومات المطلوبة أو من خلال
          التواصل مع فريق المبيعات عبر الواتس آب.
        </div>
      </div>


    </div>
    {{-- end qustion --}}

    {{-- foter --}}
   <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="footer carousel slide ">

  <footer class=" text-center container  text-white">
    <!-- Grid container -->
    <div class=" p-4">
      <!--Grid row-->
      <div class="row ">
        <!--Grid column-->
        <div class="col-lg-3 ">

          <div class="rounded-circle  d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="img/logofooter.jpeg" height="70" alt=""
                 loading="lazy" />
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 ">

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>منصّة ألفا - alpha.ps</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i> alpha.ps</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>منصّة ألفا - alpha.ps</a>
            </li>
        
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 ">

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="{{ url('/') }}" class="text-white"><i class="fas fa-paw pe-3"></i>الرئيسيّة</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>الدورات</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>حول ألفا</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>اتصل بنا</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 ">

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>تواصل معنا وابدأ رحلتـك</p>
              <p><i class="fas fa-map-marker-alt pe-2"></i>للحصول على مُعدّل 99.7</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i>info@alpha.ps</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>(+970) 597-618-504</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center " >
      Copyright © 2024 alpha All Rights Reserved. 
       </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->
    <!-- Footer -->


    @endsection
