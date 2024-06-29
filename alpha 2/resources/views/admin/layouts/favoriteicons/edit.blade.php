@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.Favoriteicon') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/favoriteicon/update/' . $favoriteicon->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputtitelmistion">صورة </label>
                <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" name='img'
                    id="img">
            </div>

            <button type="submit" class="btn btn-info">حفظ</button>
        </form>
    </div>
@endsection
