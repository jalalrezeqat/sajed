@extends('admin.layouts.app')

@section('content')
    <div class="dir ">
        <a href="{{ route('admin.dashboard') }}"><button class="btn btn-back-user btn-lg btn-success">رجوع</button></a>
        <a href="{{ route('admin.password') }}"><button class="btn  btn-lg btn-success">تغير كلمة المرور</button> </a>

        <div class="form-edit-user-profile">
            <form action="{{ url('admin/profile/update/' . Auth::guard('admin')->user()->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="inputtitelmistion">الاسم </label>
                    <input type="text" class="form-control" required value="{{ Auth::guard('admin')->user()->name }}"
                        name='name' id="name" placeholder="">
                </div>

                <div class="form-group">
                    <label for="inputtitelmistion">الايميل </label>
                    <input type="text" class="form-control" required name='email'
                        value="{{ Auth::guard('admin')->user()->email }}" id="email" placeholder="">
                </div>


                <button type="submit" class="btn  btn-lg btn-submit-user btn-success">حفظ</button>
            </form>
        </div>


    </div>
@endsection
