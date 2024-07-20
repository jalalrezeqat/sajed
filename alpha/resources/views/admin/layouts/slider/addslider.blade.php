@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.slider') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/slider/add') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img' id="img">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الرابط</label>
                <input type="text" class="form-control" name='url' id="url" placeholder="الرابط ">
            </div>
            <div class="form-group">
                <label for="cars">اختار الصفحة :</label>
                <select class="form-control" name="page" id="page">
                    <option name="page" value="الرئيسية">الرئيسية</option>
                    <option name="page" value="الدورات">الدورات</option>
                    <option value="حول الفا">حول الفا</option>
                    <option value="اتصل بنا">اتصل بنا</option>
                    <option value="تسجيل الدخول">تسجيل الدخول </option>

                </select>
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
@endsection
