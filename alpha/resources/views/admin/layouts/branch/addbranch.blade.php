@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.branch') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/branch/add') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="inputtitelmistion">اسم الفرع</label>
                <input type="text" class="form-control" name='name' id="name" placeholder="اسم الفرع">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الملخص </label>
                <input type="text" class="form-control" name='summary' id="summary" placeholder="الملخص">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الصورة</label>
                <input type="file" class="form-control" name='img' id="img">
            </div>
            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
@endsection
