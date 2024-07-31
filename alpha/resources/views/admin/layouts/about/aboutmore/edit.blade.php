@extends('admin.layouts.app')
@section('content')
    <div class="formaddm mb-5">
        <a href="{{ route('admin.aboutmore') }}"><button class="btnaboutadd btn btn-dark">رجوع
            </button></a>
        <form action="{{ url('admin/aboutmore/update/' . $admin->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group mt-5">
                <label for="inputtitelmistion">الفيديو</label>
                <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name='vedio'
                    id="vedio">
            </div>



            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
@endsection
