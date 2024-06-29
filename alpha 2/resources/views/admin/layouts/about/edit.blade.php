@extends('admin.layouts.app')
@section('content')
    <a href="{{ route('admin.about') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/about/update/' . $about->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container">
                <div class="row">

                    <div class="form-group">
                        <label for="inputtitelmistion"> نص السؤال </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea">
                            {{ $about->summernote }}
                        </textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info">تعديل</button>
        </form>
    </div>
@endsection
