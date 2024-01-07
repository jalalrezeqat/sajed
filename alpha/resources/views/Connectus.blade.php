
@extends('layouts.app')

    @section('content')
<!-- Contact 1 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container dir contectus-form">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="bg-white border rounded shadow-sm overflow-hidden">
          <form action="#!">
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
            <div class="col-5">
                <div class="d-grid">
                </div>
              </div>
              <div class="col-5">
                <div class="d-grid">
                </div>
              </div>
            <div class="col-2">
                <div class="d-grid">
                  <button class="btn contectus-form-but btn-lg" type="submit">Submit</button>
                </div>
              </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <div></div>
</section>
    @endsection