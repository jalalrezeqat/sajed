@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.socials') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/socials/update/' . $socials->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputtitelmistion">اسم الحساب</label>
                <input type="text" class="form-control" name='nameofpage' id="nameofpage"
                    value="{{ $socials->nameofpage }}">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">صورة </label>
                <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" name='img'
                    id="img">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">رابط حسابك </label>
                <input class="form-control" type="url" id="url" name="url" value="{{ $socials->url }}">
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">نشط او غير نشط </label>
                <select name="status" id="status" class="form-control">
                    <option class="form-control" value="1">نشط</option>
                    <option class="form-control" value="0">غير نشط</option>

                </select>
            </div>

            <button type="submit" class="btn btn-info">حفظ</button>
        </form>
    </div>
@endsection
