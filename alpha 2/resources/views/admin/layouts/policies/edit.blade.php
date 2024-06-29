@extends('admin.layouts.app')
@section('content')
    <div>

        <a href="{{ route('admin.policies') }}"><button class="btnaboutadd btn btn-dark">رجوع </button></a>

    </div>
    <div class="formaddm">
        <form action="{{ url('admin/policies/update/' . $policies->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputtitelmistion"> سياسات الموقع </label>
                        <textarea name='summernote' id="summernote" class="summernote form-control formaddmtextarea">
                          {{ $policies->summernote }}
                        </textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">تحديث</button>
        </form>
    </div>
@endsection
