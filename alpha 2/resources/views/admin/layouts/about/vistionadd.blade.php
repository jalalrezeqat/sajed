@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.about') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/about/vistion/add') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="inputtitelmistion">رؤيتنا</label>

                <textarea name="our_vision" class="form-control editvistion" id="our_vision"></textarea>

            </div>


            <button type="submit" class="btn btn-info">حفظ</button>
        </form>
    </div>
@endsection
