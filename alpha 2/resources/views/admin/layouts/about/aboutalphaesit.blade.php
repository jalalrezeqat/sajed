@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.about') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/about/aboutalpha/' . $aboutalpha->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="inputtitelmistion">حول الفا</label>

                <textarea name="aboutalpha" class="form-control editvistion" id="aboutalpha">{{ $aboutalpha->aboutalpha }}</textarea>

            </div>


            <button type="submit" class="btn btn-info">تعديل</button>
        </form>
    </div>
@endsection
