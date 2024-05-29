@extends('admin.layouts.app')
@section('content')
    <div class="formaddm">
        <a href="{{ url()->previous() }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>
        <form action="{{ route('admin.courses.lessonadd1', $chabterid) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="inputtitelmistion">اسم الدرس</label>
                <input type="text" class="form-control" name='name' id="name" placeholder="اسم الدرس ">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الفيديو</label>
                <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name='vedio'
                    id="vedio">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">ملخص المحاضرة</label>
                <input type="file" accept="application/pdf" class="form-control" name='file' id="file">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">الوحدة</label>
                <select class="form-control" name="chabters" id="chabters">
                    @foreach ($chabter as $chabter)
                        <option value="{{ $chabter->id }}">{{ $chabter->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-info">اضافة</button>
        </form>
    </div>
@endsection
