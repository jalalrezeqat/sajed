
@extends('layouts.app')

    @section('content')
    
    {{-- slider about --}}
    <div id="carouselExampleSlidesOnly" class="carousel slider-cource  slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block   w-100" src="img/aboutslider.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
        </div>
      </div>
    </div>
    {{-- end slider about --}}
    <!--  -->
    <div class="slider-cource dir ">
      <div>
        <h1 class=" ">  <img src="img/aboutv.png" alt="">رؤيتنا :</h1>
        <p class=" ">بدأنا في العمل على توفير دورات الثانوية العامّة للأفرع الثلاث الرئيسيّة (علمي، أدبي، صناعي)، ونعمل ضمن خطّتنا التطويريّة على توسيع خدماتنا لتشمل باقي أفرع الثانوية العامّة ثُم التوسّع لتوفير دورات لباقي الصفوف المدرسيّة بالإضافة لتوفير ألعاباً تعليميّة للأطفال (الصفوف الأساسيّة والتمهيدي)</p>
        </div>

        <div>
            <h1><img src="img/aboutm.png" alt="">مهمتنا :</h1>
            <p>تتمحور مهامنا في منصّة ألفا حول: </p>
            <ul>
                <li>1.جودة التعليم: حيث يعمل فريقنا بشكل دائم على توفير كُل ما يحتاجُه الطلاب بناءً على رغباتهم وليس رغبات فريقنا لنضمن الراحة والإستفادة لهُم خلال مسيرتهم نحو معدّل 99.7!.</li>
                <li>2.التطوّر المستمر: بغضّ النظر عن مواكبة التطوّر التكنولوجي في التعليم، يُعاهد فريق ألفا على نفسه تطوير وتوسيع خدماته المُقدمة أولاً بأول من أجل توفير كافّة احتياجات السوق وتطوير القطاع التعليمي في فلسطين.</li>
                <li>3.توفير الجُهد على الطلّاب: فمن خلال التحاق الطّالب في دورات المنصّة فإنّنا نوفر عليه جُهد وعناء المواصلات بالإضافة لتكاليفها، كما نُمكّنه من التعلّم في الوقت الذي يُناسبه وفي أي مكان من خلال تقديم محاضراتنا المُسجّلة.</li>
            </ul>
        </div>
    </div>
    @endsection
