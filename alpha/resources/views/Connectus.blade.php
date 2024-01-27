
@extends('layouts.app')

    @section('content')
    <!-- Contact 3 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 ff">
  <div class="container ">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-10">
            <div class="d-flex mb-5">
              <div class="me-4 text-primary dir">
              </div>
              <div class="justify-content-xl-center  ">
                <h1 class="mb-3 dir text-center display-3 p-3" >تواصل معنا الآن!</h1>
                <h6 class="dir text-center h3">سنكونُ سعيدين في استقبال استفساراتكُم</h4>
                  <div class="d-flex ">
                    @foreach($slider as $slider)
                  <img class="img-fluid text-center p-2"  src="{{asset('img/slider/'.$slider->img)}}" alt="" >
                  @endforeach
                  <div class="ml-auto p-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <b>
                    <br>
                    <br>
                    </b>
                  <h6 class="mb-3 dir"> <img width="30px" height="30px" src="img/adress.png" alt=""> فلسطين-الخليل</h6>

                  <h6 class="mb-3 dir"> <img width="30px" height="30px" src="img/phone.png" alt=""> 0599999527</h6>
  
                  <h6 class="mb-3 dir"><img width="30px" height="20px" src="img/mail.png" alt=""> info@alpha.ps</h6>
                  </div>
                  </div>
              </div>
            </div>
            <div class="row mb-5">
             
              <div class="col-12 col-sm-6">
                
              </div>
            </div>
            <div class="d-flex contact-info">
            
              <div class="dir">
               
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-5 ">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

          <form class="contectus-form dir" action="{{url('Connectus')}}" method="POST" >
            @csrf
            <div class="row gy-4 gy-xl-2 p-4 p-xl-5">
              <div class="col-12 col-md-6">
                  <label for="fname" class="form-label">الاسم الاول <span class="text-danger"></span></label>
                  <div class="input-group">
                    <input type="fname" class="form-control" id="firestname" name="firestname" value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="lname" class="form-label">الاسم الاخير<span class="text-danger"></label>
                  <div class="input-group">
                    <input type="lname" class="form-control" id="lname" name="lastname" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">الايميل <span class="text-danger"></span></label>
                  <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>
                <div class="col-12">
                  <label for="pohne" class="form-label">رقم الهاتف <span class="text-danger"></span></label>
                  <input type="pohne" class="form-control" id="phone" name="phone" value="" required>
                </div>
                <div class="col-12 col-md-12">
              
                <div class="col-12">
                  <label for="message" class="form-label">الرسالة <span class="text-danger"></span></label>
                  <textarea maxlength="200" class="form-control" id="message" name="note" rows="3" required></textarea>
                </div>
              </div>
              <div class="col-4">
                  <div class="d-grid">
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                  </div>
                </div>
              <div class="col-4">
                  <div class="">
                    <button class="btn contectus-form-but " type="submit">ارسال</button>
                  </div>
                </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
    @endsection
  
  
  
  
  
  
    {{--  <form class="contectus-form" action="#!">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              <div class="col-12 col-md-6">
                  <label for="fname" class="form-label">الاسم الاول <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="fname" class="form-control" id="fname" name="fname" value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="lname" class="form-label">الاسم الاخير<span class="text-danger">*</label>
                  <div class="input-group">
                    <input type="lname" class="form-control" id="lname" name="lname" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">الايميل <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>
                <div class="col-12">
                  <label for="pohne" class="form-label">رقم الهاتف <span class="text-danger">*</span></label>
                  <input type="pohne" class="form-control" id="pohne" name="pohne" value="" required>
                </div>
                <div class="col-12 col-md-12">
              
                <div class="col-12">
                  <label for="message" class="form-label">الرسالة <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
              </div>
              <div class="col-4">
                  <div class="d-grid">
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                  </div>
                </div>
              <div class="col-4">
                  <div class="">
                    <button class="btn contectus-form-but btn-lg" type="submit">Submit</button>
                  </div>
                </div>
          </form>  --}}